/*$(document).load(function(){
	function Utils() {

	}

	Utils.prototype = {
	    constructor: Utils,
	    isElementInView: function (element, fullyInView) {
	        var pageTop = $(window).scrollTop();
	        var pageBottom = pageTop + $(window).height();
	        var elementTop = $(element).offset().top;
	        var elementBottom = elementTop + $(element).height();

	        if (fullyInView === true) {
	            return ((pageTop < elementTop) && (pageBottom > elementBottom));
	        } else {
	            return ((elementBottom <= pageBottom) && (elementTop >= pageTop));
	        }
	    }
	};

	var Utils = new Utils();
	var isElementInView = Utils.isElementInView($('#about'), false);

	if (isElementInView) {
	    console.log('in view');
	} else {
	    console.log('out of view');
	}
})*/
$(document).ready(function(){
	$.fn.is_on_screen = function(){
	    var win = $(window);
	    var viewport = {
	        top : win.scrollTop(),
	        left : win.scrollLeft()
	    };
	    viewport.right = viewport.left + win.width();
	    viewport.bottom = viewport.top + win.height();
	 
	    var bounds = this.offset();
	    bounds.right = bounds.left + this.outerWidth();
	    bounds.bottom = bounds.top + this.outerHeight();
	 
	    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
	};
	 
	$(window).scroll(function(){ // bind window scroll event
		if( $('#home').length > 0 ) { // if target element exists in DOM
			if( $('#home').is_on_screen() ) { // if target element is visible on screen after DOM loaded
				id = $("#navigation_ul .active").attr("id");
				if( id != undefined)
				{	
					$("#stuck_container #"+id).each(function(){
						$(this).removeClass("active")
					})
				}
				$("#stuck_container #home_href").each(function(){
					$(this).addClass("active")
				})
				//$("#home_href").removeClass("active")
			} else {
				$("#stuck_container #home_href").each(function(){
					$(this).removeClass("active")
				})
			}
		}
		if( $('#about').length > 0 ) { // if target element exists in DOM
			if( $('#about').is_on_screen() ) { // if target element is visible on screen after DOM loaded
				id = $("#navigation_ul .active").attr("id");
				if( id != undefined)
				{	
					$("#stuck_container #"+id).each(function(){
						$(this).removeClass("active")
					})
				}
				$("#stuck_container #about_href").each(function(){
					$(this).addClass("active")
				})
				//$("#home_href").removeClass("active")
			} else {
				$("#stuck_container #about_href").each(function(){
					$(this).removeClass("active")
				})
			}
		}
		if( $('#portfolio').length > 0 ) { // if target element exists in DOM
			if( $('#portfolio').is_on_screen() ) { // if target element is visible on screen after DOM loaded
				id = $("#navigation_ul .active").attr("id");
				if( id != undefined)
				{	
					$("#stuck_container #"+id).each(function(){
						$(this).removeClass("active")
					})
				}
				$("#stuck_container #portfolio_href").each(function(){
					$(this).addClass("active")
				})
				//$("#home_href").removeClass("active")
			} else {
				$("#stuck_container #portfolio_href").each(function(){
					$(this).removeClass("active")
				})
			}
		}
		if( $('#clients').length > 0 ) { // if target element exists in DOM
			if( $('#clients').is_on_screen() ) { // if target element is visible on screen after DOM loaded
				id = $("#navigation_ul .active").attr("id");
				if( id != undefined)
				{	
					$("#stuck_container #"+id).each(function(){
						$(this).removeClass("active")
					})
				}
				$("#stuck_container #clients_href").each(function(){
					$(this).addClass("active")
				})
				//$("#home_href").removeClass("active")
			} else {
				$("#stuck_container #clients_href").each(function(){
					$(this).removeClass("active")
				})
			}
		}
		if( $('#contact').length > 0 ) { // if target element exists in DOM
			if( $('#contact').is_on_screen() ) { // if target element is visible on screen after DOM loaded
				id = $("#navigation_ul .active").attr("id");
				if( id != undefined)
				{	
					$("#stuck_container #"+id).each(function(){
						$(this).removeClass("active")
					})
				}
				$("#stuck_container #contact_href").each(function(){
					$(this).addClass("active")
				})
				//$("#home_href").removeClass("active")
			} else {
				$("#stuck_container #contact_href").each(function(){
					$(this).removeClass("active")
				})
			}
		}
	});
})