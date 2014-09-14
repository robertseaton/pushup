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
                    easing: 'easeOutBack', //uses jQuery easing plugin
                    speed: 450,
                    transition: 'slideDown',
                    transitionClose: 'slideUp'
                });

            });
            
            $('.close').bPopup().close();
        });

})(jQuery);


