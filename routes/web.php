<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes(['register' => false]);

Route::group([
    'prefix' => 'app',
    'middleware' => ['auth']
], function () {
    # Todo change to propper route
    Route::get('app/dashboard', function (){
        return view('home');
    })->name('dashboard');
    Route::resource('user', UserController::class)->except(['show']);
    Route::resource('reason', ReasonController::class)->except(['show'])->middleware('admin');

});
