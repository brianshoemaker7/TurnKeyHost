@extends('layouts.app')

@section('content')
<header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">HOSTING DONE! RIGHT.</h1>
                <p class="tagline">Because you already have enough things to worry about.</p>
                <p><a class="btn btn-action btn-lg" role="button" href="/Account/create">Get Started »</a></p> 


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
            <p class="text-right"><a class="btn btn-primary btn-large">Get Started »</a></p>
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
@endsection
