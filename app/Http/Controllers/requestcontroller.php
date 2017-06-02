<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Req;

class requestcontroller extends Controller
{
    public function store()
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'contact'       => 'required',
            'description'=> 'required',
            'amount'      => 'required',
            'category'   => 'required|numeric',
            
            // 'nerd_level' => 'required|numeric'
        );
        $validator = \Validator::make(\Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return \Redirect::to('events/create')
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            // store
            $request = new Req;
            $request->user_id       = \Input::get('user_id');
            $request->description      = \Input::get('description');
            $request->amount = \Input::get('amount');
            $request->category = \Input::get('category');
            $request->save();

            // redirect
            \Session::flash('message', 'Successfully created nerd!');
            return \Redirect::to('alert');
            }
    }

    public function display()
    {
        // get all the nerds
        $requests = Req::all();

        // load the view and pass the nerds
        return View('requests.display', compact('requests'));
    }
}
