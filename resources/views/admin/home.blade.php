@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="pull-left mt0">Paquetes</h3> &nbsp;
                    <a href="{{ route('formPaquete') }}" class="btn btn-sm btn-primary">Nuevo Paquete</a>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                    @include('partials.display_messages')
                    @foreach($paquetes as $paquete)
                        <div class="col-sm-4 col-md-3">
                            <div class="thumbnail {{ !$paquete->paq_estado ? 'inactivo' : '' }}">
                                <div class="img-mini" style="background-image: url('{{ asset('img/paquetes/'.$paquete->paq_imagen_principal) }}')"></div>
                                @foreach($categorias as $categoria)
                                    @if ($categoria->id == $paquete->paq_categoria)
                                    <h4 class="text-center info-cat {{ $categoria->id == 1 ? 'locales' : 'inter' }}">{{ $categoria->nombre }}</h4 class="text-center info-cat">
                                    <?php break; ?>
                                    @endif
                                @endforeach
                              <div class="caption">
                                <h4>{{ $paquete->paq_nombre }}</h4>
                                <p>{{ str_limit($paquete->paq_titulo, 26) }}</p>
                                <hr>
                                <div class="content-buttons">
                                    <a href="{{ route('formEditPaquete', $paquete->id) }}" class="btn btn-primary pull-left" role="button">Editar</a>
                                    {{ Form::open(['route' => ['changeStatusPaquete', $paquete->id], 'method' => 'put', 'class' => 'pull-right']) }}
                                        @if ($paquete->paq_estado)
                                            {{ Form::hidden('paq_estado', 0) }}
                                            <button class="btn btn-warning" role="button">Inactivar</button>
                                        @else
                                            {{ Form::hidden('paq_estado', 1) }}
                                            <button class="btn btn-success" role="button">Activar</button>
                                        @endif
                                    {{ Form::close() }}
                                    <div class="clearfix"></div>
                                    <a href="{{ route('showImages', $paquete->id) }}" class="btn btn-block btn-default">Ver Imagenes</a>
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
@endsection
