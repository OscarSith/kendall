@extends('layouts.master')

@section('front', 'front')

@section('flexslider')
    <div id="header_wrapper" class="header_wrapper">
        <div class="container-12">
            <div class="grid-12">
                <div class="region region-header">
                    <div id="block-views-slider-block" class="block-views-slider-block block block-views block-even">
                        <div class="content block-content">
                            <div class="view view-slider view-id-slider view-display-id-block view-dom-id-46cd3128795e8e5c8e31b7f6fc897930">
                                <div class="view-content">
                                    <div id="flexslider-1" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <div class="views-field views-field-field-slide-image">
                                                    <div class="field-content">
                                                        <img src="{{ asset('img/sliders/slide-1.jpg') }}" height="543"/>
                                                    </div>
                                                </div>
                                                <div class="flex-caption">
                                                    <h2>
                                                        <p><span style="color: #f27a8e;">Best</span> <span style="color: #f2b27a;">places</span> to stay</p>
                                                    </h2>
                                                    Cras ac orci egestas, gravida dolor eu, consequat arcu. Morbi imperdiet sodales mauris non adipiscing. Sed ut
                                                </div>
                                            </li>
                                            <li>
                                                <div class="views-field views-field-field-slide-image">
                                                    <div class="field-content">
                                                        <img src="{{ asset('img/sliders/slide-2.jpg') }}" height="543"/>
                                                    </div>
                                                </div>
                                                <div class="flex-caption">
                                                    <h2>
                                                        <p><span style="color: #f27a8e;">Your guide</span> <span style="color: #f2b27a;">to new</span> adventures</p>
                                                    </h2>
                                                    Cras ac orci egestas, gravida dolor eu, consequat arcu. Morbi imperdiet sodales mauris non adipiscing. Sed ut
                                                </div>
                                            </li>
                                            <li>
                                                <div class="views-field views-field-field-slide-image">
                                                    <div class="field-content">
                                                        <img src="{{ asset('img/sliders/slide-3.jpg') }}" height="543"/>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
<div id="header_bottom_wrapper" class="header_bottom_wrapper">
    <div class="container-12">
        <div class="grid-12">
            <div class="region region-header-bottom">
                <div id="block-views-welcome-block" class="block-views-welcome-block block block-views block-odd">
                    <h2 class="title block-title">Paquetes Internacionales</h2>
                    <div class="content block-content">
                        <div class="view view-welcome view-id-welcome view-display-id-block mobile-two-column">
                            <div class="view-content">
                                <div class="grid-3 views-row first alpha odd">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-1.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Miuasa Dekoias</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="grid-3 views-row even">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-2.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Ferode Vertyasa</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="grid-3 views-row odd">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-3.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Lertasa Certyas</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="grid-3 views-row last omega even">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-4.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Ferode Vertyasa</h4>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="region region-header-bottom">
                <div id="block-views-welcome-block" class="block-views-welcome-block block block-views block-odd">
                    <h2 class="title block-title">Paquetes Nacionales</h2>
                    <div class="content block-content">
                        <div class="view view-welcome view-id-welcome view-display-id-block mobile-two-column">
                            <div class="view-content">
                                <div class="grid-3 views-row first alpha odd">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-1.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Miuasa Dekoias</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="grid-3 views-row even">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-2.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Ferode Vertyasa</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="grid-3 views-row odd">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-3.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Lertasa Certyas</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="grid-3 views-row last omega even">
                                    <div class="views-field views-field-field-image">
                                        <div class="field-content">
                                            <img src="{{ asset('img/paquetes/img-4.jpg') }}" width="242" height="204"/>
                                        </div>
                                    </div>
                                    <div class="views-field views-field-nothing welcome-body">
                                        <span class="field-content">
                                            <h4>Ferode Vertyasa</h4>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div id="main-wrapper" class="main-wrapper" role="main">
        <div id="parallax_one_wrapper" class="parallax_one_wrapper img-bg parallax-box image-parallax-box">
        <div class="container-12">
            <div class="grid-12">
                <div class="region region-parallax-one">
                    <div id="block-block-11" class="block-block-11 block block-block align-center block-odd">
                        <h2 class="title block-title">Luxury travel</h2>
                        <div class="content block-content">
                            <p>just got a little bit cheaper</p>
                            <div class="btn btn-2"><a href="http://livedemo00.template-help.com/drupal_53893/?q=portfolio">more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-bg" data-parallax-type="image" data-img-url="{{ asset('img/parallax/parallax-one.jpg') }}" data-speed="0.5" data-invert="false"></div>
        </div>
        <div class="container-12">
        <div class="grid-12">
            <div id="main" class="main clearfix">
                <div id="content" class="content content-main ">
                    <div class="region region-content">
                        <div id="block-system-main" class="block-system-main block block-system block-even">
                            <div class="content block-content"></div>
                        </div>
                        <div id="block-views-information-block" class="block-views-information-block block block-views grid-5 suffix-1 alpha block-odd">
                            <h2 class="title block-title">Useful Information</h2>
                            <div class="content block-content">
                                <div class="view view-information view-id-information view-display-id-block view-dom-id-05d44d2f98da9dca48da5a5dd22c163f">
                                    <div class="view-content">
                                        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
                                            <div class="views-field views-field-body">
                                                <div class="field-content">
                                                    <p>Onsuagnie dolores euiione. Beciegast nveriti vitaesse stae nitas tyaiaset aplicabrde ertyas niptagiades. Colernatur aut oditautptate mias msequs. Denesciunt, neque poroui vuiolorem ipsum quia dolor.</p>
                                                    <p>Ut tortor elit, ullamcorper non odio sollicitudin, fermentum tristique nunc. Curabitur eu est orci. In sodales, dui eget tempor consequat, felis elit varius metus, eu euismod leo dui sit amet felis. Phasellus dapibus leo enim, ultrices iaculis dolor ornare rhoncus. Phasellus rutrum egestas</p>
                                                </div>
                                            </div>
                                            <div class="views-field views-field-view-node btn btn-3">
                                                <span class="field-content">
                                                    <a href="http://livedemo00.template-help.com/drupal_53893/?q=node/124">read more</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="block-block-12" class="block-block-12 block block-block grid-6 omega indent-one block-even">
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
        </div>
        </div>
        <div id="video_wrapper" class="video_wrapper video-bg">
        <a class="tm_video_bg" data-property="{videoURL:'http://youtu.be/0PVwJx5tv38', containment:'#video_wrapper',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1}">youtube</a>
        <div class="container-12">
            <div class="grid-12">
                <div class="region region-video">
                    <div id="block-block-14" class="block-block-14 block block-block block-odd"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection