@extends('layouts.master')

@section('content')
<div id="wrapper_detail_paquete" class="container">
	<div class="row">
		@include('partials.display_messages')
		<div class="col-sm-8">
			<h2 class="page-header text-left">
				<i class="fa fa-certificate"></i> {{ $paquete->paq_nombre}}
				<span class="pull-right small" id="prize-open-rate" data-prize="{{ $paquete->paq_precio }}">
					<i class="fa fa-dollar"></i> {{ $paquete->paq_precio }} <span id="prize-sol"></span>
				</span>
			</h2>
			<h4 class="sub-title-detail">{{ $paquete->paq_titulo }}</h4>
			<div class="field-items">
				@if (!$imagenes->isEmpty())
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
					@foreach($imagenes as $n => $image)
						<div class="item {{$n == 0 ? 'active' : ''}}">
							<img src="{{ asset('img/paquetes/' . $image->imagen) }}" class="img-responsive center-block">
						</div>
					@endforeach
					</div>
					@if ($imagenes->count() > 1)
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-chevron-left fa-lg" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-chevron-right fa-lg" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					@endif
				</div>
				@else
					<div class="alert alert-info">No hay imagenes que mostrar para este paquete</div>
				@endif
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
				<button class="btn btn-block btn-lg btn-success"><i class="fa fa-envelope"></i> Enviar</button>
			{!! Form::close() !!}
		</aside>
	</div>
	<div class="row">
		@if (!$othersPaquetes->isEmpty())
		<h3 class="text-center mt30">Otros paquetes que le pueden interesar</h3>
		<hr>
		<div class="portfolio-container">
			@foreach ($othersPaquetes as $paquete)
				@include('partials.list-paquete')
			@endforeach
		</div>
		<br><br>
		@endif
	</div>
</div>
@endsection