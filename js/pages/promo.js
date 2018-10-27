 ! function ($) {
    
 	"use strict";	

 	var nav = $('#mainNav');

    nav.addClass('affix').removeClass('affix-top');
    
	$(window).on("scroll", function() {
	    var scrollPos = $(window).scrollTop();
	    if (scrollPos <= 0) {
	        nav.addClass('affix').removeClass('affix-top');
	    }
	});

    // init
    


}(jQuery);