 function myScrollTo(from, to)
       {
               $(from).click(function (){
               $('html, body').animate({
                   scrollTop: $(to).offset().top
                    }, { duration: 800, easing: 'easeInQuad' });
					event.preventDefault();
       });
       }
       
   $(document).ready(function (){
               myScrollTo($("#strategia"), $("#strategia_offer"));
			   myScrollTo($("#kreacja"), $("#kreacja_offer"));
			   myScrollTo($("#portfolio"), $("#portfolio_slider"));
			   myScrollTo($("#kontakt"), $("#bottom"));
			   myScrollTo($("#gora"), $("#page-header"));
   });

	    //"Go UP! text" show when you scroll down
	        $(window).scroll(function() {
	        if ($(this).scrollTop()) {
	        $('#gora').fadeIn();
	        } else {
	            $('#gora').fadeOut();
	        }
	        });

    		$(function() {
		    	$("body").on("input propertychange", ".floating-label-form-group", function(e) {
		        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
		    	}).on("focus", ".floating-label-form-group", function() {
		        $(this).addClass("floating-label-form-group-with-focus");
		    	}).on("blur", ".floating-label-form-group", function() {
		        $(this).removeClass("floating-label-form-group-with-focus");
    });
});