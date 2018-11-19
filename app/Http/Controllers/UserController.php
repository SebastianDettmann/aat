<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserFormRequest;
use App\Http\Requests\UpdateUserFormRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $redirectAdmin = 'user.index';
    protected $redirectUser = 'dashboard'; #TODO  has to change to dashboard or something else

    /**
     * UserController constructor.
     * handles admin middleware
     */
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['index', 'store', 'create', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get()->toArray();

        return view('user.index')->with([
            'users' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserFormRequest $request)
    {
        User::create($request->all());

        return redirect(route($this->redirectAdmin));
    }

    /**
     * Show the form for editing the specified resource.
     * used to, for displaying the user
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('user.show_and_edit')->with([
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserFormRequest $request, User $user)
    {
        $this->authorize('edit', $user);
        $user->update($request->all());

        return redirect(route(auth()->user()->admin ? $this->redirectAdmin : $this->redirectUser));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route($this->redirectAdmin));
    }
}
