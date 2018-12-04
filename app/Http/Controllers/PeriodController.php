<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeriodFormRequest;
use App\Period;

class PeriodController extends Controller
{
    protected $redirect = 'period.index'; #todo check for usability

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

        $periods = auth()->user()->periods()->with('reasons');

        return view('period.index')->with([
            'periods' => $periods
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
        $period = Period::make($request->all(''));
        auth()->user()->periods()->save($period);
        // Todo redirect, update phpdoc
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
