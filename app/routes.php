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


if (App::environment('local'))
{
	
	$mode = (App::isDownForMaintenance()) ? 'Maintenance' : 'Live';
	$env 	= App::environment();
	
	//echo "<div>Environment: <b>{$env}</b>   Mode: <b>{$mode}</b></div>";
	
	
}

Route::get('/', function()
{
	return View::make('hello');
});


