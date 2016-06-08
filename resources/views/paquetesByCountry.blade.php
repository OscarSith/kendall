@extends('layouts.master')

@section('content')
<section class="container">
    <h2 class="heading-center">PAQUETES TURÍSTICOS DE {{ $name }}</h2>
    <div class="row">
		@foreach($paquetes as $paquete)
			@include('partials.list-paquete')
		@endforeach
    </div>
</section>
@stop