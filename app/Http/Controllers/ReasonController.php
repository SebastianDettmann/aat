<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReasonFormRequest;
use App\Http\Requests\UpdateReasonFormRequest;
use App\Reason;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    protected $redirect = 'reason.index';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = Reason::get()->toArray();

        return view('reason.index')->with([
            'reasons' => $reasons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reason.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReasonFormRequest $request)
    {
        Reason::create($request->all());

        return redirect(route($this->redirect));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function edit(Reason $reason)
    {
        return view('reason.show_and_edit')->with([
            'reason' => $reason
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReasonFormRequest $request, Reason $reason)
    {
        $reason->update($request->all());

        return redirect(route($this->redirect));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reason $reason)
    {
        $reason->delete();

        return redirect(route($this->redirect));
    }
}
