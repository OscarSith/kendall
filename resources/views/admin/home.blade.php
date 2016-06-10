@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form class="form-inline">
                        <label class="control-label">PAISES</label>
                        &nbsp;
                        <select class="form-control" id="country">
                            @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $categoria->id == $catId ? 'selected' : ''}}>{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        &nbsp; | &nbsp;
                        <a href="#modal-country" data-toggle="modal" class="btn btn-sm btn-primary">Nuevo País</a>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row">
                            @include('partials.display_messages')
                            @foreach($countries as $country)
                            <div class="col-sm-4 col-md-3">
                                <a class="thumbnail" href="{{ route('getCountries', $country->co_nombre_slug ) }}">
                                    <div class="list-country" style="background-image: url('{{ asset('img/paises/' . $country->co_imagen) }}')"></div>
                                    <div class="caption">
                                        <h4 class="text-center">{{ $country->co_nombre }}</h4>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-country" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Nuevo Pais</h4>
            </div>
            {!! Form::open(['route' => 'country', 'files' => true]) !!}
            <input type="hidden" name="co_categoria" value="{{ $catId }}">
            <div class="modal-body">
                <div class="form-group">
                    {!! Form::text('co_nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del País', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::file('co_imagen', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('textarea')
<script type="text/javascript">
    $('#country').on('change', function(e) {
        var url = '{{ route('dashboard') }}',
            value = $(this).val();

        if (value > 1) {
            location.href = url + '?cat=' + value;
        } else {
            location.href = url;
        }
    });
</script>
@endsection