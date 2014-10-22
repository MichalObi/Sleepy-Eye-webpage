<?php if (!isset($inside) || !$inside) exit; ?>

<!--
<ul>
    <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra2').cycle('goto', 0);">Dowolna treść pokazuje slide 1</a></li>
    <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra2').cycle('goto', 1);">Dowolna treść pokazuje slide 2</a></li>
    <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra2').cycle('goto', 2);">Dowolna treść pokazuje slide 3</a></li>
    <li><a href="javascript:void(0);" onclick="$('.cycle-slideshow-extra2').cycle('goto', 3);">Dowolna treść pokazuje slide 4</a></li>
</ul>
-->

<section id="home-slider2">


    <h2>Zrealizowane projekty</h2>

        

    <!-- START Slider Options -->
    <div class="cycle-slideshow cycle-slideshow-extra2"
        data-cycle-fx="fade"
        data-cycle-timeout="4000"
        data-cycle-prev="#home-prev-slide"
        data-cycle-next="#home-next-slide"
        data-cycle-swipe="true"
        data-cycle-slides="> div.slide"     
        data-cycle-pause-on-hover="true"
        >
        <!-- END Slider Options -->




    
        <!-- START Slide -->
        <div class="slide">
            <div class="slide-image-1 slide-image">
                    <div class="grid-100">
                        <img class="main-image" src="images/portfolio/praca_1.png" alt="praca_1" />
                    </div>
            </div>
        </div>
        <!-- END Slide -->


            
        <!-- START Slide -->
        <div class="slide">
            <div class="slide-image-2 slide-image">
                    <div class="grid-100">
                        <img class="main-image" src="images/portfolio/praca_2.png" alt="praca_2" />
                    </div>
            </div>
        </div>
        <!-- END Slide -->


            
        <!-- START Slide -->
        <div class="slide">
            <div class="slide-image-3 slide-image">
                    <div class="grid-100">
                        <img class="main-image" src="images/portfolio/praca_3.png" alt="praca_3" />
                    </div>
            </div>
        </div>
        <!-- END Slide -->


          

    
    </div>
    
    <!-- START Slider Navigation -->



    <a href="#" id="home-prev-slide"><i class="fa fa-chevron-left"></i></a>
    <a href="#" id="home-next-slide"><i class="fa fa-chevron-right"></i></a>




    <!-- END Slider Navigation -->

</section>