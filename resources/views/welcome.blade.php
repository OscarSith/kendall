@extends('layouts.master')

@section('hero_unit')
<section class="hero-unit-slider slider-responsive">
    <div id="carousel-hero" class="slick-carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('img/sliders/slide-1.jpg') }}" class="img-responsive" alt="Slider Image">
            </div>
            <div class="item">
                <img src="{{ asset('img/sliders/slide-2.jpg') }}" class="img-responsive" alt="Slider Image">
            </div>
            <div class="item">
                <img src="{{ asset('img/sliders/slide-3.jpg') }}" class="img-responsive" alt="Slider Image">
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
@if (!$ofertas->isEmpty())
<section class="container product-grid">
    <h2 class="heading-center">PROMOCIONES DE LA SEMANA</h2>
    <div class="row">
        @foreach($ofertas as $paquete)
        <div class="col-md-3 col-sm-4">
            <div class="thumbnail product-item">
                <div class="destacado">
                    PROMOCIÓN
                    <span></span>
                </div>
                <a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}" title="{{ $paquete->paq_nombre }}">
                    <img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" class="img-responsive center-block" alt="{{ $paquete->paq_nombre }}">
                </a>
                <div class="info">
                    <h3 class="title">
                        {{ $paquete->paq_nombre }}
                    </h3>
                    <div class="price"><strong><i class="fa fa-dollar"></i> {{ $paquete->paq_precio }}</strong></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
<!-- CAROUSEL -->
<section class="recent-works slick-carousel">
    <div class="container">
        <h2 class="section-heading"><i class="fa fa-globe"></i> PAQUETES INTERNACIONALES</h2>
        <div class="row">
        @if (!$internacionales->isEmpty())
            <div class="portfolio-container">
                @foreach($internacionales as $paquete)
                    @include('partials.list-paquete')
                @endforeach
            </div>
        @else
        <div class="alert text-center"><i class="fa fa-warning fa-lg"></i> No hay Paquetes disponibles por el momento</div>
        @endif
        </div>
    </div>
</section>
<section class="recent-works slick-carousel">
    <div class="container">
        <h2 class="section-heading"><i class="fa fa-globe"></i> PAQUETES NACIONALES</h2>
        <div class="row">
        @if (!$nacionales->isEmpty())
            <div class="portfolio-container">
                @foreach($nacionales as $paquete)
                    @include('partials.list-paquete')
                @endforeach
            </div>
        @else
        <div class="alert text-center"><i class="fa fa-warning fa-lg"></i> No hay Paquetes disponibles por el momento</div>
        @endif
        </div>
    </div>
</section>
@endsection