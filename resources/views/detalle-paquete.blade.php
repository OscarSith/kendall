@extends('layouts.master')

@section('content')
<div id="wrapper_detail_paquete" class="container">
	<div class="row">
		<div class="col-sm-8">
			<h2 class="page-header text-left">
				<i class="fa fa-certificate"></i> {{ $paquete->paq_nombre}}
				<span class="pull-right small" id="prize-open-rate" data-prize="{{ $paquete->paq_precio }}">
					<i class="fa fa-dollar"></i> {{ $paquete->paq_precio }} <span id="prize-sol"></span>
				</span>
			</h2>
			<h4 class="sub-title-detail">{{ $paquete->paq_titulo }}</h4>
			<div class="field-items">
				<img src="{{ asset('img/paquetes/' . $imagenes[0]->imagen) }}" style="box-shadow: 1px 1px 6px #000" class="img-responsive center-block">
			</div>
			<div class="default-tabs">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a href="#chapter1" role="tab" data-toggle="tab"><i class="fa fa-bookmark"></i> Descripción</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active paquete-descripcion" id="chapter1">
						{!! $paquete->paq_descripcion !!}
					</div>
				</div>
			</div>
		</div>
		<aside class="col-sm-4">
			{!! Form::open(['route' => ['sendNotification', $paquete->id], 'method' => 'post', 'id' => 'enviar-cotizacion']) !!}
				<h2 class="page-header">Cotizar</h2>
				@include('partials.display_messages')
				<p>Envíenos un mensaje y le cotizaremos a la brevedad posible.</p>
				<div class="form-group">
					{!! Form::text('nombre', null, ['placeholder' => 'Nombre y Apellido', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::email('correo', null, ['placeholder' => 'Correo electrónico', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('telefono', null, ['placeholder' => 'Teléfono', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::textarea('mensaje', null, ['placeholder' => 'Mensaje...', 'id' => 'edit-message', 'class' => 'form-control']) !!}
				</div>
				<button type="button" class="btn btn-block btn-lg btn-success"><i class="fa fa-envelope"></i> Enviar</button>
			{!! Form::close() !!}
		</aside>
	</div>
	<div class="row">
		@if (!$othersPaquetes->isEmpty())
		<h3 class="text-center mt30">Otros paquetes que le pueden interesar</h3>
		<hr>
		<div class="portfolio-container">
			@foreach ($othersPaquetes as $paquete)
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
		<br><br>
		@endif
	</div>
</div>
@endsection