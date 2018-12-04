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
    //general routes
    # Todo change to propper route
    Route::get('dashboard', function () {
        return view('home');
    })->name('dashboard');

    Route::resource('user', UserController::class)->except(['show']);
    Route::resource('access', AccessController::class)->except(['show'])->middleware('admin');

    // absence tool routes
    Route::group(['middleware' => ['absence']
    ], function () {
        Route::resource('period', PeriodController::class)->except(['index', 'edit', 'update', 'create']);
        Route::get('period/index/{year}/{month}', 'PeriodController@index')->name('period.index');
        Route::get('period/indexall/{year}/{month}', 'PeriodController@indexAll')->name('period.indexall');

        //Routes / Controllers for admins
        Route::group([
            'middleware' => ['auth', 'admin']
        ], function () {
            Route::resource('reason', ReasonController::class)->except(['show']);
            Route::get('confirm/', 'ConfirmController@index')->name('confirm.index');
            Route::post('confirm/', 'ConfirmController@confirm')->name('confirm.confirm');


            Route::get('report', function () {
                return 'dummy reporting daten';
            })->name('report');
        });
    });
});







