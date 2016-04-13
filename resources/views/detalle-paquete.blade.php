@extends('layouts.master')

@section('class_page', 'portfolio')

@section('class_section', 'section-portfolio')
@section('content')
<div id="wrapper_detail_paquete" class="row">
	<div class="container">
		<div class="col-sm-8">
			<h3 class="page-header text-left">
				{{ $paquete->paq_nombre}}
				<span class="pull-right small" id="prize-open-rate" data-prize="{{ $paquete->paq_precio }}">
					$. {{ $paquete->paq_precio }} <span id="prize-sol"></span>
				</span>
			</h3>
			<h4>{{ $paquete->paq_titulo }}</h4>
			<div class="field-items">
				<img src="{{ asset('img/paquetes/' . $imagenes[0]->imagen) }}" style="box-shadow: 1px 1px 6px #000" class="img-responsive center-block">
			</div>
			<div class="paquete-descripcion">{!! $paquete->paq_descripcion !!}</div>
		</div>
		<aside class="col-sm-4">
			{!! Form::open(['route' => ['sendNotification', $paquete->id], 'method' => 'post', 'id' => 'enviar-cotizacion']) !!}
				<h3 class="page-header">Cotizar</h3>
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
				<button type="button" class="btn btn-block btn-lg btn-success">Enviar</button>
			{!! Form::close() !!}
		</aside>
	</div>
</div>
@endsection