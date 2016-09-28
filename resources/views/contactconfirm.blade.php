@extends('layouts.app')

@section('content')
    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Contact</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Message Sent</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <h3 class="thin text-center"></h3>


                        <div class="jumbotron top-space">
            <h4>Thank you for your inquiry. We look forward to meeting your needs or answering any questions you may have.</h4>
            <p class="text-right"><a class="btn btn-primary btn-large" href="/">Return Home »</a></p>
        </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
