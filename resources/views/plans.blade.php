@extends('layouts.app')

@section('content')
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Plans</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-lg-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Plans</h1>
				</header>
				<div class="row"><br><br>
				<div class="col-md-3 col-sm-4 highlight">
					<div class="h-caption"><h4><i class="fa fa-desktop fa-5"></i>Starter Plan</h4></div><br>
					<div class="h-body text-left">

						<ul>
							<li>1GB Storage</li>
							<li>50GB Transfer</li>
							<li>SSH Access</li>
							<li>PHP5 Support</li>
						</ul>	
					</div><br>
					<div class="h-body text-center">
					<p><a class="btn btn-action btn-lg" href="/Account/create" role="button">Buy Now</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 highlight">
					<div class="h-caption"><h4><i class="fa fa-money fa-5"></i>Business Plan</h4></div><br>
					<div class="h-body text-left">
						<ul>
							<li>5GB Storage</li>
							<li>100GB Transfer</li>
							<li>SSH Access</li>
							<li>PHP5 Support</li>
						</ul>	
					</div><br>
					<div class="h-body text-center">
					<p><a class="btn btn-action btn-lg" href="/Account/create" role="button">Buy Now</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-briefcase fa-5"></i>Enterprise Plan</h4></div><br>
					<div class="h-body text-left">
						<ul>
							<li>10GB Storage</li>
							<li>200GB Transfer</li>
							<li>SSH Access</li>
							<li>PHP5 Support</li>
						</ul>	
					</div><br>
					<div class="h-body text-center">
					<p><a class="btn btn-action btn-lg" href="/Account/create" role="button">Buy Now</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-credit-card fa-5"></i>Reseller Plan</h4></div><br>
					<div class="h-body text-left">
						<ul>
							<li>25GB Storage</li>
							<li>500GB Transfer</li>
							<li>SSH Access</li>
							<li>PHP5 Support</li>
						</ul>	
					</div><br>
					<div class="h-body text-center">
					<p><a class="btn btn-action btn-lg" href="/Account/create" role="button">Buy Now</a></p>
					</div>
				</div>
			</div> <!-- /row  -->
				<br><br><br><br><br><br>
			</article>
	

		</div>
	</div>	<!-- /container -->
@endsection