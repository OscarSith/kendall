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
					@else
					{!! Form::model($paquete, array('route' => ['editPaquete', $paquete->id], 'method' => 'put', 'class' => 'form-horizontal')) !!}
					@endif
						@include('partials.display_messages')
						<div class="form-group">
							{!! Form::label('paq_categoria', 'Categoria', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-4">
								{!! Form::select('paq_categoria', $categorias, null, ['class' => 'form-control']) !!}
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
							<div class="col-sm-4">
								{!! Form::text('paq_precio', null, ['class' => 'form-control', 'placeholder' => '120.00']) !!}
							</div>
						</div>
						@if ($accion == 'nuevo')
						<div class="form-group">
							{!! Form::label('pag_imagen_principal', 'Imagen', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-10">
								{!! Form::file('pag_imagen_principal', ['class' => 'form-control']) !!}
							</div>
						</div>
						@endif
						<div class="form-group">
							{!! Form::label('paq_descripcion', 'Descripción', ['class' => 'control-label col-sm-2']) !!}
							<div class="col-sm-10">
								{!! Form::textarea('paq_descripcion', null, ['class' => 'form-control', 'required']) !!}
							</div>
						</div>
						<div class="form-group col-sm-offset-2">
							<button class="btn btn-primary">Agregar</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection