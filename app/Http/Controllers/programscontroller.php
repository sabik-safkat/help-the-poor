<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\Program;

class programscontroller extends Controller
{

    public function mydisplay()
    {
        // get all the nerds
        // $program = Donation::all();
        $use_id = auth()->user()->id;
        $program = Program::where('user_id' , $use_id)->get();

        // load the view and pass the nerds
        return View('events.myprograms', compact('program'));
    }


    public function assDonation($event_id, $donation_id)
    {

        $name = \DB::table('programs')->where('id', $event_id)->value('name');

        \DB::table('donations')->where('id', $donation_id)->insert(['eventname' => $name]);

    }

     public function index()
    {
        // get all the nerds
        $program = Program::all();

        // load the view and pass the nerds
        return View('events.index', compact('program'));
    }

     public function display()
    {
        // get all the nerds
        $programs = Program::all();
        // return auth()->user();

        // load the view and pass the nerds
        return View('events.showprogram')
                    ->with('program', $programs);
    }

     public function joindisplay()
    {
        // get all the nerds
        $programs = Program::all();
        // return auth()->user();

        // load the view and pass the nerds
        return View('events.showjoinprogram')
                    ->with('program', $programs);
    }

     public function admindisplay($donation_id, $event_id)
    {
        // get all the nerds
        $programs = Program::all();
        // return auth()->user();

        // load the view and pass the nerds
        $donation= $donation_id;
        $name = $event_id;
        // return View('events.adminshow')->with('programs', $programs)->with($donation_id);
        return View('events.adminshow', compact('programs', 'donation', 'name'));
    }

     public function admindisplay2($donation_id)
    {
        // get all the nerds
        $programs = Program::all();
        // return auth()->user();

        // load the view and pass the nerds
        $donation= $donation_id;
    
        // return View('events.adminshow')->with('programs', $programs)->with($donation_id);
        return View('events.adminshow', compact('programs', 'donation'));
    }

     public function create()
    {
       return view('events.create');
    }

     public function store(programscontroller $request)
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'description'=> 'required',
            'email'      => 'required|email',
            'location'   => 'required',
            'date'       => 'required',
            'contact'    => 'required',
            'numbers'    => 'required|numeric',
            // 'nerd_level' => 'required|numeric'
        );
        $validator = \Validator::make(\Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return \Redirect::to('events/create')
                ->withErrors($validator)
                ->withInput(\Input::except('password'));
        } else {
            $program = new Program;
            $program->user_id       = \Input::get('user_id');
            $program->name       = \Input::get('name');
            $program->description      = \Input::get('description');
            $program->location = \Input::get('location');
            $program->date = \Input::get('date');
            $program->contact = \Input::get('contact');
            $program->numbers = \Input::get('numbers');
            $file= \Input::file('file');

            $extension= $file->getClientOriginalExtension();
             $destinationPath = 'profile_pic';

             $filename = $file->getClientOriginalName();
            $filename = rand(11111,99999).'.'.$extension;
            
            $upload_success = $file->move($destinationPath, $filename);


    //         $imageName = $program->user_id . '.' . 
    //         $request->file('image')->getClientOriginalExtension();

    //         $request->file('image')->move(
    //     base_path() . '/public/images/catalog/', $imageName


    // );
            $program->save();

            // redirect
            \Session::flash('message', 'Successfully created nerd!');
            return \Redirect::to('alert');

        //      $extension = \Input::file('file')->getClientOriginalExtension();
        // $filename = rand(11111111, 99999999). '.' .
        // \Input::file('file')->move(
        //   base_path().'/public/files/uploads/', $filename
        // );
        // if(\Auth::user()->level == 2) {
        //     $approved = $request['approved'];
        // } else {
        //     $approved = 3;
        // }
        // $fullPath = '/public/files/uploads/' . $filename;
        // $program = new Program(array(
        //     'user_id' => $request['user_id'],
        //     'name' => $request['name'],
        //     'description' => $request['description'],
        //     'location' => $request['location'],
        //     'date'=> $request['date'],
        //     'contact'=> $request['contact'],
        //     'numbers'=> $request['numbers'],
        // ));
        // $upload->save();
        //     return \Redirect::route('/eventform', 
        //     array($program->user_id))->with('message', 'Program added!'); 
        //     }
    }
}

    //  public function show()
    // {
    //     // get all the nerds
    //     $nerds = Nerd::all();

    //     // load the view and pass the nerds
    //     return View::make('nerds.index')
    //         ->with('nerds', $nerds);
    // }

     public function edit()
    {
        // get all the nerds
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('nerds.index')
            ->with('nerds', $nerds);
    }

     public function update()
    {
        // get all the nerds
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('nerds.index')
            ->with('nerds', $nerds);
    }

     public function destroy()
    {
        // get all the nerds
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('nerds.index')
            ->with('nerds', $nerds);
    }
}
