@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="mt0">{{ $accion }} Paquete</h3>
				</div>
				<div class="panel-body">
					<?php $accion = strtolower($accion) ?>
					@if ($accion == 'nuevo')
					{!! Form::open(array('route' => 'addPaquete', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true)) !!}
						@if (!is_object($country_id))
						{!! Form::hidden('paq_pais', $country_id) !!}
						@endif
					@else
					{!! Form::model($paquete, array('route' => ['editPaquete', $paquete->id], 'method' => 'put', 'class' => 'form-horizontal', 'files' => true)) !!}
						{!! Form::hidden('paq_pais') !!}
					@endif
						@include('partials.display_messages')
						{!! Form::hidden('paq_tipo', $tipo) !!}
						<div class="form-group">
							<label class="control-label col-sm-2">País</label>
							<div class="col-sm-4">
								@if (is_object($country_id))
								<select name="paq_pais" class="form-control">
									@foreach ($country_id as $country)
									<option value="{{ $country->id }}">{{ $country->co_nombre }}</option>
									@endforeach
								</select>
								@else
								<input type="text" name="country_slug" value="{{ $country }}" class="form-control" readonly>
								@endif
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('paq_nombre', 'Nombre', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-10">
								{!! Form::text('paq_nombre', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('paq_titulo', 'Titulo', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-10">
								{!! Form::text('paq_titulo', null, ['class' => 'form-control', 'required']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('paq_precio', 'Precio', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-md-2 col-sm-3">
								{!! Form::text('paq_precio', null, ['class' => 'form-control', 'placeholder' => '120.00']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('paq_imagen_principal', 'Imagen', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-10">
								<div class="row">
								@if ($accion == 'editar')
									<div class="col-sm-4">
										<img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" class="img-responsive">
									</div>
									<div class="col-sm-8">
										{!! Form::file('paq_imagen_principal', ['class' => 'form-control']) !!}
									</div>
								@else
									<div class="col-sm-5">
										{!! Form::file('paq_imagen_principal', ['class' => 'form-control']) !!}
									</div>
								@endif
								</div>
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('paq_descripcion', 'Descripción', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-10">
								{!! Form::textarea('paq_descripcion', null, ['class' => 'form-control', 'required']) !!}
							</div>
						</div>
						<div class="col-sm-10 col-sm-offset-2">
							<button class="btn btn-primary">Agregar</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('textarea')
<script src="{{ asset('js/wysihtml5x-toolbar.min.js') }}"></script>
<script src="{{ asset('js/handlebars.runtime.min.js') }}"></script>
<script src="{{ asset('js/bootstrap3-wysihtml5.min.js') }}"></script>
<script type="text/javascript">
	var options = {
		toolbar: {
			"fa": true,
			"image": false
		}
	};
	$('#paq_descripcion').wysihtml5(options);
</script>
@endsection