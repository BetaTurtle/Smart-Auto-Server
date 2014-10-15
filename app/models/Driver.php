<?php



class Driver extends Eloquent {

    protected $fillable = array('deviceid', 'lat', 'lng', 'alt');

    public function locations()
    {
        return $this->hasMany('Location', 'userid');
    }
}
