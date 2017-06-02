<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container">

<!-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('nerds') }}">View donations</a></li>
        <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
    </ul>
</nav> -->
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

<h1>All the events</h1>

<!-- will be used to show any messages -->
<!-- @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif -->

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Description</td>
            <td>Collection Date</td>
            <td>Location</td>
            <td>Contact</td>
        </tr>
    </thead>
    <tbody>
    @foreach($program as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->collection_date }}</td>
            <td>{{ $value->location }}</td>
            <td>{{ $value->contact }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Delete this entry</a>
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <!-- <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a> -->
                <a href="{{url::to('donations/assign',['donation_id' => $value->id])}}" class="btn btn-primary">Assign</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>

       <footer class="footer">
  <div class="container text-center">
    <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
    <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
    <a href="www.linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="www.google.com"><i class="fa fa-google-plus"></i></a>
    <a href="www.skype.com"><i class="fa fa-skype"></i></a>
  </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; safkat@sust_cse</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 1000 //changes the speed
    })
    </script>
</body>
</html>