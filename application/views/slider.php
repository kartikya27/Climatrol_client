
        <!-- Main Content Section -->
        <main class="main">

            <section class="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                     
                       
                       
                     <?php foreach($slider as $slide) {?>         
                         
                        
                        <li class="has-overlay">
                            <img src="<?php echo base_url(); ?>images/img/<?php echo $slide->img; ?>" alt="Slider 2" />
                            <div class="slider-content ">
                                <div class="container">
  <h2>
<?php echo $slide->title; ?><br>

<span style="color:#fff;font-size:30px"> <?php echo $slide->subTitle; ?></span>

</h2>
                                   
                                    <a href="<?php echo $slide->btnLink; ?>" class="btn primary-btn"> <?php echo $slide->btnText; ?> <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </li>
                        
           <?php } ?>             
                      
                        
                        
                        
                        
                    </ul>
                </div>
            </section>