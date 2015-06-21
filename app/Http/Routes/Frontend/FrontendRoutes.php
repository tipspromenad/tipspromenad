<?php

/**
 * Frontend Controllers
 */
Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
Route::get('macros', 'FrontendController@macros');

Route::get('lazy', function ()
{
    return view('frontend/lazy');
});

Route::get('wictor', function ()
{
    return view('frontend/wictor');
});

Route::get('questions', function ()
{
    return view('frontend/questions');
});

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function ()
{
	Route::get('dashboard', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@index']);
	Route::resource('profile', 'ProfileController', ['only' => ['edit', 'update']]);
});
