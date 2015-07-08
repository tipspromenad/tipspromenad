<?php

/**
 * Backend routes
 * All ar protected with Role::admin
 */

Route::get('startsida', ['as' => 'backend.dashboard', 'uses' => 'DashboardController@index']);

Route::resource('tipspromenad', 'TipsController');
Route::post('tipspromenad/{id}/uppdatera', 'TipsController@uppdatera');
// Route::post('tipspromenad/{id}/uppdatera', 'TipsController@uppdatera');
// Route::post('tipspromenad/{id}/uppdatera', 'TipsController@uppdatera');
// Route::post('tipspromenad/{id}/uppdatera', 'TipsController@uppdatera');
// Route::post('tipspromenad/{id}/uppdatera', 'TipsController@uppdatera');


post('test/{id}', function($id) {
    $msg = "";
    $keys = ['name', 'description'];
    foreach($keys as $key) {
        if ( Request::has($key) ) {
            $tip = App\Tip::where('id', '=', $id)->update([$key => Request::input($key)]);
            $msg = "yes, name was changed";
        }
    }
    Debugbar::info(Request::all());
    return Response::json(['data' => array('message' => 'thanks for registering!', 'redirecturl' => '/')]);

});

// Route::post('tipspromenad/{id}/uppdatera', 'TipsController@uppdatera');
