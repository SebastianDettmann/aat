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

    Route::resource('period', PeriodController::class)->except(['index', 'edit', 'update']);
    Route::get('app/period/index/{year}/{month}', 'PeriodController@index')->name('period.index');
    Route::get('app/period/indexall/{year}/{month}', 'PeriodController@indexAll')->name('period.indexall');
});

//Routes / Controllers for admins

Route::group([
    'prefix' => 'app',
    'middleware' => ['auth', 'admin']
], function () {
    Route::resource('reason', ReasonController::class)->except(['show']);

    Route::get('app/confirm/', 'ConfirmController@index')->name('confirm.index');
    Route::post('app/confirm/', 'ConfirmController@confirm')->name('confirm.confirm');
});

