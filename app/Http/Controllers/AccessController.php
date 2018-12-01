<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    protected $redirect = 'access.index';

    /**
     * Display a listing of \App\Access.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('access.index')->with([
           'accesses' => Access::get()
        ]);
    }

    /**
     * Show the form for creating a new \App\Access.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('access.create');
    }

    /**
     * Store a newly created \App\Access in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Access::create($request->all());

        return redirect(route($this->redirect));
    }

    /**
     * Show the form for editing \App\Access.
     *
     * @param  \App\Access  $access
     * by model-key-binding
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Access $access)
    {
        return view('access.show_and_edit');
    }

    /**
     * Update the specified \App\Access in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Access  $access
     * by model-key-binding
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Access $access)
    {
        $access->update($request->all());

        return redirect(route($this->redirect));
    }

    /**
     * Remove the specified \App\Access from Database.
     *
     * @param  \App\Access  $access
     * by model-key-binding
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Access $access)
    {
        #Todo check if this Access is in use
        $access->deleteOrFail();

        return redirect(route($this->redirect));
    }
}