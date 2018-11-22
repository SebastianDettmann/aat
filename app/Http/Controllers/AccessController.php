<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    protected $redirect = 'access.index';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('access.index')->with([
           'accesses' => Access::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('access.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Access::create($request->all());

        return redirect(route($this->redirect));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function edit(Access $access)
    {
        return view('access.show_and_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Access $access)
    {
        $access->update($request->all());

        return redirect(route($this->redirect));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function destroy(Access $access)
    {
        #Todo check if this Access is in use
        $access->delete();

        return redirect(route($this->redirect));
    }
}
