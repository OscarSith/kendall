@extends('layouts.master')

@section('class_page', 'portfolio')

@section('class_section', 'section-portfolio')

@section('content')
<div id="header_bottom_wrapper" class="header_bottom_wrapper">
	<div class="container-12">
		<div class="grid-12">
			<div class="region region-header-bottom">
				<h2 id="page-title" class="title page-title">Paquetes</h2>
				<div class="view view-welcome view-id-welcome view-display-id-block mobile-two-column">
					<?php $n = -1; ?>
					@foreach($paquetes as $paquete)
						<?php $n++;
						switch ($n) {
							case 0: $class = 'first alpha odd'; break;
							case 1: $class = 'even'; break;
							case 2: $class = 'odd'; break;
							case 3:
								$class = 'last omega even';
								$n = -1;
							break;
						}
						?>
						@if ($n == 0)
							<div class="view-content">
						@endif
							<div class="grid-3 views-row {{ $class }}">
								<div class="views-field views-field-field-image">
									<div class="field-content">
										<a href="{{ route('detallePaquete', $paquete->id) }}">
											<div class="img-mini" style="background-image: url('{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}')"></div>
										</a>
									</div>
								</div>
								<div class="views-field views-field-nothing welcome-body">
									<span class="field-content">
										<h4><a href="{{ route('detallePaquete', $paquete->id) }}">{{ $paquete->paq_nombre }}</a></h4>
									</span>
								</div>
							</div>
						@if ($n == -1)
							</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection