<?php

/**
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend'], function ()
{
	require_once(__DIR__ . "/Routes/Frontend/FrontendRoutes.php");
	require_once(__DIR__ . "/Routes/Frontend/Access.php");
});

Route::group(['namespace' => 'Api'], function ()
{
	require_once(__DIR__ . "/Routes/Api/ApiRoutes.php");
});

Route::group(['namespace' => 'Frontend'], function ()
{
	require_once(__DIR__ . "/Routes/Frontend/SkapaTipspromenadRoutes.php");
});


/**
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend'], function ()
{
	Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ()
	{
		/**
		 * These routes need the Administrator Role
		 *
		 * If you wanted to do this in the controller it would be:
		 * $this->middleware('access.routeNeedsRole:{role:Administrator,redirect:/,with:flash_danger|You do not have access to do that.}');
		 *
		 * You could also do the above in the Route::group below and remove the other parameters, but I think this is easier to read here.
		 * Note: If you have both, the controller will take precedence.
		 */
		Route::group([
			'middleware' => 'access.routeNeedsRole',
			'role'       => ['Admin'],
			'redirect'   => '/',
			'with'       => ['flash_danger', 'You do not have access to do that.']
		], function ()
		{
			require_once(__DIR__ . "/Routes/Backend/BackendRoutes.php");
			require_once(__DIR__ . "/Routes/Backend/Access.php");
		});
	});
});
