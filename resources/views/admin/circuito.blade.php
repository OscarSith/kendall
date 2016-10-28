@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12" id="list-flyers">
			<h2 class="page-header">
				<span>Listado de Circuitos (Flyers)</span>
				&nbsp;-&nbsp;
				<button type="button" data-toggle="modal" data-target="#modal-new-flyer" class="btn btn-primary">NUEVO FLYER</button>
			</h2>
			@if (!$circuitos->isEmpty())
			@foreach($circuitos as $flyer)
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail">
						<div class="content-img">
							<img src="{{ asset('img/flyers/' .$flyer->flyer_img_thumb) }}" alt="{{ $flyer->flyer_name }}" class="img-responsive center-block">
						</div>
						<div class="info">
							<h4>{{ $flyer->flyer_name }}</h4>
							<button type="button" data-id="{{ $flyer->id }}" class="btn btn-sm btn-danger btn-block">ELIMINAR</button>
						</div>
					</div>
				</div>
			@endforeach
			@else
			<h3 class="text-center">No hay flyers que mostrar</h3>
			@endif
		</div>
	</div>
</div>
<div id="modal-new-flyer" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{!! Form::open(['route' => 'circuito', 'files' => true]) !!}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">AGREGAR NUEVO FLYER</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12 col-md-10 col-md-offset-1">
							<div class="form-group">
								<input type="text" class="form-control" name="flyer_name" placeholder="Nombre de flyer" required>
							</div>
							<div class="form-group">
								{!! Form::label('flyer_img', 'Escoger Imagen', ['class' => 'control-label']) !!}
								{!! Form::file('flyer_img', ['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection

@section('textarea')
<script>
	$('#list-flyers').on('click', '.info button', fnDeleteFlyer);

	function fnDeleteFlyer(e) {
		if (confirm('Seguro de eliminar este flyer?')) {
			var $button = $(e.currentTarget);
			var id = $button.data('id');
			var url = '{{ route('remove-flyer', ':ID') }}';

			$.ajax({
				url: url.replace(':ID', id),
				type: 'POST',
				dataType: 'json',
				beforeSend: function() {
					$button.prop('disabled', true);
				}
			}).done(function(data) {
				$button.closest('.col-sm-4').remove();
			}).fail(function(errors) {
				console.log(errors);
				$button.prop('disabled', false);
			});
		}
	}
</script>
@endsection