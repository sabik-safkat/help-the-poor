<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Donation;

class donationscontroller extends Controller
{


     public function display()
    {
        // get all the nerds
        $donation = Donation::all();

        // load the view and pass the nerds
        return View('donations.showdonations', compact('donation'));
    }

    public function store()
    {
    	 // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            // 'name'       => 'required',
            'description'      => 'required',
            'contact'      => 'required|numeric',
            'location'  => 'required',
            'collection_date'  => 'required',
            'category' => 'required|numeric'
        );
        $validator = \Validator::make(\Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return \Redirect::to('donations/create')
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            $donation = new Donation;
            $donation->user_id       = \Input::get('user_id');
            $donation->description      = \Input::get('description');
            $donation->location = \Input::get('location');
            $donation->collection_date = \Input::get('collection_date');
            $donation->contact = \Input::get('contact');
            $donation->category =\Input::get('category');
            $donation->save();

            // redirect
            \Session::flash('message', 'Successfully created nerd!');
            return \Redirect::to('/alert');
            }
    }
}
