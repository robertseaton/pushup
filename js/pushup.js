jQuery(function( $ ){	
    // Mobile Nav
    $('#mobile-nav .icon-menu').click( function(){
	    
	    $('.genesis-nav-menu .menu-item').slideToggle();
	    
    } );
	
});

;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#popup_button').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#subscribe_popup').bPopup({
                    speed: 600,
                    transition: 'slideDown',
                    transitionClose: 'slideUp'
                });

            });

            $('.close').bind('click', function(j) {
                $('#subscribe_popup').bPopup().close();
            });
            
/*            $('.close').bind('click', bPopup().close();); */
        });

})(jQuery);


