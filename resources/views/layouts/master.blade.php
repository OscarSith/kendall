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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/superfish.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	@section('contact')
	@show
</head>
<body id="body" class="html @yield('front', 'not-front') page-@yield('class_page', 'node') @yield('class_section')">
	<div id="fb-root"></div>
	<script>
	// 	(function(d, s, id) {
	//   var js, fjs = d.getElementsByTagName(s)[0];
	//   if (d.getElementById(id)) return;
	//   js = d.createElement(s); js.id = id;
	//   js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=311279235640892";
	//   fjs.parentNode.insertBefore(js, fjs);
	// }(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="page-wrapper" class="container-fluid">
		<header id="header" class="header page-header clearfix" role="banner">
			<div class="text-center">
				<a href="{{ url('/') }}" title="Inicio" rel="home" id="img-logo">
					<img src="img/logo.png" alt="Logo kendall Perú Travel" class="img-responsive center-block">
				</a>
				<div title="the best travel guide" id="slogan" class="slogan">The best travel guide </div>
			</div>
			<div class="stickup header-section-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 nav-header">
							<div class="region">
								<div id="block-superfish-1" class="block-superfish-1">
									<ul id="superfish-1" class="menu sf-menu">
										<li id="menu-201-1" class="{{ $currentUri == '/' ? 'active-trail' : '' }}">
											<a href="{{ url('/') }}">Inicio</a>
										</li>
										<li id="menu-5074-1" class="{{ $currentUri == 'paquetes' ? 'active-trail' : '' }}">
											<a href="{{ url('paquetes') }}">Paquetes</a>
										</li>
										<li id="menu-739-1" class=" menuparent">
											<a href="#" class="menuparent">Servicios</a>
											<ul>
												<li id="menu-3768-1">
													<a href="#" class="sf-depth-2">Services 2</a>
												</li>
												<li id="menu-3769-1">
													<a href="#" class="sf-depth-2">Services 3</a>
												</li>
												<li id="menu-3767-1">
													<a href="#" class="sf-depth-2">Services 4</a>
												</li>
											</ul>
										</li>
										<li id="menu-668-1" class="{{ $currentUri == 'nosotros' ? 'active-trail' : '' }}">
											<a href="{{ url('nosotros') }}">Nosotros</a>
										</li>
										<li id="menu-4931-1" class="{{ $currentUri == 'contacto' ? 'active-trail' : '' }}">
											<a href="{{ url('contacto') }}">Contacto</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@yield('flexslider')
		</header>
		@section('content')
		@show
		<footer id="footer" class="footer page-footer row" role="contentinfo">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="col-sm-5">
                        <div class="fb-page" data-href="http://www.facebook.com/kendallperutravel" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="http://www.facebook.com/kendallperutravel"><a href="http://www.facebook.com/kendallperutravel">KENDALL PERÚ TRAVEL</a></blockquote></div></div>
                    </div>
                    <div class="col-sm-4">
                        <div id="block-tm-follow-site" class="block-tm-follow-site">
                            <div class='tm-follow-links clearfix'>
                                <span class='tm-follow-link-wrapper tm-follow-link-wrapper-facebook'>
                                    <a href="http://www.facebook.com/kendallperutravel" target="_blank" class="tm-follow-link tm-follow-link-facebook tm-follow-link-site"></a>
                                </span>
                                <span class='tm-follow-link-wrapper tm-follow-link-wrapper-googleplus'>
                                    <a href="#" class="tm-follow-link tm-follow-link-googleplus tm-follow-link-site"></a>
                                </span>
                                <span class='tm-follow-link-wrapper tm-follow-link-wrapper-linkedin'>
                                    <a href="#" class="tm-follow-link tm-follow-link-linkedin tm-follow-link-site"></a>
                                </span>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Calle Fortaleza 120 - Coop. Chancas de Andahuaylas<br/>Santa Anita<br/>Lima 43</p>
                            <p>administrador@kendallperutravel.com</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>&copy; {{ Carbon\Carbon::now()->year }} | <a href="http://livedemo00.template-help.com/drupal_53893/?q=privacy-policy">Privacy Policy</a></div>
                    </div>
                </div>
            </div>
		</footer>
	</div>
	<div class="region region-page-bottom hidden">
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
	<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.easing.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery.lazyloader.js') }}"></script> -->
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
	@yield('script-contact')
</body>
</html>