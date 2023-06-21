<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    protected $table = 'user_category';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
	public function category()
	    {
	    	return $this->belongsTo('App\Models\Category');
	    }
}
