<?php



class Course extends Eloquent {


	public function users(){
		return $this->belongsToMany('User');
	}
   
	public function materials()
    {
        return $this->hasMany('Material');
    }
}
