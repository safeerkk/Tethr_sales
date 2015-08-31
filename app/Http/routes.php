<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','DashboardController@index');
Route::get('/user','DashboardController@showUserBasedList');
Route::get('/user/{id}','DashboardController@showByUser')->where('id','\d+');
Route::get('/prospects/{id}','DashboardController@showProspect')->where('id','\d+');
Route::post('/prospects/{id}','DashboardController@updateProspect')->where('id','\d+');
Route::get('/prospects/insert','DashboardController@getInsertProspect');
Route::post('/prospects/insert','DashboardController@postInsertProspect');


