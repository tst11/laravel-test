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

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', [
        'uses' => 'NiceActionController@getHome',
        'as' => 'home'
    ]);

    Route::group(['prefix' => 'do'], function() {
        
        Route::get('/{action}/{name?}', [
            'uses' => 'NiceActionController@getNiceAction',
            'as' => 'niceaction'
        ]);
    
        Route::post('/add-action', [
            'uses' => 'NiceActionController@postInsertNiceAction',
            'as' => 'add_action'
        ]);
    
    });

});





