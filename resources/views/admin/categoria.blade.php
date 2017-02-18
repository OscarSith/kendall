@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="pull-left" style="margin-top: 6px">Categorias</h3>
                    {{--<button class="btn btn-sm pull-right" data-toggle="modal" data-target="#modal-categoria">Nuevo</button>--}}
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorias as $categoria)
                            <tr data-id="{{ $categoria->id }}">
                                <td>{{ $categoria->nombre }}</td>
                                <td>
                                    {{-- <a href="#" class="btn btn-sm btn-primary">Editar</a>
                                    @if ($categoria->estado)
                                        <a href="#" class="btn btn-sm btn-warning">Inactivar</a>
                                    @else
                                        <a href="#" class="btn btn-sm btn-success">Inactivar</a>
                                    @endif --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-categoria" class="modal fade" role="dialog" aria-labelledby="labelCategoria">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Categoria</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>
@endsection
