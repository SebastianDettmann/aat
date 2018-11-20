<?php

namespace App\Http\Controllers;

use App\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PeriodController extends Controller
{
    protected $redirect = 'period.index'; #todo check for usability

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     * Display a listing of the resource for all users.
     *
     * @return \Illuminate\Http\Response
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $period = Period::make($request->all(''));
        auth()->user()->periods()->save($period);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period)
    {
        #todo userpolicy
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        #todo userpolicy
        $period->update($request->all());
        auth()->user()->periods()->save($period);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        #todo userpolicy
        $period->delete();
    }

    public function confirm(Request $request, Period $period)
    {
        #todo on update email notification
        //
    }
}
