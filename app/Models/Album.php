<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table = 'albums';

    public function photo()
    {
    	return $this->hasMany('App\Models\Photo');
    }
}
