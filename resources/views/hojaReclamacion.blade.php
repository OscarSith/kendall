@extends('layouts.app')

@section('content')
<div class="col-sm-8 col-sm-offset-2" style="border: 1px solid #999">

    {!! Form::open(['route' => 'agregarReclamacion', 'class' => "form-horizontal"]) !!}
        @include('partials.show-errors')
        @include('partials.display_messages')
        <div class="row">
            <div class="col-sm-6">
                <h5>LIBRO DE RECLAMACIONES</h5>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="dia" class="control-label">FECHA:</label>
                    </div>
                    <div class="col-sm-3">
                        <select name="dia" id="dia" class="form-control">
                            @foreach($dias as $dia)
                                <option value="{{ $dia }}">{{ $dia }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="mes" id="mes" class="form-control">
                            @foreach($meses as $mes)
                                <option value="{{ $mes['value'] }}">{{ $mes['data'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="anio" id="anio" class="form-control">
                            @foreach($anios as $anio)
                                <option value="{{ $anio }}">{{ $anio }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <p class="text-center">
                    HOJA DE RECLAMACIÓN<br>
                    {{ \Carbon\Carbon::today()->year}}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "NOMBRE DE LA PERSONA NATURAL O RAZÓN SOCIAL DE LA PERSONA JURÍDICA"]) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('ruc', null, ['class' => "form-control", 'placeholder' => "RUC DEL PROVEEDOR", 'maxlength' => 11]) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('direccion', null, ['class' => "form-control", 'placeholder' => "DOMICILIO DEL ESTABLECIMIENTO DONDE SE COLOCA EL LIBRO DE RECLAMACIONES / CÓDIGO DE IDENTIFICACIÓN"]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h5>1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('nombre_reclamante', null, ['class' => "form-control", 'placeholder' => "Nombre"]) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('domicilio_reclamante', null, ['class' => "form-control", 'placeholder' => "Domicilio"]) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="col-sm-3">
                        {!! Form::text('dni_reclamante', null, ['class' => "form-control", 'placeholder' => "DNI / CE"]) !!}
                    </div>
                    <div class="col-sm-3">
                        {!! Form::tel('telefono_reclamante', null, ['class' => "form-control", 'placeholder' => "TELÉFONO"]) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::email('email_reclamante', null, ['class' => "form-control", 'placeholder' => "E-MAIL:"]) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('menor_reclamante', null, ['class' => "form-control", 'placeholder' => "PADRE O MADRE: [PARA EL CASO DE MENORES DE EDAD]"]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h5>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <ul class="list-unstyled">
                    <li>
                        <div class="checkbox">
                            <label for="ide_producto">
                                {!! Form::radio('tipo', 'PRODUCTO', false, ['id' => 'ide_producto']) !!} PRODUCTO
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label for="ide_servicio">
                                {!! Form::radio('tipo', 'SERVICIO', false, ['id' => 'ide_servicio']) !!} SERVICIO
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('monto_reclamado', null, ['class' => "form-control", 'placeholder' => "MONTO RECLAMADO"]) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('descripcion', null, ['class' => "form-control", 'placeholder' => "DESCRIPCIÓN:"]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <h5>3. DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR</h5>
            </div>
            <div class="col-sm-2">
                <div class="checkbox">
                    <label for="reclamo">
                        {!! Form::radio('tipo_disconformidad', 'RECLAMO', false ) !!} RECLAMO<sup>1</sup>
                    </label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="checkbox">
                    <label for="queja">
                        {!! Form::radio('tipo_disconformidad', 'QUEJA', false) !!} QUEJA<sup>2</sup>
                    </label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="well well-sm">
                    <ul class="list-unstyled">
                        <li>
                            <small>
                                <strong><sup>1</sup>RECLAMO:</strong> Disconformidad relacionada a los productos o  servicios.
                            </small>
                        </li>
                        <li>
                            <small>
                                <strong><sup>2</sup>QUEJA:</strong> Disconformidad no relacionada a los productos o servicios; o, malestar o  descontento respecto a la atención al público.
                            </small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::textarea('detalle', null, ['rows' => "6", 'placeholder' => "DETALLE:", 'class' => "form-control"]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::textarea('periodo', null, ['rows' => "4", 'placeholder' => "PERIODO:", 'class' => "form-control"]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <button class="btn btn-primary">ENVIAR</button>
            </div>
        </div>

    {!! Form::close() !!}
</div>
@endsection