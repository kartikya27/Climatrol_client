<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Climatrol Corporation">
    <meta name="author" content="Climatrol Corporation">

    <!-- Page Title -->
    <title>Climatrol</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://climatrol.in/img/logo.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
  <script src="https://use.fontawesome.com/64620dc49b.js"></script>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Flex Slider -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
    <!-- Latest compiled and minified JavaScript -->

</head>


<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Section -->
        <header>
            <div class="header-area">

                <!-- Top Contact Info -->
                <div class="row logo-top-info">
                    <div class="container">
                        <div class="col-md-3 logo">
                            <!-- Main Logo -->
                            <a href="index"><img width="50%" src="<?php echo base_url() ?>/images/img/climatrol_logo.svg" alt="Climatrol Logo" /></a>
                            <!-- Responsive Toggle Menu -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only"> Main Menu </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-9 top-info-social" style="margin:auto;padding:20px 0px;">
                            <div class="pull-right">
                                <div class="top-info">
                                    <div class="call">
                                        <h3> CALL US </h3>
                                        <p>1800 123 6535</p>
                                    </div>
                                    <div class="email">
                                        <h3> EMAIL US </h3>
                                        <p>info@climatrol.in </p>
                                    </div>
                                    <div class="market">
                                        <h3> ADDRESS </h3>
                                        <p> 108A Madangir, New Delhi-110062</p>
                                    </div>
                                </div>
                                <div class="social">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<style>
/*    a {*/
/*  pointer-events: none;*/
/*  cursor: default;*/
/*}*/
.sticky {
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
}

</style>
        


<style>
   .active {
    color:#00a3e4;
 
}


 #currentpage >a {

color:#00a3e4;
}

</style>
<?php //echo $thisPage;?>


                <!-- Main Navigation Section -->
                <nav id="navbar" class="collapse navbar-collapse main-menu sticky-top">
                    <div class="container" id="nav_bar">
                        <ul class="main-menu" style="margin-bottom:0">
                            <li <?php if ($thisPage=="index") echo " id=\"currentpage\""; ?>> <a href="index"> Home </a></li>
                            <li <?php if ($thisPage=="about") echo " id=\"currentpage\""; ?>> <a href="about?section=about&section1=Culture" > About Us
                                  </a>
                                <!--<ul>
                                    <li> <a href="about"> The Company </a> </li>
                                    <li> <a href="mission"> Vision &amp; Mission </a> </li>
                                    <li> <a href="approach"> Our Approach </a> </li>
                                    <li> <a href="leaders"> Our Team </a> </li>
                                </ul>-->
                            </li>
                            <li <?php if ($thisPage=="products") echo " id=\"currentpage\""; ?> class="dropdown">
                                <a href="#" class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li> <a href="product_details?product=Water Cooler"> Water Cooler </a> </li>
                                <li> <a href="product_details?product=Purifier RO and UV"> Water Cooler With UV & RO </a> </li>
                                <li> <a href="product_details?product=Cold Rooms"> Cold Rooms</a> </li>
                               
                                <li> <a href="product_details?product=Deep Freezers"> Deep Freezer </a> </li>
                                 
                                <li> <a href="product_details?product=Mortuary"> Mortuary Cabinet</a> </li>
                                 <li> <a href="product_details?product=Boxcold"> Boxcold (Italy) </a> </li>
                                    
                                </ul>
                            </li>
                            <li <?php if ($thisPage=="service") echo " id=\"currentpage\""; ?>><a href="service"> Service Infrastructure </a> </li>
                            <!--<li><a href="blog">Clients</a> </li>-->
                            <li <?php if ($thisPage=="enquiry") echo " id=\"currentpage\""; ?>><a href="enquiry"> ENQUIRY </a> </li>
                            <li <?php if ($thisPage=="career") echo " id=\"currentpage\""; ?>><a href="careers"> CAREERS </a> </li>
                            <li <?php if ($thisPage=="contact") echo " id=\"currentpage\""; ?>><a href="contact"> CONTACT </a> </li>
                        
                        <?php if ($thisPage=="gallery") echo ""; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Section -->
 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>