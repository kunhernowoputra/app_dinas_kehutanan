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

Route::get('/', function () {
    if(Auth::check())
        return redirect('admin');
    return view('welcome');
});

Route::auth();

Route::group(['middleware'=>['role','auth'],'prefix'=>'admin'], function() {
    Route::get('/','AdminController@dashboard');
    Route::get('/{category}','AdminController@index');
    Route::post('/{category}','AdminController@store');
    Route::get('/{category}/{id}','AdminController@show');
    Route::get('/{category}/edit/{id}','AdminController@edit');
    Route::patch('/{category}/{id}','AdminController@update');
    Route::delete('/{category}/{id}','AdminController@delete');

});

Route::group(['prefix'=>'user'], function() {
    Route::get('/','UserController@dashboard');
    Route::get('/{category}','UserController@index');
    Route::post('/{category}','UserController@store');
    Route::get('/{category}/{id}','UserController@show');
    Route::get('/{category}/edit/{id}','UserController@edit');
    Route::patch('/{category}/{id}','UserController@update');
    Route::delete('/{category}/{id}','UserController@delete');
});

