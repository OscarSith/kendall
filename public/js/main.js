// var ua = navigator.userAgent, isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);
// if (!isMobileWebkit) {
// 	jQuery(window).stellar({
// 		responsive:true,
// 		scrollProperty: 'scroll',
// 		parallaxElements: false,
// 		horizontalScrolling: false,
// 		horizontalOffset: 0,
// 		verticalOffset: 0
// 	});
// }

var $video = jQuery(".tm_video_bg");
if ($video.length) {
	$video.mb_YTPlayer();
}

(function ($) {
  Drupal.behaviors.superfish = {
    attach: function (context, settings) {
      // Take a look at each list to apply Superfish to.
      $.each(settings.superfish || {}, function(index, options) {
        // Process all Superfish lists.
        $('#superfish-' + options.id, context).once('superfish', function() {
          var list = $(this);

          // Check if we are to apply the Supersubs plug-in to it.
          // if (options.plugins || false) {
          //   if (options.plugins.supersubs || false) {
          //     list.supersubs(options.plugins.supersubs);
          //   }
          // }

          // Apply Superfish to the list.
          list.superfish(options.sf);

          // Check if we are to apply any other plug-in to it.
          if (options.plugins || false) {
            // if (options.plugins.touchscreen || false) {
            //   list.sftouchscreen(options.plugins.touchscreen);
            // }
            if (options.plugins.smallscreen || false) {
              list.sfsmallscreen(options.plugins.smallscreen);
            }
            if (options.plugins.supposition || false) {
              list.supposition();
            }
            if (options.plugins.bgiframe || false) {
              list.find('ul').bgIframe({opacity:false});
            }
          }
        });
      });
    }
  };
})(jQuery);

// ui top
/*(function($) {
	$.fn.UItoTop = function(options) {
		var defaults = {
			text: '',
			min: 500,
			scrollSpeed: 800,
			containerID: 'toTop',
			containerHoverID: 'toTopHover',
			easingType: 'linear',
			min_width: parseInt($('body').css("min-width"),10),
			main_width: parseInt($('body').css("min-width"),10)/2
		};

		var settings = $.extend(defaults, options);
		var containerIDhash = '#' + settings.containerID;
		var containerHoverIDHash = '#' + settings.containerHoverID;

		$('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');

		var button_width = parseInt($(containerIDhash).css("width")) + 90
		var button_width_1 = parseInt($(containerIDhash).css("width")) + 20
		var max_width = defaults.min_width + button_width;
		var margin_right_1 = -(defaults.main_width + button_width_1)
		var margin_right_2 = -(defaults.main_width - 20)

		function top() {
			if(($(window).width() <= max_width) && ($(window).width() >= defaults.min_width)) {
				$(containerIDhash).stop().animate({marginRight: margin_right_2, right: '50%'});
			} else {
				if($(window).width() <= defaults.min_width) {
					$(containerIDhash).stop().css({marginRight: 0, right: 10})
				} else {
					$(containerIDhash).stop().animate({marginRight: margin_right_1, right: '50%'})
				}
			}
		}
		top();
		$(containerIDhash).hide().click(function() {
			$('html, body').stop().animate({scrollTop: 0}, settings.scrollSpeed, settings.easingType);
			$('#' + settings.containerHoverID, this).stop().animate({'opacity': 0}, settings.inDelay, settings.easingType);
			return false;
		})

		.prepend('<span id="' + settings.containerHoverID + '"></span>')
		.hover(function() {
				$(containerHoverIDHash, this).stop().animate({
					'opacity': 1
				}, 600, 'linear');
			}, function() {
				$(containerHoverIDHash, this).stop().animate({
					'opacity': 0
				}, 700, 'linear');
			});

		$(window).scroll(function() {
			var sd = $(window).scrollTop();
			if (typeof document.body.style.maxHeight === "undefined") {
				$(containerIDhash).css({
					'position': 'absolute',
					'top': $(window).scrollTop() + $(window).height() - 50
				});
			}
			if (sd > settings.min) {
				$(containerIDhash).stop(true, true).fadeIn(600);
			} else {
				$(containerIDhash).fadeOut(800);
			}
		});
		$(window).resize(function() {
			top()
		});
	};
})(jQuery);
*/

//  Flexy Load
(function($) {
  // Behavior to load FlexSlider
  Drupal.behaviors.flexslider = {
    attach: function(context, settings) {
      var sliders = [];
      if ($.type(settings.flexslider) !== 'undefined' && $.type(settings.flexslider.instances) !== 'undefined') {

        for (id in settings.flexslider.instances) {

          if (settings.flexslider.optionsets[settings.flexslider.instances[id]] !== undefined) {
            if (settings.flexslider.optionsets[settings.flexslider.instances[id]].asNavFor !== '') {
              // We have to initialize all the sliders which are "asNavFor" first.
              _flexslider_init(id, settings.flexslider.optionsets[settings.flexslider.instances[id]], context);
            } else {
              // Everyone else is second
              sliders[id] = settings.flexslider.optionsets[settings.flexslider.instances[id]];
            }
          }
        }
      }
      // Slider set
      for (id in sliders) {
        _flexslider_init(id, settings.flexslider.optionsets[settings.flexslider.instances[id]], context);
      }
    }
  };

  /**
   * Initialize the flexslider instance
   */

  function _flexslider_init(id, optionset, context) {
    $('#' + id, context).once('flexslider', function() {
      // Remove width/height attributes
      // @todo load the css path from the settings
      $(this).find('ul.slides > li > *').removeAttr('width').removeAttr('height');

      if (optionset) {
        // Add events that developers can use to interact.
        $(this).flexslider($.extend(optionset, {
          start: function(slider) {
            slider.trigger('start');
          },
          before: function(slider) {
            slider.trigger('before');
          },
          after: function(slider) {
            slider.trigger('after');
          },
          end: function(slider) {
            slider.trigger('end');
          },
          added: function(slider) {
            slider.trigger('added');
          },
          removed: function(slider) {
            slider.trigger('removed');
          }
        }));
      } else {
        $(this).flexslider();
      }
    });
  }

}(jQuery));

// Progressbar
jQuery('.progressbar').each(function() {
	percent = jQuery(this).data('percent');

	jQuery(this).find('.progressbar-background').stop().animate({width: percent + '%'}, 600);
});
var $piegraph = jQuery('.piegraph');
if ($piegraph.length) {
	$piegraph.easyPieChart({
		easing: 'easeOutBounce',
		animate: 20000,
		lineCap: 'square',
		barColor: false,
		scaleColor: false,
		onStep: function(from, to, percent) {
			this.el.children[0].innerHTML = Math.round(percent);
		}
	});
}