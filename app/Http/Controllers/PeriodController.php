<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeriodFormRequest;
use App\Period;
use App\Reason;
use Carbon\Carbon;

class PeriodController extends Controller
{
    protected $redirect = 'period.index'; #todo check for usability

    protected $timeZone = 'Europe/Berlin';

    /**
     * Display the specified \App\Period.
     *
     * @param  \App\Period $period
     * by model-key-binding
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * rendered as 404
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Period $period)
    {
        $this->authorize('access', $period);

        return view('period.show')->with([
           'period' => $period
        ]);
    }

    /**
     * Display a listing \App\Period by user.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index($year, $month)
    {
        #todo check for use ajax
        #todo check for current month

        $reasons = Reason::get();

        $periods = auth()->user()->periods; # todo scope dieses Jahr
#dd($periods);

        /*  $calendar_periods = [];

          foreach ($periods as $period) {
              $calendar_periods = \Calendar::event($period->reason->title, true, $period->start, $period->end, $period->id, ['color' => $period->reason->hex_color]);
          }

          $calendar = \Calendar::addEvents( $calendar_periods);*/


        $events = [];

        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2018-12-11T0800', //start time (you can also use Carbon instead of DateTime)
            '2018-12-12T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2018-12-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2018-12-14'), //end time (you can also use Carbon instead of DateTime)
            10 //optionally, you can specify an event ID
        );

        $spezial = \Calendar::event(
            "Vspezial mit farbe", //event title
            true, //full day event?
            new \DateTime('2018-12-19'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2018-12-20'), //end time (you can also use Carbon instead of DateTime)
            23 //optionally, you can specify an event ID
        );

        $calendar = \Calendar::addEvents($events)//add an array with addEvents
        ->addEvent($spezial, [ //set custom color fo this event
            'color' => '#afafaf',
        ])->setOptions([ //set fullcalendar options
            'firstDay' => 1,
        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {alert("Callbacks!");}',
        ]);

        $calendar->script();
        $calendar->calendar();

        return view('period.index')->with([
            'periods' => $periods,
            'reasons' => $reasons,
            'calendar' => $calendar,
        ]);
    }

    /**
     * Display a listing of all \App\Period.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function indexAll($year, $month)
    {
        #todo check for use ajax
        #todo check for current month

        $periods = Period::with('reason')->get();

        return view('period.indexall')->with([
            'periods' => $periods
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
            'start' => Carbon::createFromFormat('d.m.Y', $request->start)->timezone($this->timeZone),
            'end' => Carbon::createFromFormat('d.m.Y', $request->end)->timezone($this->timeZone),
            'comment' => $request->comment,
            'reason_id' => $request->reason_id,
        ];

        $period = auth()->user()->periods()->create($data);

        // Todo update phpdoc

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
    }
    #todo summery of all leave requests off the year
}
