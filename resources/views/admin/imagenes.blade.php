@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="pull-left mt0">Imagenes para {{ $paq_nombre }}</h3> &nbsp;
                    <a href="#modal-imagen" data-toggle="modal" class="btn btn-sm btn-primary">Nuevo</a>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                    @include('partials.display_messages')
                    @foreach($imagenes as $imagen)
                        <div class="col-sm-4 col-md-3">
                            <div class="thumbnail {{ !$imagen->estado ? 'inactivo' : '' }}">
                              <img src="{{ asset('img/paquetes/' . $imagen->imagen_chica) }}" alt="{{ $imagen->imagen }}">
                              <div class="caption">
                                <div class="content-buttons">
                                    {{ Form::open(['route' => ['changeStatusImagen', $imagen->id], 'method' => 'put', 'class' => 'pull-left']) }}
                                        @if ($imagen->estado)
                                            {{ Form::hidden('estado', 0) }}
                                            <button class="btn btn-warning" role="button">Inactivar</button>
                                        @else
                                            {{ Form::hidden('estado', 1) }}
                                            <button class="btn btn-success" role="button">Activar</button>
                                        @endif
                                    {{ Form::close() }}
                                    <!--{{ Form::open(['route' => ['deleteImagen', $imagen->id], 'method' => 'delete', 'class' => 'pull-right']) }}
                                        <button class="btn btn-danger" role="button">Eliminar</button>
                                    {{ Form::close() }}-->
                                    <div class="clearfix"></div>
                                </div>
                              </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-imagen" class="modal fade" role="dialog" aria-labelledby="labelImagen">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nueva Imagen</h4>
            </div>
            <div class="modal-body">
				{{ Form::open(['route' => 'addImagen', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) }}
					{{ Form::hidden('paquete_id', $id) }}
					<div class="form-group">
						{{ Form::label('imagen', null, ['class' => 'control-label col-sm-2']) }}
						<div class="col-sm-10">
							{!! Form::file('imagen', ['class' => 'form-control']) !!}
						</div>
					</div>
					<hr>
					<div class="text-right">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button class="btn btn-primary">Agregar</button>
					</div>
				{{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection()