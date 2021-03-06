<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHome(){
		$c = Auth::user()->courses;
		$data['data'] = $c;
		//return $c;
		//return Auth::user();
		return View::make('home', $data);
		//var_dump($file);

	}

	public function showLogin(){
		if (Auth::check())
		{
		    return Redirect::to('home');
		}
		return View::make('login');
	}
	public function doLogout(){
		Auth::logout();
		return Redirect::to('login');
	}
	public function doLogin(){
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);
		$validator = Validator::make(Input::all(), $rules);
	/*
		if ($validator->fails()) {
			return $validator->messages();
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		}
	*/
		$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);
	
		if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				$resp = array(
					'result'=> 'true',
					'url'   => URL::to('home'),
					'message' => 'Successful');
				return $resp;
				//return Redirect::to('home');

			} else {	 	
				$resp = array(
					'result'=> 'false',
					'url'   => URL::to('login'),
					'message'=> 'Username or password did not match');
				return $resp;
				// validation not successful, send back to form	
				return Redirect::to('login');

			}
	}
}
