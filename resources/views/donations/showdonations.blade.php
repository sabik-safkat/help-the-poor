<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
                        <a href="/about">Our committee</a>
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
    <hr>
    <hr>
    <hr>


<h1>List of available donations</h1>

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
    @foreach($donation as $key => $value)
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
                @if(empty($value->event_name))
                    <a href="{{url('donations/assign',['donation_id' => $value->id, 'event_name'=> $value->event_name])}}" class="btn btn-primary">Assign</a>
                <!-- <a href="{{ url('/donations/assign', ['donation_id'=>$donation, 'event_id' => $value->id]) }}" class="btn btn-primary">Attach</a> -->
                    @else
                    <a href="{{url('donations/assign',['donation_id' => $value->id, 'event_name'=> $value->event_name])}}" class="btn btn-info">Change assignment</a>

                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>