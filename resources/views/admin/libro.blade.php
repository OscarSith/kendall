@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="mt0">LISTADO DE LIBRO DE RECLAMACIONES</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                        @foreach($data as $value)
                            <tr>
                                <td>{{ $value->nombre }}</td>
                                <td>{{ $value->nro }}</td>
                                <td>{{ $value->nombre_reclamante }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    @if ($value->estado == 1)
                                        <span class="label label-warning vbottom">Por Aprovar</span>
                                    @elseif ($value->estado == 2)
                                        <span class="label label-success vbottom">Aprovado</span>
                                    @else
                                        <span class="label label-danger vbottom">Desaprovado</span>
                                    @endif
                                    <div class="btn-group pull-right">
                                        <a href="{{ route('libroReclamacionPdf', $value->id) }}" class="btn btn-default">
                                            <i class="fa fa-file-pdf-o text-danger"></i> Ver pdf
                                        </a>
                                        @if ($value->estado == 1)
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('libroReclamacionAprovar', $value->id) }}"><i class="fa fa-check text-success fa-fw"></i>Aprovar</a></li>
                                            <li><a href="{{ route('libroReclamacionDesaprovar', $value->id) }}"><i class="fa fa-times text-danger fa-fw"></i>Desaprovar</a></li>
                                        </ul>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
