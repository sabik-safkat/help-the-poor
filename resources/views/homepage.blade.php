<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <!-- <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div> -->

         <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{URL::asset('/sliders/19.jpg')}}" alt="the-buzz-img3"  style="width:1340px;height:420px">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('/sliders/21.jpg')}}" alt="the-buzz-img3"  style="width:1340px;height:420px">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('/sliders/22.jpg')}}" alt="the-buzz-img3"  style="width:1340px;height:420px">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="item">
                <img src="{{URL::asset('/sliders/20.jpg')}}" alt="the-buzz-img3"  style="width:1340px;height:420px">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcom to "HELP THE POOR"
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Observe</h4>
                    </div>
                    <div class="panel-body">
                        <p>We keep an eager eye around us. For the people who suffer, when it is in our capabiliies 
                            to help. We find them. We reach them. We tell them we are there.</p>
                        <!-- <a href="#" class="btn btn-default">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Respond</h4>
                    </div>
                    <div class="panel-body">
                        <p> We use all our resources to give a hand to men who are down. And we are not alone. We 
                            have organizations, we have volunteers, we have people working day and night.</p>
                        <!-- <a href="#" class="btn btn-default">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Refund</h4>
                    </div>
                    <div class="panel-body">
                        <p>We keep ourselves ready. So we keep collecting worm clothes all over the year.
                            Packages are made and delivered in the winter. Donation is open for all users. 

                        </p>
                        <!-- <a href="#" class="btn btn-default">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row" style="background-color: rgba(0,0,0,.25);">
            <div class="col-lg-12">
                <h2 class="page-header">Our campaigns</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img src="{{URL::asset('/sliders/18.jpg')}}" alt="the-buzz-img3"  style="width:340px;height:220px">
                </a>
            </div>
            <hr>
            <hr>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img src="{{URL::asset('/sliders/17.jpg')}}" alt="the-buzz-img3"  style="width:340px;height:220px">
                </a>
            </div>
            <hr>
            <hr>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img src="{{URL::asset('/sliders/16.jpg')}}" alt="the-buzz-img3"  style="width:340px;height:220px">
                </a>
            </div>
            <hr>
            <hr>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img src="{{URL::asset('/sliders/15.jpg')}}" alt="the-buzz-img3"  style="width:340px;height:220px">
                </a>
            </div>
            <hr>
            <hr>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img src="{{URL::asset('/sliders/14.jpg')}}" alt="the-buzz-img3"  style="width:340px;height:220px">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img src="{{URL::asset('/sliders/13.jpg')}}" alt="the-buzz-img3"  style="width:340px;height:220px">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-md-6">
                <h4> Have valuable urge to donate? Are you an organizer? Are you an organization? Or
                    are you one of them who likes to work for others welfare? This is your place.
                    You are very much welcome to arrange events, run campaigns, make donations and
                    volunteer. If you need help for yourself, just ask. Fill up a form. You are in.
                    Please sign up for more.</h4>
            </div>
            <div class="col-md-6">
                <img src="{{URL::asset('/sliders/12.jpg')}}" alt="the-buzz-img3"  style="width:540px;height:420px">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        

        <hr>

        <!-- Footer -->
        
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
        interval: 3500 //changes the speed
    })
    </script>

</body>

</html>
