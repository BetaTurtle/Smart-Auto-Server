<?php



class Material extends Eloquent {

    public function user(){
    	return $this->belongsTo('User');
    }

}
