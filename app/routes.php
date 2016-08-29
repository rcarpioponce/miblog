<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/status', array('uses' =>'StatusController@index'));
Route::post('/status', array('uses' =>'StatusController@add'));
Route::put('/status/{id}', array('uses' =>'StatusController@edit'));
