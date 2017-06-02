<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/Admin/home', function () {
    return view('admin.home');
});
Route::get('/Admin/donations', 'donationscontroller@display');

Route::get('/Admin/requests', 'requestcontroller@display');

Route::get('/myprograms', 'programscontroller@mydisplay');



Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/donations/create', function () {
    return view('donations.create');
});

Route::post('/donations/create/store', 'donationscontroller@store');

Route::get('/', function () {
    return view('homepage');
});


Route::get('/request', function () {
    return view('donations.createreq');
});


Route::post('/request/store', 'requestcontroller@store');

Route::get('/donations', 'donationscontroller@display');

Route::get('/donations/assign/{donation_id}/{event_name}', 'programscontroller@admindisplay');

Route::get('/donations/assign/{donation_id}', 'programscontroller@admindisplay2');

Route::get('/donations/assign/{donation_id}/{event_id}/{name}', 'programscontroller@assDonation');

Route::get('/donations/assign/{donation_id}/{event_id}', 'programscontroller@assDonation');



// routes from navbar



Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('events', 'programscontroller@display');
Route::get('joinevents', 'programscontroller@joindisplay');








Route::get('/index', function () {
    return view('events.index');
});

Route::get('/display', function () {
    return view('display');
});



Route::get('/profile', function () {
    return view('profile');
});

Route::get('/alert', function () {
    return view('success');
});







// Route::get('/opening', function () {
//     return view('opening');
// });





Route::get('orgs', function () {
    return view('orgs');
    
});

Route::get('events/create', function () {
    return view('events.create');
    
});


    

    


Route::auth();

Route::get('/home', 'HomeController@index');







Route::get('users/profile', 'userscontroller@person');


Route::get('join/{event_id}', 'joincontroller@assign');

Route::get('myjoin', 'joincontroller@myjoin');






Route::group(['middleware' => ['web']], function () {
    Route::get('web-login', 'Auth\AuthController@webLogin');
    Route::post('web-login', ['as'=>'web-login','uses'=>'Auth\AuthController@webLoginPost']);
    Route::get('admin-login', 'AdminAuth\AuthController@adminLogin');
    Route::post('admin-login', ['as'=>'admin-login','uses'=>'AdminAuth\AuthController@adminLoginPost']);

    Route::post('events/create/store', 'programscontroller@store');
    Route::get('eventform', function () {
    return view('events.create');
    
});
});


Route::auth();

Route::get('/home', 'HomeController@index');
