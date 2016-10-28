$(function() {


	/*----------------------------/
	/* NAVBAR
	/*---------------------------*/

	if($('.navbar-fixed-top.shrinkable').length > 0) {
		$('.wrapper').css('padding-top', 186);

		$(window).scroll(function() {
			if($(document).scrollTop() > 300) {
				$('.navbar-fixed-top').addClass('shrink-active');
			}else {
				$('.navbar-fixed-top').removeClass('shrink-active');
			}
		});
	}

	/* fixed navbar for fullscreen slider (transparent navbar) */
	if($('.navbar-transparent.navbar-fixed-top').length > 0) {
		$(window).on('scroll', function(){
			if( $(window).width() > 1024 ) {
				// switch navigation class and logo image
				if( $(document).scrollTop() > 50 ) {
					$('.navbar').removeClass('navbar-transparent');
					$('.navbar-logo img').attr('src', 'assets/img/logo/repute-logo-nav.png');
				}else {
					$('.navbar').addClass('navbar-transparent');
					$('.navbar-logo img').attr('src', 'assets/img/logo/repute-logo-light.png');
				}
			}
		});
	}

	/* auto hiding navbar for fullscreen slider (transparent navbar) */
	if($('.navbar-auto-hiding').length > 0) {
		$('.navbar-auto-hiding').autoHidingNavbar();
	}

	/*----------------------------/
	/* CAROUSEL
	/*---------------------------*/

	if($('.slick-carousel').length > 0) {
		$('.recent-works.slick-carousel .portfolio-container').slick({
			dots: true,
			slidesToShow: 4,
			cssEase: 'ease-in',
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next">Next</button>',
			responsive: [
				{
					breakpoint: 993,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});

		$('#carousel-hero .carousel-inner').slick({
			speed: 800,
			dots: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 2500,
			prevArrow: '<button type="button" data-role="none" class="carousel-control left"><i class="fa fa-angle-left fa-2x"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="carousel-control right"><i class="fa fa-angle-right fa-2x"></i></button>',
		});
	}


	/*--------------------------------/
	/* BOOTSTRAP TOOLTIP
	/*-------------------------------*/

	if($('[data-toggle="tooltip"]').length > 0) {
		$('[data-toggle="tooltip"]').tooltip({
			container: "body"
		});
	}


	/*--------------------------------/
	/* MASKED INPUT
	/*-------------------------------*/

	/*if($('#masked-input-demo').length > 0) {
		$('#phone').mask('(999) 999-9999');
		$('#phone-ex').mask('(999) 999-9999? x99999');
		$('#tax-id').mask('99-9999999');
		$('#ssn').mask('999-99-9999');
		$('#product-key').mask('a*-999-a999');
	}*/


	/*-----------------------------------/
	/* AJAX CALL FOR NEWSLETTER FUNCTION
	/*----------------------------------*/

	var $newsletter = $('.newsletter-form');
	if ($newsletter.length) {
		$newsletter.find('.btn').click( function() {
			var $url = 'newsletter',
				$attr = $newsletter.attr('action');

			if (typeof $attr !== typeof undefined && $attr !== false) {
				if ($newsletter.attr('action') != '') $url = $newsletter.attr('action');
			}

			subscribe($newsletter, $url);
		});

		function subscribe(newsletter, formUrl) {
			var $btn = newsletter.find('.btn');

			$.ajax({
				url: formUrl,
				type: 'POST',
				dataType: 'json',
				cache: false,
				data: {
					email: newsletter.find('input[name="email"]').val(),
				},
				beforeSend: function(){
					$btn.addClass('loading').prop('disabled', true);
				}
			}).done(function( data, textStatus, XMLHttpRequest ){

				var className = '';

				if( data.result == true ) {
					className = 'alert-success';
				} else {
					className = 'alert-danger';
				}

				newsletter.find('.alert').html( data.message )
					.removeClass( 'alert-danger alert-success' )
					.addClass( 'alert active ' + className )
					.slideDown(300);
				$newsletter.trigger('reset');
			}).fail(function( request ) {
				var message = '';
				if (request.responseJSON.email.length) {
					request.responseJSON.email.forEach(function(error) {
						message += error + '<br>';
					});
				}
				newsletter.find('.alert').html( message )
					.removeClass( 'alert-danger alert-success' )
					.addClass( 'alert active alert-danger' )
					.slideDown(300);
			}).always(function() {
				$btn.removeClass('loading').prop('disabled', false);
			});
		}
	}


	/*-----------------------------------/
	/* AJAX CONTACT FORM
	/*----------------------------------*/

	if($('#contact-form').length > 0) {
		$('#contact-form').parsley();

		$('.contact-form-wrapper form').submit( function(e) {
			e.preventDefault();

			if( !$(this).parsley('isValid') )
				return;

			var $theForm = $(this);
			var $btn = $(this).find('#submit-button');
			var $btnText = $btn.text();
			var $url = "php/contact.php";
			var $alert = $(this).parent().find('.alert');

			$(this).parent().append('<div class="alert"></div>');

			$btn.find('.loading-icon').addClass('fa-spinner fa-spin ');
			$btn.prop('disabled', true).find('span').text("Sending...");

			$attr = $(this).attr('action');
			if (typeof $attr !== typeof undefined && $attr !== false) {
				if($(this).attr('action') != '') $url = $(this).attr('action');
			}

			$.post($url, $(this).serialize(), function(data){

				var $message = data.message;

				if( data.result == true ) {
					$theForm.slideUp('medium', function() {
						$alert.removeClass('alert-danger');
						$alert.addClass('alert-success').html($message).slideDown('medium');
					});
				}else {
					$alert.addClass('alert-danger').html($message).slideDown('medium');
				}

				$btn.find('.loading-icon').removeClass('fa-spinner fa-spin ');
				$btn.prop('disabled', false).find('span').text($btnText);

			})
			.fail(function() { console.log('AJAX Error'); });
		});
	}


	/*-----------------------------------/
	/* MISC
	/*----------------------------------*/

	var $prize = $('#prize-open-rate'),
	ratesCache = sessionStorage.rate;

	if ($prize.length) {
		function getPrize($prize, typeChange) {
			var total = parseFloat($prize.data('prize'));
			jQuery('#prize-sol').text(' - S/. ' + (total * typeChange).toFixed(2));
		}
		if (ratesCache != undefined) {
			console.info('cache');
			getPrize($prize, JSON.parse(ratesCache).rates.PEN);
		} else {
			jQuery.get('https://openexchangerates.org/api/latest.json?app_id=8ccdd6dcb0834e9e83c57fd938ef2194&prettyprint=0', function(rec) {
				sessionStorage.setItem('rate', JSON.stringify(rec));
				getPrize($prize, rec.rates.PEN);
				console.info('api');
			});
		}
	}

	// $('#cp3').colorpicker({
	// 	color: '#777',
	// 	format: 'rgba'
	// }).on('changeColor', function (e) {
	// 	$('.topbar').css('background-color', e.color.toHex());
	// });

	// $('#cp1').colorpicker({
	// 	color: '#f00',
	// 	format: 'rgba'
	// }).on('changeColor', function (e) {
	// 	$('.navbar-default .navbar-nav>li:not(:first)').css('background-color', e.color.toHex());
	// });
	// $('#cp2').colorpicker({
	// 	color: '#900',
	// 	format: 'rgba'
	// }).on('changeColor', function (e) {
	// 	var color = e.color.toHex();
	// 	$('.navbar-default .navbar-nav>li:first a').css('background-color', color);
	// 	$('.navbar-default').css('border-bottom-color', color);
	// });
});
