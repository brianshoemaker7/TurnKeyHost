<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    <title>TurnkeyHost.com - Making hosting easier one site at a time.</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../favicons/manifest.json">
    <link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

         

<body class="home">
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="/plans">Plans</a></li>
                    <li><a href="/contact">Contact</a></li>
                    
                     <!-- Authentication Links -->
              <!--     <!--  --> <!--  @if (Auth::guest()) -->
                  <!--     <li class="active"><a class="btn" href="/login">SIGN IN / SIGN UP</a></li>
                    @else 
                      <li class="active"><a href="#" > {{ Auth::user()->name }} </a></li>
                    @endif
                </ul> --> -->
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->

    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">HOSTING DONE RIGHT.</h1>
                <p class="tagline">Because you already have enough things to worry about.</p>
                <p><a class="btn btn-action btn-lg" role="button" href="/plans">Get Started Now »</a></p> 


            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h2 class="thin">Hassle free, it's what we do!</h2>
        <p class="text-muted">
            Hosting solutions don't need to be complicated. We've made ours simple and powerful.<br> 
            As easy as turning a key</p>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <h3 class="text-center thin">Robust Solutions for Everyday People.</h3>
            
            <div class="row">
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Complete Control</h4></div>
                    <div class="h-body text-center">
                        <p>We give you full access to your space. You may install anything you like. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Lightning Fast</h4></div>
                    <div class="h-body text-center">
                        <p>We've removed the fluff that slows and bogs down systems from the inside out.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Ease of Use</h4></div>
                    <div class="h-body text-center">
                        <p>No more frustrations with not being able to fully access your server space. After all, it's yours!</p>
                    </div>
                </div>
            
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">

        <h2 class="text-center top-space">Frequently Asked Questions</h2>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <h3>How much does it cost?</h3>
                <p>We have several plans for needs of all sorts. Everything from the hobbyist developer to full fledged enterprise solutions for even the largest businesses.</p>
            </div>
            <div class="col-sm-6">
                <h3>How long does it take to setup?</h3>
                <p>You will be able to access your hosting space in just a couple of minutes after purchasing a plan. Please note however that it does take up to 48 hours for your domain to propogate</p>
            </div>
        </div> <!-- /row -->

        <div class="row">
            <div class="col-sm-6">
                <h3>How many sites can I host with my hosting plan?</h3>
                <p>
                    If you have a reseller account you may host as many sites as you have space for. Non-reseller accounts may only host one main domain.
                </p>
            </div>
            <div class="col-sm-6">
                <h3>Do I really have full access to my space?</h3>
                <p>Yes, you really have full SSH access to the server. Nothing is off limits. AS long as it's compatible with our LAMP stack, you can use it. </p>
            </div>
        </div> <!-- /row -->

        <div class="jumbotron top-space">
            <h4>There are very few hosting services out there that can even compare to us. Complete access is the primary reason we started Turn Key Hosting Services. Just like you, we were tired of not being able to fully use the space we were paying for. Click the button below and experience the difference of full server access.</h4>
            <p class="text-right"><a class="btn btn-primary btn-large" href="/plans">Get Started Now »</a></p>
        </div>

</div>  <!-- /container -->
    
    <!-- Social links. -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <!-- /social links -->


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
                                <a href="#">Home</a> | 
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
        




    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="/js/headroom.min.js"></script>
    <script src="/js/jQuery.headroom.min.js"></script>
    <script src="/js/template.js"></script>
</body>
</html>