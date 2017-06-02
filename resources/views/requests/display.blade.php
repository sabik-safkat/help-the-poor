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


<h1>List of submitted requests</h1>

<!-- will be used to show any messages -->
<!-- @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif -->

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Description</td>
            <td>Amount</td>
            <td>Contact</td>
            <td>Category</td>
        </tr>
    </thead>
    <tbody>
    @foreach($requests as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->amount }}</td>
            <td>{{ $value->contact }}</td>
            <td>{{ $value->category }}</td>

            <!-- we will also add show, edit, and delete buttons -->
           <!--  <td>
                
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>