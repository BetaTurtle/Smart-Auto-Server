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

Route::get('/', function()
{
	$location = new Location;
	$location->userid = '10';
	//$location->save();
	$model = Location::where('userid','=','10')->first();
	$driver = new Driver;
	$devid = "sample";
	$driver->deviceid = $devid;
	//$driver->save();

	echo $model;
	//echo sizeof($model);
	return View::make('hello');
});

Route::get('/map', function()
{
	return View::make('map');
});

Route::post('location', 'LocationController@saveLocation');

Route::get('location', 'LocationController@getLocation');