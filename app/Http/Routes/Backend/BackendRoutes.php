<?php

/**
 * Backend routes
 * All ar protected with Role::admin
 */

Route::get('startsida', ['as' => 'backend.dashboard', 'uses' => 'DashboardController@index']);

Route::resource('tipspromenad', 'TipsController');
