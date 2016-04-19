@extends('layouts.master')

@section('content')
<div id="main-wrapper" class="row" role="main">
	<div class="container">
		<div class="col-sm-12">
			<h2 class="page-header">Ubicanos</h2>
			<div class="google-map-api">
				<div id="map-canvas" class="gmap"></div>
			</div>
		</div>
		<div class="col-sm-12" id="form-contact">
			<hr>
			<div class="row">
				<div class="col-sm-5">
					<h3>Información</h3>
					<address>
						<img src="img/logo.png" class="img-responsive">
						<p>
							<strong>
								Calle Fortaleza 120, Coop. Chancas de Andahuaylas<br/>Santa Anita - Lima 43
							</strong>
							<br />
							Teléfono: (51-1) 469-3815<br />
							Celular: 975451600<br />
							RPM.: *268353<br>
							E-mail: <a href="#" class="kendall-color">administrador@kendallperutravel.com</a>
						</p>
					</address>
				</div>
				<div class="col-sm-7">
					<h3>Formulario de contacto</h3>
					@include('partials.display_messages')
					<form action="{{ route('send-message') }}" method="post" id="contact-site-form" accept-charset="UTF-8">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6 fix-margin">
				 					<input placeholder="Nombre" type="text" id="edit-name" name="nombre" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<input placeholder="Correo electrónico" type="text" id="edit-mail" name="correo" class="form-control" required >
								</div>
							</div>
						</div>
						<div class="form-group">
							<input placeholder="Titulo" type="text" id="edit-subject" name="titulo" class="form-control" required />
						</div>
						<div class="form-group">
			 				<textarea placeholder="Escriba aquí su mensaje..." id="edit-message" name="mensaje" class="form-control" rows="9"></textarea>
						</div>
						<div class="form-group">
							<button id="edit-submit" class="btn btn-lg btn-success">
								<i class="fa fa-send-o"></i> Enviar Mensaje
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script-contact')
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script>
		google_api_map_init();
		function google_api_map_init(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(-12.0414954), parseFloat(-76.9666921));
			var marker;

			function initialize() {
				var mapOptions = {
					center: coordData,
					scrollwheel: false,
					styles: [ { "stylers": [ { "hue": "" }, { "saturation": 0 }, { "gamma": 1 } ] } ],
					zoom: 17
				}
				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
				marker = new google.maps.Marker({
					map: map,
					draggable: true,
					position: coordData,
					icon: ""
				});
			}
			google.maps.event.addDomListener(window, "load", initialize);
		}
	</script>
@endsection