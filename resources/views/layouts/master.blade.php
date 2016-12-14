<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kendrall Perú Travel | Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Responsive Multipurpose Bootstrap Theme">
	<meta name="author" content="The Develovers">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}">
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'> -->
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/ico/repute144x144.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/ico/repute114x114.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/ico/repute72x72.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/repute57x57.png') }}">
	<link rel="shortcut icon" href="{{ asset('favicon.png') }}">
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
	<div class="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top shrinkable" role="navigation">
			<div class="topbar">
				<div class="container">
					<ul class="list-inline top-nav">
						<li>SIGUENOS: </li>
						<li class="social-icons">
							<a href="http://www.facebook.com/kendallperutravel" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="social-icons"><a href="#" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<a href="/" class="navbar-brand navbar-logo">
						<img src="{{ asset('img/logo.png') }}" alt="Logo kendall Travel Perú">
					</a>
				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					<div class="pull-right header-data">
						<ul class="list-unstyled">
							<li><i class="fa fa-phone-square"></i> (01) 469-3815 / <i class="fa fa-mobile fa-lg"></i> 997974626</li>
							<li><i class="fa fa-whatsapp"></i> 997974626</li>
							<li>
								<i class="fa fa-envelope"></i>
								<a href=":mailito" class="fsize1-1"><strong>ventas@kendallperutravel.com</strong></a>
							</li>
						</ul>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ $currentUri == '/' ? 'active' : '' }}">
							<a href="/">INICIO</a>
						</li>
						<li class="{{ $currentUri == 'nosotros' ? 'active' : '' }}">
							<a href="{{ url('nosotros') }}">NOSOTROS</a>
						</li>
						<li class="{{ $currentUri == 'circuitos' ? 'active' : '' }}">
							<a href="{{ url('circuitos') }}">CIRCUITOS</a>
						</li>
						<li class="{{ $currentUri == 'paquetes' ? 'active' : '' }} dropdown">
							<a href="{{ url('paquetes') }}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAQUETES</a>
							<div class="dropdown-menu menu-list-paquetes">
								<ul class="pull-left list-unstyled mav-nacional">
									<li class="title-package-nav">Nacional<i class="fa fa-angle-double-right fa-fw"></i></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Arequipa') ) }}">Arequipa</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Ayacucho') ) }}">Ayacucho</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Cajamarca') ) }}">Cajamarca</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Chiclayo') ) }}">Chiclayo</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Cusco') ) }}">Cusco</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Huaraz') ) }}">Huaraz</a></li>
									<li class="ver-mas">
										<a href="{{ route('countriesByCategoria', 'nacionales') }}">Ver mas</a>
									</li>
								</ul>
								<ul class="pull-right list-unstyled nav-internacional">
									<li class="title-package-nav">Internacional<i class="fa fa-angle-double-right fa-fw"></i></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Argentina') ) }}">Argentina</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Aruba') ) }}">Aruba</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Bolivia') ) }}">Bolivia</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Brasil') ) }}">Brasil</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Chile') ) }}">Chile</a></li>
									<li><a href="{{ route('paquetesByCountry', str_slug('Colombia') ) }}">Colombia</a></li>
									<li class="ver-mas">
										<a href="{{ route('countriesByCategoria', 'internacionales') }}">Ver mas</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="{{ $currentUri == 'ofertas' ? 'active' : '' }}">
							<a href="{{ url('ofertas') }}">OFERTAS</a>
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
		<footer>
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
							<h3 class="footer-heading">BOLETÍN DE NOVEDADES</h3>
							<p>Suscribase y le enviaremos las ultimas promociones agregadas</p>
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
							<address class="fsize1-1">
								<strong>
									Calle Fortaleza 120, Coop. Chancas de Andahuaylas<br>Santa Anita - Lima 43
								</strong>
								<br>
								Teléfono: (01) 469-3815 / Cel: 997974626<br>
								<i class="fa fa-whatsapp"></i> 997974626<br>
								<strong>E-mail: <a href="#" class="kendall-color">ventas@kendallperutravel.com</a></strong>
							</address>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="col-sm-4">
						Kendall Perú Travel - Agencia de Viajes &copy; Todo los derechos reservados {{ Carbon\Carbon::now()->year }}
					</div>
					<div class="col-sm-4 text-center">
						<a href="http://www.facebook.com/kendallperutravel" target="_blank" class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x" style="color: #344f98"></i>
						</a>
						<a href="#" target="_blank" class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x" style="color: #138bee"></i>
						</a>
					</div>
					<div class="col-sm-4 text-right">
						<p class="fa-lg"><i class="fa fa-book"></i> Libro de reclamaciones</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="{{ asset('js/jquery.2.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/jquery.bootstrap-autohidingnavbar.min.js') }}"></script>
	<script src="{{ asset('js/repute-scripts.js') }}"></script>
	@yield('script-contact')
</body>
</html>