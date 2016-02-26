<!DOCTYPE html>
<!--[if IE 8 ]><html lang="en" dir="ltr"  class="no-js ie ie8 lt-ie9"><![endif]-->
<!--[if IE 9 ]><html lang="en" dir="ltr"  class="no-js ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" /> -->
	<title>Kendrall Perú Travel | Inicio</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/boilerplate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/system.base.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/system.menus.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/system.messages.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/system.theme.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/superfish.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/skeleton.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style-mobile.css') }}">
	@section('contact')
	@show
</head>
<body id="body" class="html @yield('front', 'not-front') not-logged-in no-sidebars page-@yield('class_page', 'node') with-navigation with-subnav @yield('class_section')">
	<a href="#main-menu" class="element-invisible element-focusable">Skip to navigation</a>
	<a href="#content" class="element-invisible element-focusable">Skip to main content</a>
	<div id="page-wrapper" class="page-wrapper">
		<div id="page" class="page">
			<header id="header" class="header page-header clearfix" role="banner">
				<div class="header-section-3">
					<div class="header-section-1">
						<div class="container-12">
							<div class="grid-12">
								<div id="logo" class="logo">
									<a href="{{ url('/') }}" title="Inicio" rel="home" id="img-logo" class="img-logo">
										<img src="img/logo.png" alt="Logo kendall Perú Travel" style="height: 160px">
									</a>
									<div title="the best travel guide" id="slogan" class="slogan">The best travel guide </div>
								</div>
							</div>
						</div>
					</div>
					<div class="stickup header-section-2">
						<div class="container-12">
							<div class="grid-12">
								<div class="col1">
									<div class="region region-menu">
										<div id="block-superfish-1" class="block-superfish-1 block block-superfish block-even">
											<div class="content block-content">
												<ul id="superfish-1" class="menu sf-menu sf-main-menu sf-horizontal sf-style-none sf-total-items-5 sf-parent-items-2 sf-single-items-3">
													<li id="menu-201-1" class="active-trail first odd sf-item-1 sf-depth-1 sf-total-children-3 sf-parent-children-3 sf-single-children-0 menuparent">
														<a href="{{ url('/') }}" class="sf-depth-1 menuparent active">Inicio</a>
													</li>
													<li id="menu-5074-1" class="middle even sf-item-2 sf-depth-1 sf-no-children">
														<a href="{{ url('paquetes') }}" class="sf-depth-1">Paquetes</a>
													</li>
													<li id="menu-739-1" class="middle odd sf-item-3 sf-depth-1 sf-total-children-3 sf-parent-children-1 sf-single-children-2 menuparent">
														<a href="#" class="sf-depth-1 menuparent">Servicios</a>
														<ul>
															<li id="menu-3768-1" class="first odd sf-item-1 sf-depth-2 sf-no-children">
																<a href="#" class="sf-depth-2">Services 2</a>
															</li>
															<li id="menu-3769-1" class="middle even sf-item-2 sf-depth-2 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent">
																<a href="#" class="sf-depth-2 menuparent">Services 3</a>
																<ul>
																	<li id="menu-5079-1" class="first odd sf-item-1 sf-depth-3 sf-no-children">
																		<a href="#" title="" class="sf-depth-3">Category 1</a>
																	</li>
																	<li id="menu-5080-1" class="middle even sf-item-2 sf-depth-3 sf-no-children">
																		<a href="#" title="" class="sf-depth-3">Category 2</a>
																	</li>
																	<li id="menu-5081-1" class="last odd sf-item-3 sf-depth-3 sf-no-children">
																		<a href="#" title="" class="sf-depth-3">Category 3</a>
																	</li>
																</ul>
															</li>
															<li id="menu-3767-1" class="last odd sf-item-3 sf-depth-2 sf-no-children">
																<a href="http://livedemo00.template-help.com/drupal_53893/?q=portfolio-4" title="" class="sf-depth-2">Services 4</a>
															</li>
														</ul>
													</li>
													<li id="menu-668-1" class="middle even sf-item-4 sf-depth-1 sf-no-children">
														<a href="{{ url('nosotros') }}" class="sf-depth-1">Nosotros</a>
													</li>
													<li id="menu-4931-1" class="last odd sf-item-5 sf-depth-1 sf-no-children">
														<a href="{{ url('contacto') }}" class="sf-depth-1">Contacto</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@yield('flexslider')
				</div>
			</header>
			@section('content')
			@show
			<footer id="footer" class="footer page-footer" role="contentinfo">
	            <div class="footer-wrapper">
	                <div class="container-12">
	                    <div class="grid-5">
	                        <div class="region region-footer-one">
	                            <div id="block-fb-likebox-0" class="block-fb-likebox-0 block block-fb-likebox block-even">
	                                <h2 class="title block-title">Follow Us On Facebook</h2>
	                                <div class="content block-content">
	                                    <!-- <iframe src="../../www.facebook.com/plugins/likebox07b8.html?href=https://www.facebook.com/TemplateMonster&amp;width=270&amp;colorscheme=light&amp;show_faces=true&amp;bordercolor&amp;stream=false&amp;header=false&amp;height=305&amp;show_border=false&amp;force_wall=false" scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 270px; height: 305px;" allowTransparency="true" title="Like us on Facebook">
	                                    </iframe> -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="grid-4">
	                        <div class="region region-footer-two">
	                            <div id="block-tm-follow-site" class="block-tm-follow-site block block-tm-follow block-odd">
	                                <div class="content block-content">
	                                    <div class='tm-follow-links clearfix site'>
	                                        <span class='tm-follow-link-wrapper tm-follow-link-wrapper-facebook without-label'>
	                                            <a href="http://www.facebook.com/kendallperutravel" target="_blank" class="tm-follow-link tm-follow-link-facebook tm-follow-link-site"></a>
	                                        </span>
	                                        <span class='tm-follow-link-wrapper tm-follow-link-wrapper-googleplus without-label'>
	                                            <a href="#" class="tm-follow-link tm-follow-link-googleplus tm-follow-link-site"></a>
	                                        </span>
	                                        <span class='tm-follow-link-wrapper tm-follow-link-wrapper-linkedin without-label'>
	                                            <a href="#" class="tm-follow-link tm-follow-link-linkedin tm-follow-link-site"></a>
	                                        </span>
	                                    </div>
	                                </div>
	                            </div>
	                            <div id="block-block-9" class="block-block-9 block block-block block-even">
	                                <div class="content block-content">
	                                    <p>Calle Fortaleza 120 - Coop. Chancas de Andahuaylas<br/>Santa Anita<br/>Lima 43</p>
	                                    <p>administrador@kendallperutravel.com</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="grid-3">
	                        <div class="region region-footer-three">
	                            <div id="block-block-5" class="block-block-5 block block-block block-copyright block-odd">
	                                <div class="content block-content">
	                                    <div>&copy; {{ Carbon\Carbon::now()->year }} | <a href="http://livedemo00.template-help.com/drupal_53893/?q=privacy-policy">Privacy Policy</a></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</footer>
		</div>
	</div>
	<div class="region region-page-bottom">
		<script type="text/javascript" data-cfasync="false">
			/*
			window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
			f[z]=function(){
			(a.s=a.s||[]).push(arguments)};var a=f[z]._={
			},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
			f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
			0:+new Date};a.P=function(u){
			a.p[u]=new Date-a.p[0]};function s(){
			a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
			hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
			return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
			b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
			b.contentWindow[g].open()}catch(w){
			c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
			var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
			b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
			loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
			// custom configuration goes here (www.olark.com/documentation)
			olark.identify('7830-582-10-3714');*/
		</script>
		<noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact.html" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com/index40be.html?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
	</div>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.once.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/drupal.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery.tipsy.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/tipsy.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.easypiechart.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery.hoverIntent.minified.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('js/sftouchscreen.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.easing.js') }}"></script>
	<!--<script type="text/javascript" src="{{ asset('js/supersubs.js') }}"></script>-->
	<script type="text/javascript" src="{{ asset('js/jquery.lazyloader.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('js/device.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/tm-parallax.js') }}"></script>
	<!--[if LT IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		jQuery.extend(Drupal.settings, {
			// "tipsy":{
			// 	"custom_selectors":[{
			// 		"selector":".tipsy",
			// 		"options":{
			// 			"fade":1,
			// 			"gravity":"w",
			// 			"trigger":"hover",
			// 			"delayIn":"0",
			// 			"delayOut":"0",
			// 			"opacity":"0.8",
			// 			"offset":"0",
			// 			"html":0,
			// 			"tooltip_content":{
			// 				"source":"attribute",
			// 				"selector":"title"
			// 			}
			// 		}
			// 	}]
			// },
			"flexslider":{
				"optionsets":{
					"default":{
						"namespace":"flex-",
						"selector":".slides \u003E li",
						"easing":"swing",
						"direction":"horizontal",
						"reverse":false,
						"smoothHeight":false,
						"startAt":0,
						"animationSpeed":600,
						"initDelay":0,
						"useCSS":true,
						"touch":true,
						"video":false,
						"keyboard":true,
						"multipleKeyboard":false,
						"mousewheel":0,
						"controlsContainer":".flex-control-nav-container",
						"sync":"",
						"asNavFor":"",
						"itemWidth":0,
						"itemMargin":0,
						"minItems":0,
						"maxItems":0,
						"move":0,
						"animation":"fade",
						"slideshow":true,
						"slideshowSpeed":"7000",
						"directionNav":false,
						"controlNav":true,
						"prevText":"Previous",
						"nextText":"Next",
						"pausePlay":false,
						"pauseText":"Pause",
						"playText":"Play",
						"randomize":false,
						"thumbCaptions":false,
						"thumbCaptionsBoth":false,
						"animationLoop":true,
						"pauseOnAction":true,
						"pauseOnHover":false,
						"manualControls":""
					}
				},
				"instances":{
					"flexslider-1":"default"
				}
			},
			"dismiss":{
				"fadeout":0
			},
			// "olark":{
			// 	"disable_ios":1,"enabled":1
			// },
			"superfish":{
				"1":{
					"id":"1",
					"sf":{
						"animation":{
							"opacity":"show",
							"height":["show","easeOutCubic"]
						},
						"speed":"\u0027fast\u0027",
						"autoArrows":true,
						"dropShadows":false,
						"disableHI":false
					},
					"plugins":{
						"touchscreen":{
							"mode":"useragent_custom",
							"useragent":"iphone|android|ipad"
						},
						"supposition":false,
						"bgiframe":false,
						"supersubs":{
							"minWidth":"12",
							"maxWidth":"27",
							"extraWidth":1
						}
					}
				}
			}
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/jquery.loader.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>