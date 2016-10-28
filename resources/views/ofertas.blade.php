@extends('layouts.master')

@section('content')
<section class="container product-grid">
	<h2>&nbsp;</h2>
	<div class="row">
	    @foreach($ofertas as $paquete)
	    <div class="col-md-3 col-sm-4">
	        <div class="thumbnail product-item">
	            <div class="destacado">
	                PROMOCIÓN
	                <span></span>
	            </div>
	            <a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}" title="{{ $paquete->paq_nombre }}">
	                <img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" class="img-responsive center-block" alt="{{ $paquete->paq_nombre }}">
	            </a>
	            <div class="info">
	                <h3 class="title">
	                    <i class="fa fa-plane fa-lg"></i>
	                    {{ $paquete->paq_nombre }}
	                </h3>
	                <div class="price"><strong><i class="fa fa-dollar"></i> {{ $paquete->paq_precio }}</strong></div>
	            </div>
	        </div>
	    </div>
	    @endforeach
	</div>
</section>
@endsection