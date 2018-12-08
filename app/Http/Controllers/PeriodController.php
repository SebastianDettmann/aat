<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeriodFormRequest;
use App\Period;
use App\Reason;
use Carbon\Carbon;

class PeriodController extends Controller
{
    protected $redirect = 'period.index'; #todo check for usability
    protected $timezone = 'Europe/Berlin';
    protected $first_day_of_year = null;
    protected $current_date = null;
    protected $calendar = null;

    public function __construct()
    {
        $this->first_day_of_year = Carbon::now()->startOfYear();
        $this->current_date = Carbon::now();

        $this->calendar = \Calendar::setOptions([ //set fullcalendar options
            'firstDay' => 1, //Week starts with Monday
            'header' => [
                'left' => 'prev,next today',
                'center' => 'title',
                'right' => 'month,basicWeek',
            ],
            'navLinks' => true, // can click day/week names to navigate views
            'editable' => true,
            'selectable' => true,
            'eventLimit' => true, // allow "more" link when too many events
            'locale' => 'de',
            'contentHeight' => 500,
        ]);
    }

    /**
     * Display a listing \App\Period by user.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        #todo check for use ajax

        $periods_year_now_past = [];
        $periods_year_now_current = [];
        $periods_year_now_future = [];
        $calendar_periods = [];

        $reasons = Reason::get();
        $periods = auth()->user()->periods->sortBy('start');

        foreach ($periods as $period) {
            if ($period->start->gte($this->first_day_of_year) || $period->end->gte($this->first_day_of_year)) {
                if ($period->start->lte($this->current_date) && $period->end->gte($this->current_date)) {
                    $periods_year_now_current[] = $period;
                } elseif ($period->start->lte($this->current_date)) {
                    $periods_year_now_past[] = $period;
                } else {
                    $periods_year_now_future[] = $period;
                }
            }
            # add periods to Calendar
            $calendar_periods[] = \Calendar::event(
                $period->start->format('d.m.y') . ' - ' . $period->end->format('d.m.y') . ' : ' . $period->pendingText(), //event title
                true, //full day event?
                $period->start, //start time (you can also use Carbon instead of DateTime)
                $period->end, //end time (you can also use Carbon instead of DateTime)
                $period->id, //optionally, you can specify an event ID
                [
                    'color' => $period->reason->hex_color,
                    'textColor' => '#000000']
            );
        }

        $this->calendar->addEvents($calendar_periods);

        return view('period.index')->with([
            'periods_year_now_future' => $periods_year_now_future,
            'periods_year_now_current' => $periods_year_now_current,
            'periods_year_now_past' => $periods_year_now_past,
            'reasons' => $reasons,
            'calendar' => $this->calendar,
        ]);
    }

    /**
     * Display a listing of all \App\Period.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function indexAll()
    {
        #todo check for use ajax
        $periods = Period::with('reason')->get();
        $reasons = Reason::get();
        $calendar_periods = [];

        foreach ($periods as $period) {
            # add periods to Calendar
            $calendar_periods[] = \Calendar::event(
                $period->start->format('d.m.y') . ' - ' . $period->end->format('d.m.y') . ' : ' . $period->pendingUser(), //event title
                true, //full day event?
                $period->start, //start time (you can also use Carbon instead of DateTime)
                $period->end, //end time (you can also use Carbon instead of DateTime)
                $period->id, //optionally, you can specify an event ID
                [
                    'color' => $period->reason->hex_color,
                    'textColor' => '#000000']
            );
        }

        $this->calendar->addEvents($calendar_periods);

        return view('period.indexall')->with([
            'reasons' => $reasons,
            'calendar' => $this->calendar,
        ]);
    }

    /**
     * Store a newly created \App\Period in Database.
     *
     * @param  \App\Http\Requests\StorePeriodFormRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeriodFormRequest $request)
    {
        $data = [
            'start' => Carbon::createFromFormat('d.m.Y', $request->start)->timezone($this->timezone),
            'end' => Carbon::createFromFormat('d.m.Y', $request->end)->timezone($this->timezone),
            'comment' => $request->comment,
            'reason_id' => $request->reason_id,
        ];

        $period = auth()->user()->periods()->create($data);

        // Todo update phpdoc, if period has to confirm message model observer

        return redirect()->back();
    }

    /**
     * Remove the specified \App\Period from Database.
     *
     * @param  \App\Period  $period
     * by model-key-binding
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * rendered as 404
     * @throws \Exception
     * my throws an Exception if the Reason not Exists,
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        #Todo email notification, redirect, validation $period exist update phpdoc

        $this->authorize('access', $period);

        $period->delete();

        return redirect()->back();
    }
    #todo summery of all leave requests off the year
}
