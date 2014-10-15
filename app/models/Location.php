<?php



class Location extends Eloquent {

    protected $fillable = array('userid', 'lat', 'lng', 'alt');
    

    public function driver(){
    	return $this->belongsTo('Driver', 'userid');
    }

}
