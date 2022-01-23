<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['index'] = 'Home/index';
$route['contact'] = 'Home/contact';
$route['careers'] = 'Home/careers';
$route['about'] = 'Home/about';
$route['service'] = 'Home/service_infrasturcture';
$route['enquiry'] = 'Home/enquiry';
$route['Awards'] = 'Home/Awards';
$route['Gallery'] = 'Home/Gallery';
$route['blog_detail'] = 'Home/blog_detail';

$route['products'] = 'Home/products';
$route['product_list'] = 'Home/product_list';
$route['product_details'] = 'Home/product_details';
$route['download/(:any)'] = "Home/download/$1";
$route['admin'] = 'Admin_control/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
