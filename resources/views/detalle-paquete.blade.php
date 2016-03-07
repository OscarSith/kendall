@extends('layouts.master')

@section('class_page', 'portfolio')

@section('class_section', 'section-portfolio')
@section('content')
<div id="header_bottom_wrapper" class="header_bottom_wrapper">
	<div class="container-12">
		<div class="grid-12">
			<div class="region region-header-bottom">
				<div class="content content-main grid-8 alpha">
					<h2 class="title node-title" style="text-align: left;margin-bottom: 10px">{{ $paquete->paq_nombre}}</h2>
					<h3>{{ $paquete->paq_titulo }}</h3>
					<div class="field field-name-field-portfolio-image field-type-image">
						<div class="field-items">
							<div class="field-item even">
								<img src="{{ asset('img/paquetes/' . $imagenes[0]->imagen) }}" style="box-shadow: 1px 1px 6px #000">
							</div>
						</div>
					</div>
					<div class="field field-name-body field-type-text-with-summary" style="background-color: #fff;padding: 20px;">{!! $paquete->paq_descripcion !!}</div>
				</div>
				<aside class="sidebar-second sidebar grid-4 omega">
					{!! Form::open(['route' => ['sendNotification', $paquete->id], 'method' => 'post', 'id' => 'enviar-cotizacion', 'class' => 'contact-form']) !!}
						<h3>Cotizar</h3>
						@include('partials.display_messages')
						<p>Envíenos un mensaje y le cotizaremos a la brevedad posible.</p>
						{!! Form::text('nombre', null, ['placeholder' => 'Nombre y Apellido']) !!}
						{!! Form::email('correo', null, ['placeholder' => 'Correo electrónico']) !!}
						{!! Form::text('telefono', null, ['placeholder' => 'Teléfono']) !!}
						{!! Form::textarea('mensaje', null, ['placeholder' => 'Mensaje...', 'id' => 'edit-message', 'class' => 'form-textarea required']) !!}
						<button type="button" class="form-submit">Enviar</button>
					{!! Form::close() !!}
				</aside>
			</div>
		</div>
	</div>
</div>
@endsection