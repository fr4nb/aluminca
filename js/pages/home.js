! function ($) {
    
    "use strict";

    var slide = $("[data-slides]"),
        i = 1,
        slides = parseInt(slide.data("slides")),
        //len = slides.length,
        n = function () {
            if (i > slides) {
                i = 1;
            }
            slide
            	.css("background-image", 'url("/img/banner' + i +  '.jpg")')
            	// .css("background-position" , "0 0")
            	.show(0, function () {
                	setTimeout(n, 5e3);
                	// $(this).css("background-position" , "-2000px 0")

            	});
            i++
        };

    $('#pubishingPopup').modal({
        show:true
    });
    


    // init
    n();


}(jQuery);