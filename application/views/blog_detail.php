

        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <?php foreach($blogdetails as $blog){ ?>
                <h2 class="title">  <?php echo $blog->title ?> </h2>
                <?php  } ?>
             </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="index"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> <a href=""> NEWS AND MEDIA </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Blog </span>
                </div>
            </div>

            <div class="container">
                <div class="row">
                   
                  <?php foreach($blogdetails as $blog){  ?>
                    <div class="col-md-9 blog-info">
                        <section class="blog-single">
                            <div class="blog-slide">
                                <ul class="slides">
                                    <li>
                                        <img src="images/<?php echo $blog->img ?>" alt="blog-image 1" />
                                    </li>
                                  
                                </ul>
                            </div>

                            <div class="single-post">
                                <h4 class="services-title-one subtitle">
                               <?php echo $blog->title ?>
                                </h4>
                                <p>
                                     <?php echo $blog->blogContent ?>
                                </div>

                           


                        </section>
                    </div>

                  <?php }?>

                </div>
            </div>

        </main>
        <!-- Main Content Section -->

