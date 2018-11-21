<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeriodFormRequest;
use App\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PeriodController extends Controller
{
    protected $redirect = 'period.index'; #todo check for usability

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        $this->authorize('access', $period);

        return view('period.show')->with([
           'period' => $period
        ]);
    }

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
        return view('period.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeriodFormRequest $request)
    {
        $period = Period::make($request->all(''));
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
        #email notification

        $this->authorize('access', $period);

        $period->delete();
    }

    public function editConfirm(Period $period)
    {
        return view('period.confirm')->with([
            'period' => $period
        ]);
    }



    #todo summery of all leave requests off the year
}
