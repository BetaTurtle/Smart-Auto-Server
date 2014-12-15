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
	$a = array(
		'result'=> 'true',
		'ur'    => URL::to('home'));
	return $a;
	return View::make('index');


	$location = new Location;
	$location->userid = '10';
	//$location->save();
	$model = Location::all();
	$driver = new Driver;
	$devid = "sample";
	$driver->deviceid = $devid;
	//$driver->save();

	$driver = Driver::all();
	//echo $driver[0];
	//echo $driver[0]->locations;
	//echo $model[0]->driver;
	//echo sizeof($model);
	return View::make('hello');
});


Route::get('array', function(){
	return '[{"what":"Hello","who":"World"},{"what":"Goodbye","who":"DOM APIs"},{"what":"Hello","who":"Declarative"},{"what":"Goodbye","who":"Imperative"}]';
	$s = '[';
	for($i=0; $i<10; $i++){
		$s=$s.$i.',';
	}
	$s=$s.$i.']';
	return $s;
});
// Route::get('/map', function()
// {
// 	return View::make('map');
// });

// Route::post('location', 'LocationController@saveLocation');

// Route::get('location', 'LocationController@getLocations');

// Route::get('driver', 'LocationController@getDrivers');




Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');
Route::get('home', array(
			'before' => 'auth',
			'uses'   => 'HomeController@showHome')
		);

Route::resource('article', 'Article');

Route::post('post', array(
		'before' => 'csrf',
		function(){
			$input = Input::all();
			$rules = array(
				'first_name' => 'alpha');
			$validator = Validator::make($input, $rules);
			return $validator->messages();
			//return $input;
		}));

Route::get('polymer', function(){
	return View::make('polymer');
});
