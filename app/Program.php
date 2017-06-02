<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	


     public function users(){
        return $this->belongsToMany('App\User','program_user','program_id','user_id');
        					// ->withPivot('program_id', 'user_id');
    }

    public function getProgramList()
    {
    	return $this->programs->lists('name');
    }
}
