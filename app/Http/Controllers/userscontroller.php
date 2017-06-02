<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userscontroller extends Controller
{
    public function person()
    {
        // get all the nerds
        // $donation = Donation::all();

        // load the view and pass the nerds
        return View('users.person');
    }
}
