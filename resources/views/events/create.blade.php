<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New event regestration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/service">Services</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>

                    <li>
                        <a href="/events">Events</a>
                    </li>

                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/home">sign in</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<div class="container">
    <div class="row">
        <div class="col-lg-10">
<div class="well">
    <hr>
    
<h1>Create an event!</h1>

<!-- if there are creation errors, they will show here -->
{!! Html::ul($errors->all()) !!}

{!! Form::open(array('url' => 'events/create/store', 'method' => 'post', 'novalidate' => 'novalidate', 'files' => true)) !!}
<fieldset>
 
        <legend>Fill out</legend>

    <?php $use_id = Auth::user()->id;?>
    <div class="form-group">
        {!! Form::hidden('user_id', $use_id) !!}
    </div>

     
    <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('name', \Input::old('name'), array('class' => 'form-control')) !!}
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <div class="form-group">
        {!! Form::label('email', 'E.Mail', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::email('email', \Input::old('description'), array('class' => 'form-control')) !!}
        <span class="help-block">Please provide your mail address here.</span>
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <div class="form-group">
        {!! Form::label('description', 'Description', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('description', \Input::old('description'), array('class' => 'form-control')) !!}
        <span class="help-block">Please describe your event here.</span>
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <!-- <div class="form-group">
        {!! Form::label('nerd_level', 'Nerd Level') !!}
        {!! Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) !!}
    </div> -->

    <div class="form-group">
        {!! Form::label('date', 'Date', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('date', \Input::old('date'), array('class' => 'form-control')) !!}
        <span class="help-block">Date of the program.</span>
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <div class="form-group">
        {!! Form::label('location', 'Location', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('location', \Input::old('location'), array('class' => 'form-control')) !!}
        <span class="help-block">Please provide the location of the event being held.</span>
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <div class="form-group">
        {!! Form::label('contact', 'Contact', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('contact', \Input::old('contact'), array('class' => 'form-control')) !!}
        <span class="help-block">Please provide your contact info.</span>
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <div class="form-group">
        {!! Form::label('numbers', 'Number of volunteers', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('numbers', \Input::old('numbers'), array('class' => 'form-control')) !!}
        <span class="help-block">How many volunteers you need.</span>
        </div>
    </div>
    <hr>
    <hr>
    <hr>

    <div class="form-group">
   <!--  {!! Form::label('image', 'Product Image') !!}
    {!! Form::file('image', \Input::old('image'), array('class' => 'form-control')) !!} -->
     {!! Form::label('file', 'Image:', ['class' => 'col-lg-2 control-label']) !!}
     <div class="col-lg-10">
    {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>
</div>
    <hr>
    <hr>
    <hr>

    {!! Form::submit('Submit!', array('class' => 'btn btn-info')) !!}
    <hr>
    <hr>
    <hr>

{!! Form::close() !!}
</div>
    </div>
</div>
</body>

</div>


</body>
</html>