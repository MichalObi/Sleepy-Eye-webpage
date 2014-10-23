<?php $inside = true; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php @include("head.php"); ?>	
</head>

<body>
	<header id="page-header">

	<!--<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">	
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
              <li><a href="#" id="gora">Powrót na Górę</a></li>
            </ul>
          </div>
        </div>
      </div>-->

          <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-md-3 col-md-offset-8 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    	<div><a href="#" id="gora">Powrót na Górę</a></div>
                        <ul class="nav navbar-nav navbar-right">
                        	<li><a href="#" id="kreacja">Oferta</a></li>
				            <li><a href="#" id="portfolio">Portfolio</a></li>
				            <li><a href="#" id="strategia">O nas</a></li>
				            <li><a href="#" id="kontakt">Kontakt</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
        </nav>

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
	
		<section>
			<?php @include("scripts.php"); ?>
		</section>
	
</body>
</html>