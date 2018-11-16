<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserFormRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        //
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
    public function store(CreateUserFormRequest $request)
    {
        User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        #dd($user);
       # dd($request->all());
        #$data = [
         #   "firstname" => "Mr. Kane Kihn",
        #    "lastname" => "Jaunita Ullrich",
         #   "email" => "valentine52@example.net",
         #   "admin" => false
       # ];
        #dd($data);
        #TODO filter für 'admin', autorization for logged in user can only update logged in user
       $x =  $user->update($request->all());
       #$x =  $user->update($data);
       # dd($x);
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
    }
}
