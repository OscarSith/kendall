<div class="col-sm-4 col-md-3">
	<div class="thumbnail">
		<img src="{{ $paquete->paq_imagen_principal }}" alt="{{ $paquete->paq_nombre }}">
		<div class="caption">
			<h4><i class="fa fa-plane fa-fw"></i>{{ $paquete->paq_nombre }}</h4>
			<p style="min-height: 70px;">
				{{ $paquete->paq_titulo }}
				<br>
				<strong>Desde <i class="fa fa-dollar fa-fw"></i> {{ $paquete->paq_precio }}</strong>
			</p>
			<div>
				<a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}" class="btn btn-primary" role="button">Ver Detalles</a>
			</div>
		</div>
	</div>
</div>