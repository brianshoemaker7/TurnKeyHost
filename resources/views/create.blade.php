@extends('layouts.app')

@section('content')
    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Purchase</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Purchase</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <h3 class="thin text-center">Please fill out the form to setup your new hosting space.</h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('Account') }}">
                       

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label" >Username</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                <!-- @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_.pattern = this.value;" placeholder="Password" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="domain" class="col-md-4 control-label">Domain Name</label>

                            <div class="col-md-6">
                                <input id="domain" type="text" class="form-control" name="domain" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="package" class="col-md-4 control-label">Package</label>

                            <div class="col-md-6">
                            <select name="package" id="package" class="form-control" required>
                                  <option value="starter">Starter</option>
                                  <option value="business">Business</option>
                                  <option value="enterprise">Enterprise</option>
                                  <option value="reseller">Reseller</option>
                                </select>
                            </div>
                        </div>

                         

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Purchase Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
