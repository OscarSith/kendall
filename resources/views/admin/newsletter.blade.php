<?php
/**
 * Created by PhpStorm.
 * User: oscarlarriega
 * Date: 19/02/17
 * Time: 11:54 PM
 */
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="mt0">
                        LISTADO DE SUSCRIPTORES -
                        <a href="{{ route('exportNewsletters') }}" class="btn btn-success" title="Descargar en Excel">
                            Descargar <i class="fa fa-download fa-lg"></i>
                        </a>
                    </h3>
                </div>
                <div class="panel-body">
                    @foreach($suscriptores as $value)
                    <div class="row">
                        <div class="col-sm-8"><p>{{ $value->email }}</p></div>
                        <div class="col-sm-4"><small>{{ $value->created_at }}</small></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
