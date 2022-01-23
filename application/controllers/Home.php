<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
      function __construct(){
      parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        $this->load->library('email');
         $this->load->model('HomeModel');	
        $this->load->model('AdminModel');
      	
       
     }
    
    
    
	public function index()
	{   
    	$this->title="index";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	    
	     $slider['slider']=$this->AdminModel->getSlider();
	    $this->load->view('slider',$slider);
	    
        $data['testimonial'] = $this->AdminModel->gettestimonial();	    
	     $data['client'] = $this->AdminModel->getClients();
	     $data['blogs'] = $this->AdminModel->getAllBlogs();
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	
		public function blog_detail(){
		    	$this->title="Blog Details";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
		    
		    $id = $this->input->get('id');
		    $data['blogdetails'] = $this->AdminModel->getBlogdetail($id);
		
		    $this->load->view('blog_detail',$data);
		$this->load->view('footer');
		}
	
	
		public function contact()
	{
	    
	    $this->title="contact";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
	   
	   $data['details'] = $this->AdminModel->getDetails();
	   
	   
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}
	
			public function service_infrasturcture()
	{
	    $this->title="service";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
		$this->load->view('service');
		$this->load->view('footer');
	}
	
	
			public function careers()
	{
	    $this->title="career";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
		$this->load->view('careers');
		$this->load->view('footer');
	}
	
	
				public function Awards()
	{
	    $this->title="awards";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
		$this->load->view('awards');
		$this->load->view('footer');
	}
	
					public function Gallery()
	{
	    $this->title="gallery";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
		$this->load->view('gallery');
		$this->load->view('footer');
	}
	
	
			public function enquiry()
	{
	    $this->title="enquiry";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
		$this->load->view('enquiry');
		$this->load->view('footer');
	}
	
	
		public function about()
	{
	    $this->title="about";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	     ## get URl
	    $sectionName= $this->input->Get('section');
	     ## Fetch details
	      $sectionName1 ='';
	      
	      if(null!==($this->input->Get('section1'))){
	          $sectionName1= $this->input->Get('section1');
	      }
	     
	    $section['sectionContent'] = $this->HomeModel->fetchAboutSection($sectionName,$sectionName1);
	    
	     $this->title=$sectionName;  
	    $section['thissection']=$this->title;
	    
	   // $this->load->view('header');
		$this->load->view('about',$section);
		$this->load->view('footer');
	}
	
			public function products()
	{
	    $this->title="products";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	   // $this->load->view('header');
		$this->load->view('products');
		$this->load->view('footer');
	}
	
	
	
			public function product_details()
	{
	    $this->title="products";  
	    $thisPage['thisPage']=$this->title;
	
	
	    $this->load->view('header',$thisPage);
	    
	    ## get URl
	    $productName= $this->input->Get('product');
	    
	     $this->title=$productName;  
	    $product['thisproduct']=$this->title;
	
	    
	    
	    ## Fetch details
	    $product['productDetails'] = $this->HomeModel->fetchProductDetails($productName);
	    
	   // $this->load->view('header');
		$this->load->view('product_details',$product);
		$this->load->view('footer');
	}
	
	
	public function newsletter(){
    
        $this->load->library('form_validation');
	    $this->form_validation->set_message('is_unique', 'This details are already exist, Please try another.');
        $this->form_validation->set_rules('email','email','required|valid_email|is_unique[subscribe.email]');
        
          if($this->form_validation->run() == false){
		
		 $this->load->view('index');
		        
		    }else{
        
    $subscribeEmail['email'] = $this->input->post('email');
    $subscribedEmail = $this->HomeModel->SubscribeEmail($subscribeEmail);
    $this->session->set_flashdata('msg', 'Email has subscribed successfully.');
    redirect(base_url());
		    }
    
}
	
	public function sendEnquiry(){
	    $data=$this->input->post();
	    $data['enquiry_date']=date("Y-m-d h:i:s");
	    $tablename='enquiry';
	    $this->HomeModel->saveEnquiry($tablename,$data);
	    $to      = 'info@climatrol.in';
$subject = 'Enquiry Mail';
$message = $data['msg'];
$headers = 'From: '.$data['email']. "\r\n" .
    $data['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "<script>window.history.back()</script>";
	}
	public function sendServiceEnq(){
	      $data=$this->input->post();
	    $data['enquiry_date']=date("Y-m-d h:i:s");
	    $tablename='serviceEnquiry';
	    $this->HomeModel->saveEnquiry($tablename,$data);
	    $to      = 'salesupport@climatrol.in';
$subject = 'Enquiry Mail for service';
$message = $data['msg'];
$headers = 'From: '.$data['email']. "\r\n" .
    $data['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo "<script>window.history.back()</script>";
	}
	
	
		public function download($fileName = NULL){
		    echo $fileName."<br>";
		     $this->load->helper('download');
		       if ($fileName) {
    $file = realpath ( "docs" ) . "/" . $fileName;
    // check file exists    
    //echo $file."<br>";
    if (file_exists ( $file )) {
     // get file content
     $data = file_get_contents ( $file );
     //echo $data."<br>";
     //force download
     force_download ( $file, NULL );//'/path/to/photo.jpg', NULL
    } else {
     // Redirect to base url
     redirect ( base_url () );
    }
   }
		}
	
	
}
