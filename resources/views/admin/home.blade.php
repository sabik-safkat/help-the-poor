<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>Laravel</title> -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>
        

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Operations
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/events">All events</a></li>
                            <li><a href="/Admin/donations">All donation</a></li>
                            <li><a href="/Admin/requests">All requests</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="row">

    <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">WELCOME!
                    <small>admin panel</small>
                </h3>
                <ol class="breadcrumb">
                    <li><a href="\home">Home</a>
                    </li>
                    <li class="active">Admin</li>
                </ol>
            </div>
        </div>

            <div class="col-md-1 text-center">
                <p><i class="fa fa-film fa-4x"></i>
                </p>
                <h2>Admin</h2>
            </div>
            <div class="col-md-6">
                <a href="blog-post.html">
                    <img src="{{URL::asset('/sliders/9.jpg')}}" alt="the-buzz-img3"  style="width:380px;height:260px">
                </a>
            </div>
            <div class="col-md-4">
                </p>
                <h4>Responsibility of admin is to assign all donations to particular events, take care
                    of the help requests, remove useless contents and go through the comments on a regular
                    basis.</h4>
                <hr>
                <!-- <a class="btn btn-primary" href="/events">All events</a>
                <hr>
                <a class="btn btn-primary" href="/Admin/donations">All donation</a>
                <hr>
                <a class="btn btn-primary" href="/request">All requests</a>
                <hr>
                <a class="btn btn-primary" href="/myjoin">Submitted user comments</a> -->
                <hr>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    </body>
</html>
