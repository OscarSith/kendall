@extends('layouts.master')

@section('class_page', 'portfolio')

@section('class_section', 'section-portfolio')

@section('content')
<div id="wrapper_paquetes" class="row">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-header">NACIONALES</h3>
				</div>
				@foreach($nacionales as $paquete)
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail">
						<a href="{{ route('detallePaquete', $paquete->id) }}">
							<div class="img-mini" style="background-image: url('{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}')"></div>
						</a>
						<div class="views-field">
							<h4><a href="{{ route('detallePaquete', $paquete->id) }}">{{ $paquete->paq_nombre }}</a></h4>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-header">INTERNACIONALES</h3>
				</div>
				@foreach($internacionales as $paquete)
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail">
						<a href="{{ route('detallePaquete', $paquete->id) }}">
							<div class="img-mini" style="background-image: url('{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}')"></div>
						</a>
						<div class="views-field">
							<h4><a href="{{ route('detallePaquete', $paquete->id) }}">{{ $paquete->paq_nombre }}</a></h4>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection