(function($){

	jQuery(document).ready(function(){
		// accordio plugin....

		$( function() {
    		$( "#accordion" ).accordion();
 		 } );
		// ... smooth scroll ...
		jQuery('a[href^="#"').click(function(e){

		var target = jQuery(this).attr('href');
		var strip = target.slice(1);
		var anchor = jQuery("[id='" + strip + "']");

		e.preventDefault();

		jQuery("html , body").animate({

			scrollTop : anchor.offset().top
		}, 1000);


		});
	});
})(jQuery);