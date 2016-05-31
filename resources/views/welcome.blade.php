@extends('layouts.master')

@section('hero_unit')
<section class="hero-unit-slider slider-responsive">
    <div id="carousel-hero" class="slick-carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('img/sliders/slide-1.jpg') }}" class="img-responsive" alt="Slider Image">
                <div class="carousel-caption">
                    <h3 class="hero-heading">CLEAN &amp; ELEGANT DESIGN</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/sliders/slide-2.jpg') }}" class="img-responsive" alt="Slider Image">
                <div class="carousel-caption">
                    <h3 class="hero-heading">ULTRA RESPONSIVE</h3>
                    <p class="lead">Leave it to the theme, it knows how to deal with screen sizes</p>
                    <a href="#" class="btn btn-lg hero-button">LEARN MORE</a>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/sliders/slide-3.jpg') }}" class="img-responsive" alt="Slider Image">
                <div class="carousel-caption">
                    <h3 class="hero-heading">EASY TO CUSTOMIZE</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
<section class="container product-grid">
    <h2 class="heading-center">PROMOCIONES DE LA SEMANA</h2>
    <div class="row">
        @foreach($ofertas as $paquete)
        <div class="col-md-3 col-sm-4">
            <div class="product-item">
                <a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}" title="{{ $paquete->paq_nombre }}"><img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" class="img-responsive center-block" alt="Product Item"></a>
                <div class="info">
                    <h3 class="title">
                        <i class="fa fa-plane fa-lg"></i>
                        {{ $paquete->paq_nombre }}
                    </h3>
                    <div class="price"><strong><i class="fa fa-dollar"></i> {{ $paquete->paq_precio }}</strong></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- CAROUSEL -->
<section class="recent-works slick-carousel">
    <div class="container">
        <h2 class="section-heading"><i class="fa fa-globe"></i> PAQUETES INTERNACIONALES</h2>
        <div class="row">
            <div class="portfolio-container">
                @foreach($internacionales as $paquete)
                <div class="portfolio-item">
                    <div class="overlay"></div>
                    <div class="info">
                        <h4 class="title">{{ $paquete->paq_nombre }}</h4>
                        <a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}" class="btn">Ver Detalle</a>
                    </div>
                    <div class="media-wrapper">
                        <img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" alt="Item Thumbnail" class="img-responsive center-block" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="recent-works slick-carousel">
    <div class="container">
        <h2 class="section-heading"><i class="fa fa-location-arrow"></i> PAQUETES NACIONALES</h2>
        <div class="row">
            <div class="portfolio-container">
                @foreach($nacionales as $paquete)
                <div class="portfolio-item">
                    <div class="overlay"></div>
                    <div class="info">
                        <h4 class="title">{{ $paquete->paq_nombre }}</h4>
                        <a href="{{ route('detallePaquete', [$paquete->id, str_slug($paquete->paq_nombre)]) }}" class="btn">Ver Detalle</a>
                    </div>
                    <div class="media-wrapper">
                        <img src="{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}" alt="Item Thumbnail" class="img-responsive center-block" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection