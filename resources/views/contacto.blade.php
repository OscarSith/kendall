@extends('layouts.master')

@section('class_page', 'contacts')

@section('class_section', 'section-contacts')

@section('contact')
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
@endsection

@section('content')
<div id="main-wrapper" class="main-wrapper" role="main">
	<div class="container-12">
		<div class="grid-12">
			<div id="main" class="main clearfix">
				<div id="content" class="content content-main ">
					<div class="region region-content">
						<div id="block-system-main" class="block-system-main block block-system block-even">
							<div class="content block-content">
								<div class="panel-flexible panels-flexible-11 clearfix" id="page-contacts">
									<div class="panel-flexible-inside panels-flexible-11-inside">
										<div class="panels-flexible-row panels-flexible-row-11-main-row panels-flexible-row-first clearfix pannel-map">
						  					<div class="inside panels-flexible-row-inside panels-flexible-row-11-main-row-inside panels-flexible-row-inside-first">
												<div class="panels-flexible-region panels-flexible-region-11-center panels-flexible-region-first panels-flexible-region-last">
						  							<div class="inside panels-flexible-region-inside panels-flexible-region-11-center-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
														<!-- <div class="panel-pane pane-custom pane-1"> -->
					        							<h2 class="pane-title">Ubicanos</h2>
					  									<div class="pane-content">
					    									<div class="google-map-api ">
																<div id="map-canvas" class="gmap"></div>
															</div>
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
														</div>
						  							</div>
												</div>
						  					</div>
										</div>
										<div class="panels-flexible-row panels-flexible-row-11-1 panels-flexible-row-last">
						  					<div class="inside panels-flexible-row-inside panels-flexible-row-11-1-inside panels-flexible-row-inside-last">
												<div class="panels-flexible-region panels-flexible-region-11-contacts panels-flexible-region-first panels-flexible-region-last ">
						  							<div class="inside panels-flexible-region-inside panels-flexible-region-11-contacts-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
														<div class="panel-pane pane-custom pane-2 col-1-3">
						        							<h2 class="pane-title">Información</h2>
						  									<div class="pane-content">
																<img src="img/logo.png" style="width: 200px">
																<p><strong><br />
																Calle Fortaleza 120, Coop. Chancas de Andahuaylas<br/>
																Santa Anita - Lima 43</strong><br />
																Teléfono: (51-1) 469-3815<br />
																Celular: 975451600<br />
																RPM.: *268353<br>
																E-mail: <a href="#">administrador@kendallperutravel.com</a></p>
															</div>
						  								</div>
														<div class="panel-separator"></div>
														<div class="panel-pane pane-contact col-2-3 col-last">
						        							<h2 class="pane-title">Formulario de contacto</h2>
															@include('partials.display_messages')
															<div class="pane-content">
																<form class="user-info-from-cookie contact-form" action="{{ route('send-message') }}" method="post" id="contact-site-form" accept-charset="UTF-8">
																	<div class="form-item form-type-textfield form-item-name">
														  				<label class="element-invisible" for="edit-name">Nombre <span class="form-required" title="This field is required.">*</span></label>
														 				<input placeholder="Nombre" type="text" id="edit-name" name="nombre" class="form-text required" />
																	</div>
																	<div class="form-item form-type-textfield form-item-mail">
																		<label class="element-invisible" for="edit-mail">Correo electrónico <span class="form-required" title="This field is required.">*</span></label>
																 		<input placeholder="Correo electrónico" type="text" id="edit-mail" name="correo" class="form-text required" />
																	</div>
																	<div class="form-item form-type-textfield form-item-subject">
																		<label class="element-invisible" for="edit-subject">Titulo<span class="form-required" title="This field is required.">*</span></label>
																		<input placeholder="Titulo" type="text" id="edit-subject" name="titulo" class="form-text required" />
																	</div>
																	<div class="form-item form-type-textarea form-item-message">
																		<label class="element-invisible" for="edit-message">Mensaje<span class="form-required" title="This field is required.">*</span></label>
														 				<textarea placeholder="Escriba aquí su mensaje..." id="edit-message" name="mensaje" class="form-textarea required"></textarea>
																	</div>
																	<div class="form-actions form-wrapper" id="edit-actions">
																		<button id="edit-submit" class="form-submit">
																			<i class="fa fa-send-o"></i> Enviar Mensaje
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection