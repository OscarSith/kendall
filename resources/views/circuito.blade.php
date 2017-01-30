@extends('layouts.master')

@section('content')
<section class="container product-grid" id="flyers">
	<h2>&nbsp;</h2>
	<div class="row">
		@if (!$circuitos->isEmpty())
			@foreach($circuitos as $flyer)
			<div class="col-md-3 col-sm-4">
				<div class="thumbnail">
					<img src="{{ asset('img/flyers/' . $flyer->flyer_img_thumb) }}"
						class="img-responsive center-block" alt="{{ $flyer->flyer_name }}"
						data-img="{{ $flyer->flyer_img }}"
						data-name="{{ $flyer->flyer_name }}"
						data-toggle="modal" data-target="#modal-flyer">
				</div>
			</div>
			@endforeach
		@else
			<h4 class="text-center">
				<i class="fa fa-warning text-warning"></i>
				Ups... No hay resultados que mostrar
			</h4>
		@endif
	</div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-flyer">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<img src="" alt="" id="img-big-flyer" class="img-responsive center-block">
			</div>
		</div>
	</div>
</div>
@endsection

@section('script-contact')
	<script>
		$('#modal-flyer').on('show.bs.modal', fnShowFlyerImg);

		function fnShowFlyerImg(e) {
			var $img = $(e.relatedTarget);
			var img_src = $img.data('img');
			var img_name = $img.data('name');
			var $imgBig = $('#img-big-flyer');

			$imgBig.prop('src', '{{ asset('img/flyers/') }}/' + img_src).prop('alt', img_name);
		}
	</script>
@endsection