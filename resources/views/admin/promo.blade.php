@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			@include('partials.show-errors')
			<div class="panel panel-default">
				<div class="panel-heading">Administrar Ofertas o Promociones &nbsp; &nbsp; <a href="{{ route('formPaquete', [str_slug('no-city'), 0]) }}?tipo=oferta" class="btn btn-primary">Agregar Oferta</a></div>
				<div class="panel-body">
					@include('partials.display_messages')
					@if (!$promociones->isEmpty())
					@foreach ($promociones as $promocion)
						<div class="col-sm-4 col-md-3">
							<div class="thumbnail">
								<div class="list-country" style="background-image: url('{{ asset('img/paquetes/' . $promocion->paq_imagen_principal) }}')"></div>
								<div class="caption no-padding-sides">
									<h5>{{ $promocion->paq_nombre }}</h5>
								</div>
								<div>
									<a class="btn btn-primary" href="{{ route('formEditPaquete', [str_slug('no-city'), $promocion->paq_pais, $promocion->id] ) }}?tipo=O">Editar</a>
									{{ Form::open(['route' => ['deletePackagePromo', $promocion->id], 'method' => 'delete', 'class' => 'pull-right']) }}
									<button class="btn btn-danger">Eliminar</button>
									{{ Form::close() }}
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					@endforeach
					@else
					<h4 class="text-center">No hay resultados que mostrar</h4>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection