<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kendrall Perú Travel | Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Responsive Multipurpose Bootstrap Theme">
	<meta name="author" content="The Develovers">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-custom-styles.css') }}">
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/ico/repute144x144.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/ico/repute114x114.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/ico/repute72x72.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/repute57x57.png') }}">
	<link rel="shortcut icon" href="favicon.png">
</head>

<body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=311279235640892";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="wrapper" style="padding-top: 92px;">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="top:0;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<a href="{{ url('/') }}" class="navbar-brand navbar-logo">
						<img src="{{ asset('img/logo.png') }}" alt="Logo kendall Travel Perú">
					</a>
				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ $currentUri == '/' ? 'active' : '' }}">
							<a href="{{ url('/') }}">INICIO</a>
						</li>
						<li class="{{ $currentUri == 'paquetes' ? 'active' : '' }}">
							<a href="{{ url('paquetes') }}">PAQUETES</a>
						</li>
						<li {{ $currentUri == 'nosotros' ? 'active' : '' }}>
							<a href="{{ url('nosotros') }}">NOSOTROS</a>
						</li>
						<li class="{{ $currentUri == 'contacto' ? 'active' : '' }}">
							<a href="{{ url('contacto') }}">CONTACTO</a>
						</li>
					</ul>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>
		@yield('hero_unit')
		@section('content')
		@show
		<footer class="mt30">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="fb-page" data-href="http://www.facebook.com/kendallperutravel" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="http://www.facebook.com/kendallperutravel"><a href="http://www.facebook.com/kendallperutravel">KENDALL PERÚ TRAVEL</a></blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="newsletter">
							<h3 class="footer-heading">NEWSLETTER</h3>
							<p>Get the latest update from us by subscribing to our newsletter.</p>
							<form class="newsletter-form" method="POST">
								<div class="input-group input-group-lg">
									<input type="email" class="form-control" name="email">
									<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUSCRIBETE</span></button>
									</span>
								</div>
								<div class="alert"></div>
							</form>
						</div>
						<div class="social-connect">
							<h3 class="footer-heading">SIGUENOS</h3>
							<ul class="list-inline social-icons">
								<li><a href="http://www.facebook.com/kendallperutravel" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center copyright">
				&copy; Todo los derechos reservados {{ Carbon\Carbon::now()->year }}
			</div>
		</footer>
	</div>
	<script src="{{ asset('js/jquery.2.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/repute-scripts.js') }}"></script>
	@yield('script-contact')
</body>
</html>