<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

function addAboutSection($product_category){
   return  $this->db->insert('about_section',$product_category);
}
## Get Category
        function getAboutSection(){
                 return $this->db->get('about_section')->result();
        }

#deleteProduct_category

        function deleteProduct_category($deleteProduct_category){
                 
                $this -> db -> where('section', $deleteProduct_category);
                return $this->db->delete('about_section');
                 
        }
        
        
   public function getClients(){
                
        $query = $this->db->get('clients_associates');
        return $query->result();
      
     }
     
     
     public function getDetails(){
         
        $query = $this->db->get('contact');
        return $query->result();
      
     } 



   public function gettestimonial(){
                
        $query = $this->db->get('testimonial');
        return $query->result();
      
     }

public function addTestimonial($data){
     
      return   $this->db->insert('testimonial',$data);
}



### InsrtProduct
public function InsrtProduct($data){
     
      return   $this->db->insert('product',$data);
}




### All Product
    public function getAllproducts(){
                
        $query = $this->db->get('product');
        return $query->result();
      
     }
     
     ### getMission()
      public function getMission(){
        $this->db->where('section','mission');        
        $query = $this->db->get('aboutUs');
        return $query->result();
      
     }
     ##addMission
        public function addMission($addMissionName,$addMissionimage,$addMissionText){
     $data = array(
             "id"=>0,
             "title"=>$addMissionName,
        'img1' => $addMissionimage,
        "text"=>$addMissionText,
        "section"=>"mission"
        );
      return   $this->db->insert('aboutUs',$data);
}
     
     
       public function getAllBlogs(){
                
        $query = $this->db->get('blog');
        return $query->result();
      
     }
     
     
     
     public function getBlogdetail($id){
         $this->db->where('id',$id);
         $query = $this->db->get('blog');
        return $query->result();
     }
     
     
     ### nsrt Blog
     public function addBlog($addBlogName,$addBlogimage,$addBlogmsg){
     $data = array(
             "id"=>0,
             "title"=>$addBlogName,
        'img' => $addBlogimage,
        "blogContent"=>$addBlogmsg,
        "blog_date"=>date('Y/m/d'),
        );
      return   $this->db->insert('blog',$data);
}
     
     
     
     
     
      public function getEnquire(){
                
        $query = $this->db->get('enquiry');
        return $query->result();
       

     }
     
     
      public function getOrdersCount(){
                //  $this->db->where('email',$email);
        // $this->db->where('password',$password);
        
        $query = $this->db->query('SELECT count(*) as "rowNumber" FROM enquiry');
        return $query->result();
        // return $row = $this->db->get('recevicedorder');

     }
       public function getSlider(){
         return $this->db->get('headerSlider')->result();
     }
     public function insert_slider($filename,$sliderImageName,$sliderImageSubtitle,$sliderImagetext,$sliderBtnLink){
         $data = array(
             "id"=>0,
        'img' => $filename,
        "title"=>$sliderImageName,
        "subTitle"=>$sliderImageSubtitle,
        "btnText"=>$sliderImagetext,
        "btnLink"=>$sliderBtnLink
        );
         $this->db->insert('headerSlider',$data);
     }
     public function getServices(){
        return $this->db->get('services')->result();  
     }
    public function getSolutions(){
        return $this->db->get('solution')->result();  
    }
    public function getAboutUs(){
        //$this->db->where('section','about');
        return $this->db->get('aboutUs')->result();  
    }
    public function addServices($data){
         $this->db->insert('services',$data);
    }
    public function addSolution($data){
         $this->db->insert('solution',$data);
    }
    
     public function insertContact($data){
         $this->db->insert("contact",$data);
    }
    
    public function addAboutUs($data){
           $this->db->insert('aboutUs',$data);
    }
    
    public function deleteSingle($id,$tablename){
        $this->db->where('id',$id);
        $this->db->delete($tablename);
    }
    public function updateData($id,$tablename,$data){
    //   return $id;
        $this->db->where('id', $id);
return $this->db->update($tablename, $data);
    }
    public function getShippingCharge(){
        return $this->db->get('shippingcharge')->result();
    }
    public function addShippingCharge($data){
        $this->db->insert('shippingcharge',$data);
    }
    public function getAssociate($type){
        $this->db->where('type',$type);
        return $this->db->get('clients_associates')->result();
    }
    public function addClient($data){
        $this->db->insert('clients_associates',$data);
    }
        }