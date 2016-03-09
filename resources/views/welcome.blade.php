@extends('layouts.master')

@section('front', 'front')

@section('flexslider')
<div id="header_wrapper" class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="flexslider-1" class="flexslider view-slider">
                <ul class="slides">
                    <li>
                        <div class="views-field">
                            <img src="{{ asset('img/sliders/slide-1.jpg') }}">
                        </div>
                        <div class="flex-caption">
                            <h2>
                                <p><span style="color: #f27a8e;">Best</span> <span style="color: #f2b27a;">places</span> to stay</p>
                            </h2>
                            Cras ac orci egestas, gravida dolor eu, consequat arcu. Morbi imperdiet sodales mauris non adipiscing. Sed ut
                        </div>
                    </li>
                    <li>
                        <div class="views-field">
                            <img src="{{ asset('img/sliders/slide-2.jpg') }}">
                        </div>
                        <div class="flex-caption">
                            <h2>
                                <p><span style="color: #f27a8e;">Your guide</span> <span style="color: #f2b27a;">to new</span> adventures</p>
                            </h2>
                            Cras ac orci egestas, gravida dolor eu, consequat arcu. Morbi imperdiet sodales mauris non adipiscing. Sed ut
                        </div>
                    </li>
                    <li>
                        <div class="views-field">
                            <div class="field-content">
                                <img src="{{ asset('img/sliders/slide-3.jpg') }}" >
                            </div>
                        </div>
                        <div class="flex-caption">
                            <h2>
                                <p><span style="color: #f27a8e;">Come &amp; explore</span> <span style="color: #f2b27a;">our</span> planet</p>
                            </h2>
                            Cras ac orci egestas, gravida dolor eu, consequat arcu. Morbi imperdiet sodales mauris non adipiscing. Sed ut
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div id="header_bottom_wrapper" class="container">
    <div class="row">
        <h2 class="page-header">Paquetes Internacionales</h2>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/paquetes/img-1.jpg') }}" width="242" height="204"/>
                    <div class="text-center">
                        <h4>Miuasa Dekoias</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/paquetes/img-2.jpg') }}" width="242" height="204"/>
                    <div class="text-center">
                        <h4>Ferode Vertyasa</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/paquetes/img-3.jpg') }}" width="242" height="204"/>
                    <div class="text-center">
                        <h4>Lertasa Certyas</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/paquetes/img-4.jpg') }}" width="242" height="204"/>
                    <div class="text-center">
                        <h4>Ferode Vertyasa</h4>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="page-header">Paquetes Nacionales</h2>
        <div class="row">
            @foreach($nacionales as $paquete)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="{{ route('detallePaquete', $paquete->id) }}">
                        <div class="img-mini" style="background-image: url('{{ asset('img/paquetes/' . $paquete->paq_imagen_principal) }}')"></div>
                    </a>
                    <div class="views-field">
                        <h4>
                            <a href="{{ route('detallePaquete', $paquete->id) }}">{{ $paquete->paq_nombre }}</a>
                        </h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div id="parallax_one_wrapper" class="parallax_one_wrapper img-bg parallax-box image-parallax-box">
    <div class="container">
        <div class="col-sm-12">
            <div id="block-block-11" class="text-center">
                <h2>Luxury Travel</h2>
                <p>just got a little bit cheaper</p>
            </div>
        </div>
    </div>
    <div class="parallax-bg" data-parallax-type="image" data-img-url="{{ asset('img/parallax/parallax-one.jpg') }}" data-speed="0.5" data-invert="false"></div>
</div>
<div class="row" id="useful-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-header text-left">Useful Information</h2>
            </div>
            <div id="block-views-information-block" class="col-sm-6">
                <div class="views-field">
                    <p>Onsuagnie dolores euiione. Beciegast nveriti vitaesse stae nitas tyaiaset aplicabrde ertyas niptagiades. Colernatur aut oditautptate mias msequs. Denesciunt, neque poroui vuiolorem ipsum quia dolor.</p>
                    <p>Ut tortor elit, ullamcorper non odio sollicitudin, fermentum tristique nunc. Curabitur eu est orci. In sodales, dui eget tempor consequat, felis elit varius metus, eu euismod leo dui sit amet felis. Phasellus dapibus leo enim, ultrices iaculis dolor ornare rhoncus. Phasellus rutrum egestas</p>
                    <a href="#" class="btn btn-primary btn-lg">Read more</a>
                </div>
            </div>
            <div id="block-block-12" class="col-sm-6">
                <div class="content block-content">
                    <div id="progressbar" class="progressbar color-1" data-percent="25">
                        <div class="progressbar-title">feuytasas nuytas</div>
                        <div class="progressbar-percent">25%</div>
                        <div class="progressbar-wrap">
                            <div class="progressbar-background" style="width: 0"></div>
                        </div>
                    </div>
                    <div id="progressbar--2" class="progressbar color-2" data-percent="68">
                        <div class="progressbar-title">doloertys iutasa lietyasa</div>
                        <div class="progressbar-percent">68%</div>
                        <div class="progressbar-wrap">
                            <div class="progressbar-background" style="width: 0"></div>
                        </div>
                    </div>
                    <div id="progressbar--3" class="progressbar color-3" data-percent="30">
                        <div class="progressbar-title">miasasas verro</div>
                        <div class="progressbar-percent">30%</div>
                        <div class="progressbar-wrap">
                            <div class="progressbar-background" style="width: 0"></div>
                        </div>
                    </div>
                    <div id="progressbar--4" class="progressbar color-4" data-percent="77">
                        <div class="progressbar-title">certyuasa</div>
                        <div class="progressbar-percent">77%</div>
                        <div class="progressbar-wrap">
                            <div class="progressbar-background" style="width: 0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="video_wrapper" class="video_wrapper video-bg row">
    <a class="tm_video_bg" data-property="{videoURL:'http://youtu.be/0PVwJx5tv38', containment:'#video_wrapper',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1}">youtube</a>
    <div class="container-12">
        <div class="grid-12">
            <div class="region region-video">
                <div id="block-block-14" class="block-block-14 block block-block block-odd"></div>
            </div>
        </div>
    </div>
</div>
@endsection