@extends('layouts.master')

@section('content')
<div id="wrapper_paquetes" class="recent-works">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="heading-center">NACIONALES</h2>
			</div>
			<div class="portfolio-container">
				@foreach($nacionales as $paquete)
				<div class="portfolio-item col-sm-3">
                    <div class="content-img">
                    	<a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}">
                        	<img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" alt="Item Thumbnail" class="img-responsive center-block">
                    	</a>
                    </div>
                    <h4><i class="fa fa-plane kendall-color"></i> {{ $paquete->paq_nombre }}</h4>
				</div>
				@endforeach
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h2 class="heading-center">INTERNACIONALES</h2>
			</div>
			<div class="portfolio-container">
				@foreach($internacionales as $paquete)
				<div class="portfolio-item col-sm-3">
                    <div class="content-img">
                    	<a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}">
                        	<img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" alt="Item Thumbnail" class="img-responsive center-block">
                    	</a>
                    </div>
                    <h4><i class="fa fa-plane kendall-color"></i> {{ $paquete->paq_nombre }}</h4>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection