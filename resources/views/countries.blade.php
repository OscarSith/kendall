@extends('layouts.master')

@section('content')
<section class="container mt30">
	<div class="col-sm-12">
		@foreach($countries as $country)
			<div class="col-sm-4 col-md-3">
				<a class="thumbnail" href="{{ route('paquetesByCountry', $country->co_nombre_slug ) }}">
					<div class="list-country" style="background-image: url('{{ asset('img/paises/' . $country->co_imagen) }}')"></div>
					<div class="caption">
						<h4 class="text-center">{{ $country->co_nombre }}</h4>
					</div>
				</a>
			</div>
		@endforeach
	</div>
</section>
@endsection