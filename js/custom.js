(function($){

	jQuery(document).ready(function(){
		// accordio plugin....

		$( function() {
    		$( "#accordion" ).accordion();
 		 } );


	


		setTimeout(function(){
			jQuery(".overlay").show();
		},3000);
	

		jQuery(".subscrive .exit").click(function(){
			jQuery('.overlay').hide();
			return false;
		});

		// .... smooth scroller ....

	jQuery('a[href^="#"').click(function(e){

		var target = jQuery(this).attr('href');
		var strip = target.slice(1);
		var anchor = jQuery("[id='" + strip + "']");

		e.preventDefault();

		jQuery("html , body").animate({

			scrollTop : anchor.offset().top
		}, 1000);


	});
	// ... slider ....
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 5000); // Change image every 2 seconds
	}

		
		
	});
})(jQuery);