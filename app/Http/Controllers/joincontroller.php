<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Http\Requests;
use App\User;
class joincontroller extends Controller
{
    public function assign($event_id)
    {
    	// $event_id;
    	$event = Program::findOrFail($event_id);
    	$use_id = auth()->user()->id;
    	$event->users()->attach($use_id);

    	

    	return View('success');

    	
    }

    public function myjoin()
    {
        // return program::all();
        $user_id = auth()->user()->id;
        return Program::with('users')->pivot('user_id', 4)->get();
    	// $event = Program::findOrFail($event_id);
    	// return $event = Program::with('users')->get();
    	// return $programs = $event->users->where('user_id', '=', $use_id)->get();
         // return User::where('');
    	return $users = Program::with('users')->withPivot('user_id', $user_id)->get();
    	// $pros= $use_id->events->list('name');

    	return View('events.showprogram')->with('user', $users);
    }
}
