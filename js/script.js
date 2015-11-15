function include(url){
  document.write('<script src="'+url+'"></script>');
  return false ;
}

/* cookie.JS
========================================================*/
include('/wpcrucible/wp-content/themes/crucible/js/jquery.cookie.js');


/* DEVICE.JS*/
include('/wpcrucible/wp-content/themes/crucible/js/device.min.js');

/* Stick up menu
========================================================*/
include('/wpcrucible/wp-content/themes/crucible/js/tmstickup.js');
$(window).load(function() { 
  if ($('html').hasClass('desktop')) {
      $('#stuck_container').TMStickUp({
      })
  }  
});

/* Parallax
========================================================*/
(function ($) {
var o = $('.parallax');
if (o.length > 0 && $('html').hasClass('desktop')) {
include('/wpcrucible/wp-content/themes/crucible/js/jquery.rd-parallax.js');
}
})(jQuery);

/* Easing library
========================================================*/
include('/wpcrucible/wp-content/themes/crucible/js/jquery.easing.1.3.js');


/* ToTop
========================================================*/
include('/wpcrucible/wp-content/themes/crucible/js/jquery.ui.totop.js');
$(function () {   
  $().UItoTop({ easingType: 'easeOutQuart' });
});

/* DEVICE.JS AND SMOOTH SCROLLIG
========================================================*/
include('/wpcrucible/wp-content/themes/crucible/js/jquery.mousewheel.min.js');
include('/wpcrucible/wp-content/themes/crucible/js/jquery.simplr.smoothscroll.min.js');

$(function () { 
  if ($('html').hasClass('desktop')) {
      $.srSmoothscroll({
        step:150,
        speed:800
      });
  }   
});

/* Google map
========================================================*/
(function ($) {
    var o = document.getElementById("google-map");
    if (o) {
        include('http://maps.google.com/maps/api/js?sensor=false');
        include('/wpcrucible/wp-content/themes/crucible/js/jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0){
                o.googleMap({
                    styles: []
                });
            }
        });
    }
})(jQuery);

/* Tabs
==========================================================*/
(function ($) {
    var o = $('#demoTab');
    if (o.length > 0) {
        include('/wpcrucible/wp-content/themes/crucible/js/jquery.responsive.tabs.js');
        $("#demoTab").easyResponsiveTabs();
    }
})(jQuery);



/* Copyright Year
========================================================*/
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
});


/* Superfish menu
========================================================*/
include('/wpcrucible/wp-content/themes/crucible/js/superfish.js');
include('/wpcrucible/wp-content/themes/crucible/js/jquery.mobilemenu.js');


/*Subscribe Form
========================================================*/
(function ($) {
    var o = $('#subscribe-form');
    if (o.length > 0) {
        include('/wpcrucible/wp-content/themes/crucible/js/sform.js');
    }
})(jQuery);

/* Contact Form
 ========================================================*/

(function ($) {
    var o = $('#contact-form');
    if (o.length > 0) {
        include('/wpcrucible/wp-content/themes/crucible/js/modal.js');
        include('/wpcrucible/wp-content/themes/crucible/js/tmform.js');
    }
})(jQuery);

/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')