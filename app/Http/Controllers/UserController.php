<?php

namespace App\Http\Controllers;

use App\Access;
use App\Http\Requests\StoreUserFormRequest;
use App\Http\Requests\UpdateUserFormRequest;
use App\User;

class UserController extends Controller
{
    /**@var string */
    protected $redirectAdmin = 'user.index';
    /**@var string */
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
     * Display a listing of \App\User.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::with('accesses')->get();

        return view('user.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new \App\User.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $accesses = Access::all();

        return view('user.create')->with([
            'accesses' => $accesses
        ]);
    }

    /**
     * Store a newly created \App\User in Database.
     *
     * @param  \App\Http\Requests\StoreUserFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserFormRequest $request)
    {
        User::create($request->all());

        return redirect(route($this->redirectAdmin));
    }

    /**
     * Show the form for editing the specified \App\User.
     * used to, for displaying the user
     *
     * @param  \App\User  $user
     * by model-key-binding
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * rendered as 404
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('user.show_and_edit')->with([
            'user' => $user
        ]);
    }

    /**
     * Update the specified \App\User in Database.
     *
     * @param  \App\Http\Requests\UpdateUserFormRequest $request
     * @param  \App\User  $user
     * by model-key-binding
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * rendered as 404
     * @return \Illuminate\Http\RedirectResponse
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
     * @throws \Exception
     * my throws an Exception if the User not Exists,
     * not validated, because is only available for Admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route($this->redirectAdmin));
    }
}
