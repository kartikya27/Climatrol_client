<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_control extends CI_Controller {
## Contruct here--->>>
      function __construct(){
      parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        $this->load->library('email');
      	 $this->load->view('admin/header');
        $this->load->model('AdminModel');	
     }
     
     
     public function index(){
         
         $data['row']= $this->AdminModel->getOrdersCount();
         ### Only For Test loading addproduct file here addProduct.php
                $this->load->view('admin/index',$data);
                $this->load->view('admin/footer');
     }
     
     
     ###   
      public function contact(){
         
                $data['contactDetails'] = $this->AdminModel->getDetails();
       
                $this->load->view('admin/contact',$data);
                $this->load->view('admin/footer');
     }
     
     public function updateContact(){
            $id=$this->input->post('id');
            $data['content']=$this->input->post('content');
            $tablename = "contact";
            $this->AdminModel->updateData($id,$tablename,$data);
            redirect('Admin_control/contact');
     }
     
     public function addContact(){
            $data['type']  = $this->input->post('type');
            $data['content']  = $this->input->post('content');
            // $tablename = "contact";
            $this->AdminModel->insertContact($data);
            redirect('Admin_control/contact');
          
     }
     
     
         public function slider()
	        {  
        $data['row']=$this->AdminModel->getSlider();
		$this->load->view('admin/slider',$data);
		 $this->load->view('admin/footer');
     
	        }
	        
    public function insert_slider(){
        $sliderName  = $this->input->post('sliderName');
        $sliderSubtitle  = $this->input->post('sliderSubtitle');
        $sliderBtntext  = $this->input->post('sliderBtntext');
        $sliderBtnLink = $this->input->post('sliderBtnLink');
        
        if(empty($sliderBtnLink)){
            $sliderBtnLink = "https://projects.letsgolive.in/climatrol/about?section=about&section1=Culture";
        }
        
        $filename=$_FILES['sliderImageAdd']['name'];
        $temp=$_FILES['sliderImageAdd']['tmp_name'];
        $filename=date("Y_m_d_h_i_s").$filename;
        if(move_uploaded_file($temp,'./images/img/'.$filename)){}
        $this->AdminModel->insert_slider($filename,$sliderName,$sliderSubtitle,$sliderBtntext,$sliderBtnLink);
         redirect(base_url().'Admin_control/slider');
    }
     
     
     
     public function addProducts(){
         ## INsert Product>>>
         if($this->input->post()){
             $data['product_name'] = $this->input->post('title');
             $data['short_dis'] = $this->input->post('Short_dis');
             $data['product_dis'] = $this->input->post('description');
            //  $data['product_price'] = $this->input->post('mrpprice');
             
             $data['product_cat'] = $this->input->post('product_category');
           
              $data['product_type'] = $this->input->post('product_type');
           
             $data['product_img'] = $_FILES['image']['name'];
              $data['img_front'] = $_FILES['imageFront']['name'];
               $data['extraImg'] = $_FILES['imageSecond']['name'];
		  	 $data['product_img'] =date("Y_m_d_h_i_s")."_".$data['product_img'];
		  	 $data['img_front'] =date("Y_m_d_h_i_s")."_".$data['img_front'];
		  	 $data['extraImg'] =date("Y_m_d_h_i_s")."_".$data['extraImg'];
		  	 
		  	 
		  	 ## INSERT 
		  	 if(move_uploaded_file($_FILES["image"]["tmp_name"],'./images/products/'.$data['product_img'])){
		  	     
		  	 }
		  	 
		  	 if(move_uploaded_file($_FILES["imageFront"]["tmp_name"],'./images/products/'.$data['img_front'])){
		  	     
		  	 }
		  	 
		  	 if(move_uploaded_file($_FILES["imageSecond"]["tmp_name"],'./images/products/'.$data['extraImg'])){
		  	     
		  	 }
		  	 
		  	  $this->AdminModel->InsrtProduct($data);
		  	 echo "<script>alert('Added !');</script>";
		  	 
    //  	 redirect(base_url().'Admin_control/testimonial');
		  	 
             
         }
         
         ## Fetch Category
        // $product['product_category'] = $this->AdminModel->getProCategory();
         
         
          $this->load->view('admin/addProduct');
          $this->load->view('admin/footer');
     }
     
    ## Products Category 
      public function Products_Category(){
          
          if($this->input->post('product_category')){
		$product_category['section'] = $this->input->post('product_category');
		//echo $menu_item;
		$this->load->model('AdminModel');
		$result = $this->AdminModel->addAboutSection($product_category);
		}
          if(!empty($result)){
              $this->session->set_flashdata('msg', 'Updated Successfully.');
          }
           $product['AboutSection'] = $this->AdminModel->getAboutSection();
          
         
                $this->load->view('admin/product_category',$product);
                $this->load->view('admin/footer');
     }
     
     ### deleteProduct_category 
	public function deleteProduct_category()
	    {
	$deleteProduct_category = $this->input->post('option');
	echo $this->AdminModel->deleteProduct_category($deleteProduct_category);
	    }
     
   ### Add AUto Function addFunction  
     
     	public function addFunction()
	    {

$function_name=$_POST['FunctionName'];
 $url= str_replace(' ', '', $function_name);

 $filename=fopen('./application/views/admin/'.$url.".php","w");

    $str="$ route['".$url."']";
    $str= str_replace(' ', '', $str);
     $routs=fopen('./application/config/routes.php','a');
    fwrite($routs,$str."='Admin_control/".$url."';");
    fclose($routs);
  
  ### For add Load view $ this->load->view('shop');
  ### $ productCat = '".$cat_name."';
  ### $ data['product'] = $ this->Shopping_cart->aibased($ productCat); $ this->load->view('product/".$url."',$ data);
  
    $str="public function ".$url."(){ 
        
        $ this->load->view('admin/".$url."');
    
        $ this->load->view('admin/footer');
        
    }
    
        }";
        $str= str_replace('$ ', '$', $str);
        
        $file = './application/controllers/Admin_control.php';

$current = file_get_contents($file);
// Append a new person to the file
$current = substr($current,0,strlen($current)-2).$str;

file_put_contents($file, $current);

### MODEL
 $str="function ".$url."(){ 
    
    
       
        
    }
    
        }";
        $str= str_replace('$ ', '$', $str);
        
        $file = './application/models/AdminModel.php';

$current = file_get_contents($file);
// Append a new person to the file
$current = substr($current,0,strlen($current)-2).$str;

file_put_contents($file, $current);



echo  $this->session->set_flashdata('msg', 'Created Successfully.');
redirect(base_url().'Admin_control/Products_Category');

	    }
   
            public function testimonial()
	        {  
	             $data['row'] = $this->AdminModel->gettestimonial();
        
	    	$this->load->view('admin/testimonial',$data);
     $this->load->view('admin/footer');
	        }  
	         public function shipping_charge()
	        {  
	             $data['row'] = $this->AdminModel->getShippingCharge();
        
	    	$this->load->view('admin/shipping_charge',$data);
     $this->load->view('admin/footer');
	        }  
	        public function add_FAQ()
	        {  
        
	    	$this->load->view('admin/add_FAQ');
     $this->load->view('admin/footer');
	        }  
    
           public function addTestimonial(){
              $data  = $this->input->post(); 
		  	 
		  	  $this->AdminModel->addTestimonial($data);
		  	 echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/testimonial');
          }
          
          
        public function all_product()
	        {  
	            $data['row'] = $this->AdminModel->getAllproducts();
        // $this-getOrders();
		$this->load->view('admin/all_product',$data);
		 $this->load->view('admin/footer');
		
		
     
	        }     
          
             public function enquire()
	        {  
	            
         $data['row'] = $this->AdminModel->getEnquire();
		$this->load->view('admin/orders',$data);
		$this->load->view('admin/footer');
     
	        }
          
     ## add_blog     
          public function add_blog()
	        {  
	            
         $data['row'] = $this->AdminModel->getAllBlogs();
		$this->load->view('admin/blog',$data);
		$this->load->view('admin/footer');
     
	        }
          
             public function addblog(){
              $addBlogName  = $this->input->post('addBlogName'); 
		  	 $addBlogimage  = $_FILES['addBlogimage']['name'];
		  	 $addBlogimage=$filename=date("Y_m_d_h_i_s").$addBlogimage;
		  	 $addBlogmsg  = $this->input->post('addBlogmsg');
		  	 if(move_uploaded_file($_FILES["addBlogimage"]["tmp_name"],'./images/'.$addBlogimage)){
		  	     
		  	 }
		  	  $this->AdminModel->addBlog($addBlogName,$addBlogimage,$addBlogmsg);
		  	 echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_blog');
          }
          
         #### add_mission
          public function add_mission(){
        $data['mission'] = $this->AdminModel->getMission();
		$this->load->view('admin/mission',$data);
		$this->load->view('admin/footer');
              
          }
          public function addMission(){
              $addMissionName  = $this->input->post('addMissionName'); 
		  	 $addMissionimage  = $_FILES['addMissionimage']['name'];
		  	 $addMissionimage=date("Y_m_d_h_i_s");
		  	 $addMissionText  = $this->input->post('addMissionText');
		  	 if(move_uploaded_file($_FILES["addMissionimage"]["tmp_name"],'./img/others/'.$addMissionimage)){
		  	     
		  	 }
		  	  $this->AdminModel->addMission($addMissionName,$addMissionimage,$addMissionText);
		  	 echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_mission');
          }
          
    
    public function add_services(){
       $data['row'] = $this->AdminModel->getServices();
		$this->load->view('admin/add_services',$data);
		$this->load->view('admin/footer');
    }
    public function addServices(){
        $data['name']=$this->input->post('name');
        $data['text']=$this->input->post('text');
        $data['img']  = $_FILES['img']['name'];
		 if(move_uploaded_file($_FILES["img"]["tmp_name"],'./img/service/'.$data['img'])){
		  	     
		  	 }
        
        $this->AdminModel->addServices($data);
         echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_services');
    }
    public function add_solution(){
         $data['row'] = $this->AdminModel->getSolutions();
		$this->load->view('admin/add_solutions',$data);
		$this->load->view('admin/footer');
        
    }
    public function addSolution(){
        $data['name']=$this->input->post('name');
        $data['text']=$this->input->post('text');
        $data['img']  = $_FILES['img']['name'];
		 if(move_uploaded_file($_FILES["img"]["tmp_name"],'./img/solution/'.$data['img'])){
		  	     
		  	 }
        
        // $this->AdminModel->addServices($data);
        //  echo "<script>alert('Added !');</script>";
		$this->AdminModel->addSolution($data);
        // print_r( $data);
         echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_solution');
    }
    public function add_about_us(){
        
       $data['row'] = $this->AdminModel->getAboutUs();
		$this->load->view('admin/add_about_us',$data);
		$this->load->view('admin/footer');
    }
    public function addAboutUs(){
        
       $data['title']=$this->input->post('title');
        $data['title']=$this->input->post('title');
        $data['text']=$this->input->post('text');
        $data['section']=$this->input->post('section');
        $data['img1']  = $_FILES['img1']['name'];
		 if(move_uploaded_file($_FILES["img1"]["tmp_name"],'./img/service/'.$data['img1'])){
		  	     
		  	 }
        
        $this->AdminModel->addAboutUs($data);
         echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_about_us');
    }
    public function deleteS(){
        $id=$this->input->post('id');
        $tablename=$this->input->post('tablename');
        $this->AdminModel->deleteSingle($id,$tablename);
        
    }
    public function editData(){
        $tablename="headerSlider";
        
       $id=$this->input->post('id');
    //   echo $id;
       $allData['title']=$this->input->post('title');
       $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['img2']=$_FILES['img2']['name'];
        $temp=$_FILES['img2']['tmp_name'];
        $filename=date("Y_m_d_h_i_s").$allData['img2'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./img/banner/'.$filename)){}
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/slider'); 
    }
    
    public function editAboutUs(){
        $tablename="aboutUs"; 
         $id=$this->input->post('id');
    //   echo $id;
       $allData['title']=$this->input->post('title');
        $allData['subTitle']=$this->input->post('subTitle');
    //   $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['section']=$this->input->post('section');
       if(isset($_FILES['img']['name'])){
       $allData['img1']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
    //   echo  $filename=date("Y_m_d_h_i_s").$allData['img1'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./images/img/'.$allData['img1'])){}
       }
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_about_us'); 
    }
    public function editService(){
         $tablename="services"; 
         $id=$this->input->post('id');
    //   echo $id;
       $allData['name']=$this->input->post('name');
    //   $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['img']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
         $allData['img']=date("Y_m_d_h_i_s").$allData['img'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./img/service/'.$allData['img'])){}
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_services'); 
    }
    public function editSolution(){
         $tablename="solution"; 
         $id=$this->input->post('id');
    //   echo $id;
       $allData['name']=$this->input->post('name');
    //   $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['img']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
       $allData['img']=date("Y_m_d_h_i_s").$allData['img'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./img/solution/'.$allData['img'])){}
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_solution'); 
    }
    public function editBlog(){
         $tablename="blog"; 
        //  print_r($this->input->post());
         $id=$this->input->post('id');
    // //   echo $id;
      $allData['title']=$this->input->post('title');
    // //   $allData['subTitle']=$this->input->post('subTitle');
      $allData['blogContent']=$this->input->post('blogContent');
      $allData['img']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
        $allData['img']=date("Y_m_d_h_i_s").$allData['img'];
    //     // print_r($allData);
        if(move_uploaded_file($_FILES["img"]["tmp_name"],'./img/'.$allData['img'])){
		  	     
		  	 }
    //   print_r($allData) ;
   echo $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_blog'); 
    }
    public function editTestimonial(){
           $tablename="testimonial"; 
        //  print_r($this->input->post());
         $id=$this->input->post('id');
    // //   echo $id;
      $allData['name']=$this->input->post('name');
    // //   $allData['subTitle']=$this->input->post('subTitle');
      $allData['msg']=$this->input->post('msg');
     
    //   print_r($allData) ;
   echo $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/testimonial'); 
    }
    public function editMission(){
          $tablename="aboutUs"; 
        //  print_r($this->input->post());
         $id=$this->input->post('id');
    // //   echo $id;
      $allData['title']=$this->input->post('title');
    // //   $allData['subTitle']=$this->input->post('subTitle');
      $allData['text']=$this->input->post('text');
      $allData['img1']=$_FILES['img1']['name'];
        $temp=$_FILES['img1']['tmp_name'];
        $allData['img1']=date("Y_m_d_h_i_s").$allData['img1'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["img1"]["tmp_name"],'./img/others/'.$allData['img1'])){
		  	     
		  	 }
    //   print_r($allData) ;
   echo $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_mission'); 
    }
    public function addShippingCharge(){
        $data['charge_value']=$this->input->post('charge_value');
        $data['type']=$this->input->post('type');
        $this->AdminModel->addShippingCharge($data);
         redirect(base_url().'Admin_control/shipping_charge'); 
    }
    public function editShippingCharge(){
        $id=$this->input->post('id');
         $data['charge_value']=$this->input->post('charge_value');
        $data['type']=$this->input->post('type');
        
        $this->AdminModel->updateData($id,'shippingcharge',$data);
      redirect(base_url().'Admin_control/shipping_charge'); 
    }
    public function client(){
       $data['row'] = $this->AdminModel->getAssociate('client');
        
	    	$this->load->view('admin/client',$data);
     $this->load->view('admin/footer');  
    }
    public function addClient(){
         $data['icon']=$_FILES['icon']['name'];
        $data['type']=$this->input->post('type');
         $temp=$_FILES['icon']['tmp_name'];
        $data['icon']=date("Y_m_d_h_i_s"). $data['icon'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["icon"]["tmp_name"],'./images/clients/'. $data['icon'])){
		  	     
		  	 }
        $this->AdminModel->addClient($data);
         redirect(base_url().'Admin_control/client'); 
    }
   
    public function editClient(){
        $id=$this->input->post('id');
       
        $tablename='clients_associates';
          $data['icon']=$_FILES['img']['name'];
        $data['type']=$this->input->post('type');
         $temp=$_FILES['img']['tmp_name'];
        $data['icon']=date("Y_m_d_h_i_s"). $data['icon'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["img"]["tmp_name"],'./images/clients/'. $data['icon'])){
		  	     
		  	 }
     $this->AdminModel->updateData($id,$tablename,$data);
      redirect(base_url().'Admin_control/client'); 
        }
}