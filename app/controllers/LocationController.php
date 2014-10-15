<?php


class LocationController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function saveLocation()
    {
        $devid = Input::get("deviceid");
		echo ($devid);

		$driver = Driver::where('deviceid','=',$devid)->first();
		if(sizeof($driver)==0){
			$driver = new Driver;
			$driver->deviceid = $devid;
		}
		$driver->lat = Input::get("lat");
		$driver->lng = Input::get("lng");
		$driver->alt = Input::get("alt");
		$driver->save();
	    return "true";
    }

    public function getLocation(){
    	$locations = Driver::all();
    	return $locations;
    }
}