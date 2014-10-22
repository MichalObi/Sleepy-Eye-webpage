/**
 *
 * Custom Plugins & Scripts
 * =======================================================================================================
 * 
 * @since 1.0.0
 *
 */
jQuery(document).ready(function($){

	"use strict";

	/**
	 *
	 * Set up all of the Tooltip scripts. See "js/jquery.poshytip.js" for more options.
	 * To alter the styling, see the class name "tip-subatomic" in "css/style.css"
	 * ==========================================================================================================
	 *
	 */
	$('.social-tooltip').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'center',
		alignY				: 'top',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1,
		offsetY				: 5,
		allowTipHover		: false
	
	});
	
	$('.tooltip-north').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'center',
		alignY				: 'top',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1
	
	});
	
	$('.tooltip-south').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'center',
		alignY				: 'bottom',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1
	
	});
	
	$('.tooltip-east').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'right',
		alignY				: 'center',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1,
		offsetX				: 10
	
	});
	
	$('.tooltip-west').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'left',
		alignY				: 'center',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1,
		offsetX				: 10
	
	});
	
	$('.tooltip-form-north').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'center',
		alignY				: 'top',
		showOn				: 'focus',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1,
	
	});
	
	$('.tooltip-form-east').poshytip({
	
		className			: 'tip-subatomic',
		alignTo				: 'target',
		alignX 				: 'right',
		alignY				: 'center',
		showOn				: 'focus',
		slideOffset			: 10,
		showAniDuration		: 500,
		hideAniDuration		: 500,
		showTimeout			: 1,
		offsetX				: 10
	
	});
	
	/**
	 *
	 * Initiate Superfish Dropdown Menu. See "js/jquery.superfish.js" for more options.
	 * ==========================================================================================================
	 *
	 */
	$('.sf-menu').superfish({
		
		animation	: { height : 'show' },
		speed		: 250,
		speedOut	: 500,
		delay		: 500,
		cssArrows	: false,
		pathClass	: 'current'
		
	});
	
	/**
	 *
	 * Initiate Responsive Menu. See "js/jquery.meanmenu.js" for more options.
	 * ==========================================================================================================
	 *
	 */
	$('#main-navigation').meanmenu({
	
		meanScreenWidth				: "766", 						// Set the screen width for when to call the responsive menu.
		meanRevealPosition			: "center",						// Left, right or center positions.
		meanRevealPositionDistance	: "0", 							// Tweak the position of the menu.
		meanMenuOpen				: "<span /><span /><span />", 	// Text/Markup you want when menu is closed.
		meanMenuClose				: "&#xf057;",					// Single character you want to represent the close menu button.
		meanMenuCloseSize			: "20px" 						// Set the font size of the close button
	
	});
	
	/**
	 *
	 * Accordions & Toggles
	 * ==========================================================================================================
	 *
	 */
	$('.accordion-content').not('.open').hide();
	$('.accordion h2 a').click(function(e){
	
		if( ! $(this).hasClass('accordion-collapse') ){
		
			$(this).parents().eq(2).find('.accordion-content').removeClass('open').slideUp( 400 , 'easeInCirc' );
			$(this).parents().eq(2).find('.accordion h2 a').removeClass('accordion-collapse');
		
			$(this).parent().next().addClass('open').slideDown( 400 , 'easeInCirc' );
			$(this).addClass('accordion-collapse');
			
		}
				
		e.preventDefault();
	
	});
	
	$('.toggle-content').not('.open').hide();
	$('.toggle h2 a').click(function(e){
	
		if( $(this).hasClass('toggle-collapse') ){
		
			$(this).parent().next().slideUp( 400 , 'easeInCirc' );
			$(this).removeClass('toggle-collapse');
		
		} else {
		
			$(this).parent().next().slideDown( 400 , 'easeInCirc' );
			$(this).addClass('toggle-collapse');
		
		}
		
		e.preventDefault();
	
	});
	
	/**
	 *
	 * Prevent normal anchor event on click for portfolio tabs.
	 * ==========================================================================================================
	 *
	 */
	$('.portfolio-controls ul li a').click(function(e){
	
		e.preventDefault();
		
	});
	
	/**
	 *
	 * The "Back-to-top" Button.
	 * ==========================================================================================================
	 *
	 */
	$('.btt , #back-to-top').click(function(e){
	
		$('body, html').animate( { scrollTop: 0 } , 1000 , 'easeInOutCirc' );
		e.preventDefault();
	
	});
	
	$('#back-to-top').hide();
	
	$(window).scroll(function(){
	
		if( $(this).scrollTop() > 250 ){
		
			$("#back-to-top").fadeIn();
		
		} else {
		
			$("#back-to-top").fadeOut();
		
		}
	
	});
	/**
	 *
	 * Close the Info Boxes
	 * ==========================================================================================================
	 *
	 */
	$('.info-box-close').click(function(e){
	
		$(this).parent().fadeOut( 'slow' );
		e.preventDefault();
	
	});
	
	/**
	 *
	 * Start the Progress Bar on the Home Slider
	 * ==========================================================================================================
	 *
	 */
	if( $.fn.cycle )
	{
	
		var progress 	= $('#home-slider-progress'),
			slideshow 	= $('#home-slider .cycle-slideshow');

		slideshow.on( 'cycle-initialized cycle-before', function( e, opts ){
			progress.stop(true).css( 'width' , 0 );
		});

		slideshow.on( 'cycle-initialized cycle-after', function( e, opts ){
			if ( ! slideshow.is('.cycle-paused') ){
				progress.animate({ width: '100%' }, opts.timeout, 'linear' );
			}
		});

		slideshow.on( 'cycle-paused', function( e, opts ){
			progress.stop(); 
		});

		slideshow.on( 'cycle-resumed', function( e, opts, timeoutRemaining ){
			progress.animate({ width: '100%' }, timeoutRemaining, 'linear' );
		});
		
	}
	
	/**
	 *
	 * Initiate Parallax Plugin.
	 * ==========================================================================================================
	 *
	 */
	if( $.fn.parallax )
	{
	
		$('.parallax-1').parallax( '50%' , 0.2 );
		$('.parallax-2').parallax( '50%' , 0.2 );
		$('.parallax-3').parallax( '50%' , 0.2 );
		$('.parallax-4').parallax( '50%' , 0.2 );
		
	}
	
	/**
	 *
	 * Initiate Easytabs plugin. See "js/jquery.easytabs.js" for more options.
	 * ==========================================================================================================
	 *
	 */
	if( $.fn.easytabs )
	{
	
		$('#home-big-tabs').easytabs({
		
			animate			: true,
			animationSpeed 	: 100,
			tabs			: "section > div > ul > li",
			updateHash		: false,
			defaultTab		: 'li#default-tab'
			
		});
		$('#horizontal-tabs-demo-1').easytabs({ animationSpeed : 50 });
		$('#horizontal-tabs-demo-2').easytabs({ animationSpeed : 50 });
		$('#horizontal-tabs-demo-3').easytabs({ animationSpeed : 50 });
		$('#vertical-tabs-demo-1').easytabs({ animationSpeed : 50 });
		$('#vertical-tabs-demo-2').easytabs({ animationSpeed : 50 });
		$('#services-tabs').easytabs({ animationSpeed : 50 });
		$('#big-tabs-demo').easytabs({
		
			animate			: true,
			animationSpeed 	: 100,
			tabs			: "section > div > ul > li",
			updateHash		: false,
			cycle			: 5000
			
		});
		
	}
	
	/**
	 *
	 * Initiate form validation plugin. See http://jqueryvalidation.org/validate for more options.
	 * ==========================================================================================================
	 *
	 */
	if( $.fn.validate )
	{
		
		$('#contact-form-outcome').hide();
		
		$('#contact-form').validate({
			errorPlacement: function(){
				return false;
			},
			
			rules :	{
				contact_name 	: { required : true },
				contact_email 	: {	required : true, email : true },
				contact_message : {	required : true }
			},
			
			submitHandler : function(form){
			
				var c_name    = $('input#contact_name').val();
				var c_email   = $('input#contact_email').val();
				var c_message = $('textarea#contact_message').val();
				
				$.ajax({
				
					type: 'post',
					url:  'php/send-email.php',
					data: 'contact_name=' + c_name + '&contact_email=' + c_email + '&contact_message=' + c_message,
					success: function(results) {
					
						$('#contact-form-outcome').html(results);
						$('#contact-form-outcome').slideDown( 1000 , 'easeInOutCirc' );
						
					}
				});
			}
		});
		
	}
	
});