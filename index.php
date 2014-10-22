<?php $inside = true; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php @include("head.php"); ?>	
</head>

<body>
	<header id="page-header">

	<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">	
        <div class="container-fluid">
        	<div id="social_menu">
                <ul class="list-inline">         
	                    <li>
	                        <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-pinterest"></i></a>
	                    </li>


	                    <li>
	                         <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
	                    </li>



	                    <li>
	                         <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
	                    </li>
                </ul>
            </div>
          <div class="navbar-header">
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#" id="kreacja">Oferta</a></li>
              <li><a href="#" id="portfolio">Portfolio</a></li>
              <li><a href="#" id="strategia">O nas</a></li>
              <li><a href="#" id="kontakt">Kontakt</a></li>
            </ul>
            <a href="#" id="gora">Powrót na Górę</a>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	</header>


	
	
	<!-- START Main Content -->
	<div id="primary" role="main">

		<section id="logo_offer">
			<?php @include("logo.php"); ?>
		</section>
			
		<section id="kreacja_offer">
			<?php @include("offer_2.php"); ?>
		</section>

		<section id="portfolio_slider">
			<?php @include("top_slider2.php"); ?>
		</section>

		<section id="strategia_offer">
			<?php @include("offer_1.php"); ?>
		</section>

		<section id="bottom">
			<?php @include("kontakt.php"); ?>
		</section
		
		<!-- START Grey Section -->
		
		<!-- END Grey Section -->
		
		
	</div>
	<!-- END Main Content -->

	<!-- END Bottom Footer -->
	
	
	<!-- Javascript Files -->
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.formalize.js"></script>
	<script src="js/jquery.superfish.js"></script>
	<script src="js/jquery.hoverIntent.js"></script>
	<script src="js/jquery.meanmenu.js"></script>
	<script src="js/jquery.poshytip.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/jquery.cycle2.min.js"></script>
	<script src="js/jquery.cycle2.swipe.min.js"></script>
	<script src="js/jquery.parallax.js"></script>
	<script src="js/jquery.slimbox2.min.js"></script>
	<script src="js/jquery.custom.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_fixed.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

	<!--<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/modernizr-latest.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	-->

    		<script type="text/javascript">
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
       </script>

    <script type="text/javascript">
	    //"Go UP! text" show when you scroll down
	        $(window).scroll(function() {
	        if ($(this).scrollTop()) {
	        $('#gora').fadeIn();
	        } else {
	            $('#gora').fadeOut();
	        }
	        });
    </script>

    <script type="text/javascript">
    		$(function() {
		    	$("body").on("input propertychange", ".floating-label-form-group", function(e) {
		        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
		    	}).on("focus", ".floating-label-form-group", function() {
		        $(this).addClass("floating-label-form-group-with-focus");
		    	}).on("blur", ".floating-label-form-group", function() {
		        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

    </script>

</body>
</html>