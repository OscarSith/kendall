@extends('layouts.app')

@section('content')
<section class="container">
	<h2 class="page-header">PAQUETES {{ $name }} &nbsp; - &nbsp; <a href="{{ route('formPaquete', [str_slug($name), $country_id]) }}" class="btn btn-primary">Nuevo Paquete</a></h2>
	<div class="row">
		@include('partials.display_messages')
		@foreach($paquetes as $paquete)
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail">
				<img src="{{ $paquete->paq_imagen_principal }}" alt="{{ $paquete->paq_nombre }}">
				<div class="caption">
					<h4><i class="fa fa-plane fa-fw"></i>{{ $paquete->paq_nombre }}</h4>
					<p style="min-height: 70px;">
						{{ $paquete->paq_titulo }}
						<br>
						<strong>Desde <i class="fa fa-dollar fa-fw"></i> {{ $paquete->paq_precio }}</strong>
					</p>
					<div>
						<a href="{{ route('formEditPaquete', [str_slug($name), $country_id, $paquete->id]) }}" class="btn btn-primary" role="button">Editar</a>
						{{ Form::open(['route' => ['changeStatusPaquete', $paquete->id], 'method' => 'put', 'class' => 'pull-right']) }}
							@if (!$paquete->paq_estado)
								{{ Form::hidden('paq_estado', 0) }}
								<button class="btn btn-warning" role="button">Inactivar</button>
							@else
								{{ Form::hidden('paq_estado', 1) }}
								<button class="btn btn-success" role="button">Activar</button>
							@endif
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
@stop