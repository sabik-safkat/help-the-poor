<!DOCTYPE html>
<html>
<head>
    <title>New donation</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>new donations</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">


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


<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
<div class="well">
    <hr>
    <hr>
    <hr>
<h1>Submit a donation</h1>

<!-- if there are creation errors, they will show here -->
{!! Html::ul($errors->all()) !!}

{!! Form::open(array('url' => '/donations/create/store', 'class' => 'form-horizontal')) !!}
<!-- {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!} -->

<fieldset>
 
        <legend>Fill out</legend>

        
    <?php $use_id = Auth::user()->id;?>
    <div class="form-group">
        {!! Form::hidden('user_id', $use_id) !!}
    </div>

    <div class="form-group">
        {!! Form::label('contact', 'Contact', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('contact', \Input::old('contact'), array('class' => 'form-control')) !!}
        <span class="help-block">Provide your contact info.</span>
        </div>
    </div>
    <hr>

    <div class="form-group">
        {!! Form::label('description', 'Description', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('description', \Input::old('description'), array('class' => 'form-control')) !!}
        <span class="help-block">Please describe your request here.</span>
        </div>
    </div>
    <hr>

    <div class="form-group">
        {!! Form::label('location', 'Location', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('location', \Input::old('location'), array('class' => 'form-control')) !!}
        <span class="help-block">please provide the location of collection.</span>
        </div>
    </div>
    <hr>

    <div class="form-group">
        {!! Form::label('collection_date', 'Date', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::text('collection_date', \Input::old('date'), array('class' => 'form-control')) !!}
        <span class="help-block">Date to collect the package.</span>
        </div>
    </div>
    <hr>

    <div class="form-group">
        {!! Form::label('category', 'Category', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
        {!! Form::select('category', array('0' => 'money', '1' => 'blood', '2' => 'clothes'), Input::old('category'), array('class' => 'form-control')) !!}
        <span class="help-block">Your donation type.</span>
        </div>
    </div>
    <hr>

    <hr>
    {!! Form::submit('Submit!', array('class' => 'btn btn-info')) !!}
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