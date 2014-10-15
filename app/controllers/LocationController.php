<?php


class LocationController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function saveLocation()
    {
        $devid = Input::get("deviceid");
		//echo ($devid);

		$driver = Driver::where('deviceid','=',$devid)->first();
		if(sizeof($driver)==0){
			$driver = new Driver;
			$driver->deviceid = $devid;
		}
		$driver->lat = Input::get("lat");
		$driver->lng = Input::get("lng");
		$driver->alt = Input::get("alt");
		$driver->save();

		$driver = Driver::where('deviceid','=',$devid)->first();
		//return $driver;
		$location = new Location;
		$location->userid = $driver->id;
		$location->lat = Input::get("lat");
		$location->lng = Input::get("lng");
		$location->alt = Input::get("alt");
		$location->save();
	    return "true";
    }

    public function getLocations(){
    	$locations = Location::all();
    	return $locations;
    }

    public function getDrivers(){
    	$driver = Driver::all();
    	return $driver;
    }
}