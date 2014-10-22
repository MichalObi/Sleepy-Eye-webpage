<?php if (!isset($inside) || !$inside) exit; ?>


<section id="home-slider">
        
    <!-- START Slider Options -->
    <div class="cycle-slideshow cycle-slideshow-extra"
        data-cycle-fx="fade"
        data-cycle-timeout="5000"
        data-cycle-prev="#home-prev-slide"
        data-cycle-next="#home-next-slide"
        data-cycle-swipe="true"
        data-cycle-slides="> div.slide"     
        data-cycle-pager="#home-slider-pager"
        data-cycle-pager-template="<a href='#'>Strategia</a>"
        data-cycle-pause-on-hover="false"
        >
        <!-- END Slider Options -->


    
        <!-- START Slide -->
        <div class="slide slide_bg_1_1">
            <!--
            <img class="slide-image" src="images/assets/home-slider-background-01.jpg" alt="Slide Background 01" />
            -->

            <div class="grid-container">
                <div class="grid-90">
                    <img class="main-image" src="images/slider_1/slider_1a.png" alt="Slide Image 01" />
                </div>
            </div>
        </div>
        <!-- END Slide -->


        
        <!-- START Slide -->
        <div class="slide slide_bg_1_2">

            <!--
            <img class="slide-image" src="images/assets/home-slider-background-02.jpg" alt="Slide Background 02" />
            -->

            <div class="grid-container">
                <div class="grid-90">
                    <img class="main-image" src="images/slider_1/slider_1b.png" alt="Slide Image 02" />
                </div>
            </div>
        </div>
        <!-- END Slide -->


        
        <!-- START Slide -->
        <div class="slide slide_bg_1_3">
            
            <!--
            <img class="slide-image" src="images/assets/home-slider-background-03.jpg" alt="Slide Background 03" />
            -->

            <div class="grid-container">
                <div class="grid-90">
                    <img class="main-image" src="images/slider_1/slider_1c.png" alt="Slide Image 03" />
                </div>
            </div>
        </div>
        <!-- END Slide -->


        
        <!-- START Slide -->
        <div class="slide slide_bg_1_4">
            
        <!--
            <img class="slide-image" src="images/assets/home-slider-background-04.jpg" alt="Slide Background 04" />
        -->
            <div class="grid-container">
                <div class="grid-90">
                    <img class="main-image" src="images/slider_1/slider_1d.png" alt="Slide Image 04" />
                </div>
            </div>
        </div>
        <!-- END Slide -->
    
    </div>
    
    <!-- START Slider Navigation -->



    <!--
    <a href="#" id="home-prev-slide"><i class="fa fa-chevron-left"></i></a>
    <a href="#" id="home-next-slide"><i class="fa fa-chevron-right"></i></a>
    -->



    <!-- END Slider Navigation -->

<!--
    <ul class="top_slider_1_nav">
        <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 0);">Strategia</a></li>
        <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 1);">Kreacja</a></li>
        <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 2);">Wdrożenie</a></li>
        <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 3);">Wsparcie</a></li>
    </ul>
-->
    
   <!-- <div class="top_slider_1_nav">
        <a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 0);" class="top_slider_1_nav_1">Strategia</a>
        <a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 1);" class="top_slider_1_nav_2">Kreacja</a>
        <a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 2);" class="top_slider_1_nav_3">Wdrożenie</a>
        <a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra').cycle('goto', 3);" class="top_slider_1_nav_4">Wsparcie</a>
    </div>

    <!-- START Slider Progress Bar -->
    <div id="home-slider-progress"></div>
    <!-- END Slider Progress Bar -->

 
</section>