<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Climatrol</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>admin_styles/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>admin_styles/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Admin_control/addProducts" 
                    <span>Add Products</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Admin_control/Products_Category" 
                    <span>Add About us Section </span>
                </a>
            </li>
            
              <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Admin_control/all_product" 
                    <span>All Product</span>
                </a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Admin_control/enquire" 
                    <span>Enquire</span>
                </a>
            </li>
            
            <!-- <li class="nav-item">-->
            <!--    <a class="nav-link collapsed" href="<?php //echo base_url();?>Admin_control/shipping_charge">-->
            <!--        <span>Shipping Charge</span>-->
            <!--    </a>-->
            <!--</li>-->
              <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Admin_control/client">
                    <span>Clients Icons</span>
                </a>
            </li>
            <!--  <li class="nav-item">-->
            <!--    <a class="nav-link collapsed" href="<?php echo base_url();?>Admin_control/associate">-->
            <!--        <span>Associates Icons</span>-->
            <!--    </a>-->
            <!--</li>-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Page Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Page Components:</h6>
                         <a class="collapse-item" href="<?php echo base_url();?>Admin_control/slider">Add slider</a>
                        <a class="collapse-item" href="<?php echo base_url();?>Admin_control/contact">Add Contact Details</a>
                        <a class="collapse-item" href="<?php echo base_url();?>Admin_control/testimonial">Add Testimonial</a>
                        
                        <a class="collapse-item" href="<?php echo base_url();?>Admin_control/add_blog">Add Blogs</a>
                        
                         <!--<a class="collapse-item" href="<?php //echo base_url();?>Admin_control/add_mission">Add Mission-Vision</a>-->
                        <!--<a class="collapse-item" href="<?php //echo base_url();?>Admin_control/add_services">Add services</a>-->
                        <!--<a class="collapse-item" href="<?php //echo base_url();?>Admin_control/add_solution">Add solution</a>-->
                        <a class="collapse-item" href="<?php echo base_url();?>Admin_control/add_about_us">Add About us</a>
                        
                    </div>
                </div>
            </li>

          
            <!-- Divider -->
         

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->