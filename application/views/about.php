
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> About Us </h2>
                <p class="description light"> Holistic and sustainable approach with innovation in every aspect of product design and development </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="index"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    
                  <?php 
                  //print_r($sectionContent);
                  
                  foreach ($sectionContent as $content){ ?>  
                    <span class="child"><?php echo $content->title."/"; ?>
                    
                    
                    </span>
                    <?php 
                    
                    } ?>
                </div>
            </div>

            <div class="container" id="section">

                <div class="row about-sidebar">

                    <div class="col-md-9 about-content">
<?php 
$x=0;

foreach ($sectionContent as $content){
$x++;
if($x==1){
    
?>
                        <section class="about-company">

                            <div class="com">
                                <h2 class="company-title color-title"><?php echo $content->title; ?></h2>
                                <h4 class="company-subtitle subtitle"> </h4>
                                <p style="text-align:justify;"><?php echo $content->text; ?></p>

                            </div>
                        </section>
<?php if($content->subTitle != '') {?>
                        <section class="about-cta">

                            <div class="cta">
                                <h2><?php echo $content->subTitle; ?></h2>

                            </div>
                        </section>
<?php }

}else{
?>
                       
                   
          
                       
                      <section class="about-culture">
                            <div class="row culture">
                                <div class="col-sm-6 cul">
                                    <h2 class="culture-title"> <?php echo $content->title; ?>
                                    </h2>
                                    <h4 class="culture-subtitle">  </h4>
                                    <p style="text-align:justify;"><?php echo $content->text; ?>
</p>
                                </div>
                                <div class="col-sm-6 culture-video">
                                    <a href="#" class="hover-effect"> <img src="<?php //echo base_url()?>images/office-culture.jpg" alt="employee" /> </a>
                                </div>

                            </div>

                        </section>
                      
                        
              <?php  } }
               ?>         
                        

                        <section class="about-stats">
                            <div class="row stats stats-2">

                                <div class="col-xs-6">
                                    <img src="images/globe.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">5</h4>
                                        <p>Offices across India</p>
                                    </div>
                                </div>

                                <div class="col-xs-6">

                                    <img src="images/friends.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">100</h4>
                                        <p>Satisfied Employees</p>
                                    </div>
                                </div>

                                <div class="col-xs-6">

                                    <img src="images/fire.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">2</h4>
                                        <p>Factory &amp; Operations</p>
                                    </div>
                                </div>

                                <div class="col-xs-6">

                                    <img src="images/badge.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">20</h4>
                                        <p>Awards &amp; Recognitions</p>
                                    </div>
                                </div>

                            </div>

                        </section>


                        

                    </div>

                    <div class="col-md-3 sidebar left">

                        <div class="sidebar-blog-categories">
                            <ul>
                                <li <?php if ($thissection=="about") echo " id=\"currentpage\""; ?>> <a href="about?section=about&section1=Culture"> The Company </a> </li>
                                <li <?php if ($thissection=="mission") echo " id=\"currentpage\""; ?> > <a href="about?section=mission&section1=climatrol"> Our Vision &amp; Mission </a> </li>
                                <li <?php if ($thissection=="innovation") echo " id=\"currentpage\""; ?> > <a href="about?section=innovation&section1=climatrol"> Innovation </a> </li>
                                <li <?php if ($thissection=="approach") echo " id=\"currentpage\""; ?> > <a href="about?section=approach&section1=climatrol"> Our Approach </a> </li>
                                <li <?php if ($thissection=="Quality") echo " id=\"currentpage\""; ?> > <a href="about?section=Quality&section1=climatrol"> Our Quality </a> </li>
                            </ul>
                        </div>

                        <div class="sidebar-download">
                            <div class="download-file color-bg">
                                <a href="<?php echo base_url() ?>docs/BOOK 301021.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Download PDF <span>1.5 MB</span>
                                </a>
                            </div>

                        </div>

                        <div class="sidebar-fact">

                            <h3 class="about-quick-fact">Quick Connect</h3>
                            <p>Reach out to us for more details about our product and services.</p>
                            <a  data-toggle="modal" data-target="#enquiryPop" class="btn btn-primary about-quick-fact-button" role="button">Enquire Now</a>

                        </div>

                    </div>

                </div>

            </div>
        </main>
        <!-- Main Content Section -->
