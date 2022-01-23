<?php $productName = $productDetails['product_name']; ?>
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"><?php echo $productDetails['product_name']; ?> </h2>
                <!--<p class="description light"> Holisticly brand sustainable solutions rather than clicks-and-mortar applications.-->
                <!--    <br> Phosfluorescently whiteboard fully tested initiatives. </p>-->
            </div>
            <!-- Page Title -->

            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="index"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    
                    <span class="child"> <?php echo $productDetails['product_name']; ?> </span>
                </div>
            </div>

            <div class="container">
                <div class="row services-sidebar">

                    <div class="col-md-9 services-content">
                        <div class="spacer-80"></div>
                        <section class="services-checmicals">
                            <div class="chemicals">
                                <a href="#" class="hover-effect">
                                    <img src="https://projects.letsgolive.in/climatrol/images/products/<?php echo $productDetails['product_img']; ?>" alt="" />
                                </a>
                                <div class="spacer-50"></div>
                                <h2 class="chemicals-title color-title"><?php echo $productDetails['product_name']; ?></h2>
                                <h4 class="chemicals-subtitle subtitle"><?php echo $productDetails['short_dis']; ?></h4>
                                <p style="text-align:justify"><?php echo $productDetails['product_dis']; ?>
                                </p>
                            </div>
                            
                           
                            
                            
                        </section>

                        
                    </div>


                    <div class="col-md-3 sidebar left">

                        <div class="sidebar-blog-categories">
                            <ul>
                                 <li <?php if ($thisproduct=="Water Cooler") echo " id=\"currentpage\""; ?>> <a href="product_details?product=Water Cooler"> Water Cooler </a> </li>
                                <li <?php if ($thisproduct=="Purifier RO and UV") echo " id=\"currentpage\""; ?> > <a href="product_details?product=Purifier RO and UV"> Water Cooler With UV & RO </a> </li>
                                <li <?php if ($thisproduct=="Cold Rooms") echo " id=\"currentpage\""; ?> > <a href="product_details?product=Cold Rooms"> Cold Rooms</a> </li>
                               
                                <li <?php if ($thisproduct=="Deep Freezers") echo " id=\"currentpage\""; ?> > <a href="product_details?product=Deep Freezers"> Deep Freezer </a> </li>
                                 
                                <li <?php if ($thisproduct=="Mortuary") echo " id=\"currentpage\""; ?> > <a href="product_details?product=Mortuary"> Mortuary Cabinet</a> </li>
                                 <li <?php if ($thisproduct=="Boxcold") echo " id=\"currentpage\""; ?> > <a href="product_details?product=Boxcold"> Boxcold (Italy)</a> </li>
                               
                            </ul>
                        </div>
     <div class="sidebar-download">
                            <div class="download-file color-bg">
                                <a href="<?php echo base_url() ?>download/BOOK301021.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Download PDF <span></span>
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
                
               <div class="col-md-12">
                    <a class="">
                                    <img src="https://projects.letsgolive.in/climatrol/images/products/<?php echo $productDetails['extraImg']; ?>" alt="" />
                                </a>
               </div> 
                
                
                
            </div>

        </main>
        <!-- Main Content Section -->

    