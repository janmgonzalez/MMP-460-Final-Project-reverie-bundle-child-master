jQuery(function($){
//$(document).ready(function(){
    $.fn.parallax = function(options){
        var $$ = $(this);
        offset = $$.offset();
        var defaults = {
            "start": 0,
            "stop": offset.top + $$.height(),
            "coeff": 0.80,
            "direction" : "y"
        };
        var opts = $.extend(defaults, options);
        return this.each(function(){
            $(window).bind('scroll', function() {
                windowTop = $(window).scrollTop();
                if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                    newCoord = windowTop * opts.coeff;
                    $$.css({
                        "background-position": "0 "+ newCoord + "px"
                    });
                }
            });
        });
    };
   
//})(jQuery);


// call the plugin


$('#paraback').parallax({ "coeff":-0.65 });
/*
$('#face').parallax({ "coeff":-0.65 });
$('#face .gFace').parallax({ "coeff":-1.00 }); 
*/  

}); 