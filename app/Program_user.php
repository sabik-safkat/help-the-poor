<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program_user extends Model
{
    protected $table ='program_user';
    protected $fillable =['program_id','user_id'];
}
