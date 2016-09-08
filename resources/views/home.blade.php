@extends('layouts.app')

@section('content')
<header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">HOSTING DONE RIGHT.</h1>
                <p class="tagline">Because you already have enough things to worry about.</p>
                <p><a class="btn btn-action btn-lg" role="button">Get Started Now</a></p> 


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
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Custom Control Panel</h4></div>
                    <div class="h-body text-center">
                        <p>We have a proprietary control panel unlike any other out there. It's streamlined for ease of use and completely customizable to meet your needs.</p>
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
                        <p>We made the user interface ease to use and understand. No more hunting around and searching for what you need. It's all laid out in an accessible and simple form.</p>
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
                <h3>What question will I ask here?</h3>
                <p>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus.</p>
            </div>
        </div> <!-- /row -->

        <div class="jumbotron top-space">
            <h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
            <p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
        </div>

</div>  <!-- /container -->
    
    <!-- Social links. @TODO: replace by link/instructions in template -->
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
