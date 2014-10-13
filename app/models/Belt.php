<?php

class Belt extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'belts';

  public function user() 
    {
        return $this->hasMany('User');
    }



}