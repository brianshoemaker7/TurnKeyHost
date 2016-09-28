<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/font-awesome.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="/css/main.css">

    <!-- Scripts -->
 
  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/"><img src="/images/logo1.png" alt="TurnKey Hosting Solutions"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/plans">Plans</a></li>
                    <li><a href="/contact">Contact</a></li>

                    <!-- Authentication Links -->
                    <!-- @if (Auth::guest())
                      <li class="active"><a class="btn" href="login">Login / Register</a></li>
                    @else 
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                    @endif
                </ul> -->
                
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->  
                       


    @yield('content')


    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>321-200-5597<br>
                                <a href="mailto:#">me@brianshoemaker.info</a><br>
                                <br>
                                2538 Woods Edge Circle, Orlando, FL 32817
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-9 widget">
                        <h3 class="widget-title">Quote of the Day:</h3>
                        <div class="widget-body">
                            <p>our work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it. <br><br>-Steve Jobs
</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="/">Home</a> | 
                                <a href="/plans">Plans</a> |
                                <a href="/contact">Contact</a> 
                        
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2016 <a href="http://brianshoemaker.info/" rel="designer">Brian Shoemaker</a> 
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>   
        
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>
