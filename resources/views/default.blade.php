<!DOCTYPE html>
<html lang="en">
<head>
    
        <link rel="icon" type="image/png" href="">     
        
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('headtitle') | Project</title>

	<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.1/angular-material.css">
    <link rel="stylesheet" href="https://material.angularjs.org/1.1.1/docs.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-datetimepicker.4.7.14.css') }} ">   -->
    <!-- laravel Styles -->
    <link rel="stylesheet" href="{{ asset('css/scss/default.css') }} ">  
    
    
    <style>
        .dp-main-content { padding:30px 0; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/svg-assets-cache.js"></script>
    <script src="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.1/angular-material.js"></script>

    
    
        
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-resource.min.js"></script>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>

<body>
    
    <div id="main-wrapper">

    <div class="main-content cms-page-custom"> <!-- CMS Page Content -->

        <div class="freeze"> <!-- freeze -->
            
             
        <nav class="navbar navbar-default"> 
               <div class="container"> <!-- Container -->
                    <div class="row"> <!-- Row -->
                        <div class="col-md-4 col-sm-4 left-search-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle Navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>

<!--                            <form class="search-container" method="get" action="https://doctus.com.au/catalogsearch/result/">
                                  <input id="search_1" type="text" placeholder="Search" class="search-box snize-input-style" name="q" autocomplete="off">
                                  <label for="search_1"><span class="glyphicon glyphicon-search search-icon"></span></label>
                                  <input type="submit" id="search-submit">
                                </form>
-->

                        </div>
                                         <div class="col-md-8 col-sm-8">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                       
                                        
                                        
                                      
                                            
					@if (Auth::guest())
						<li> <a class="btn btn-default signup" href="{{ url('/auth/login') }}" role="button">LOGIN</a> </li>
						<li> <a class="btn btn-default signup" href="{{ url('/auth/register') }}" role="button">REGISTER</a> </li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif                                            
                                            
                                       
                                        
                                </ul>
                               
                            </div>
                        </div>
                    </div> <!-- End Row -->
                </div><!-- End Container -->
        </nav>

            <div class="container">
                <div class="row " >
                    <div class="left col-md-3">
                        <a href="{{ url('/') }}"> <img class="img-responsive" src="" alt="Logo Here"> </a>
                    </div> 
                    <div class="right col-md-9">
                        
<!--                        <ul class="nav navbar-nav">
                            <li class=""> <a href="#">MEDICATIONS</a> </li> 
                                <li class=""> <a href="#">OUR SERVICES</a> </li>
                                <li class=""> <a href="#">ABOUT</a> </li>
                        </ul>-->
                        
                    </div>
                    <div class="clear"> </div>
                </div> <!--/logo -->
            </div>        
        </div> <!-- /freeze -->

            <section class="page-nav-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"><h1>G4 Corporation</h1></div>
                        <div class="col-md-6 col-sm-6">
                            <!--<div class="row">
                                    <div class="col-md-5 col-sm-5 center" style="float:right">
                                        <img src="https://doctus.com.au/skin/frontend/default/doctus_theme/images/flag-1.png"/><br />
                                        <span class="pharma">Australian Owned &amp; Operated</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 center" style="float:right">
                                        <img src="https://doctus.com.au/skin/frontend/default/doctus_theme/images/pharmacy-online.png" /><br />
                                        <span class="pharma">Medicines Provided by <br />Pharmacy Online</span>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </section>
            
    </div> <!-- / CMS Page Content -->


    <div id="main-container" class="container"> <!-- Main Content -->
           <div class="row">
                
                        
                    @yield('content')
                    
                    
                
           </div>

    </div> <!-- / Main Content -->

    <section class="footer">
        <div class="container">

         
        </div>
    </section> <!-- /Footer -->


    </div> <!-- /Main Wrapper -->
 
</body>
</html>