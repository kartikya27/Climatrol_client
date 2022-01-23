<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

### fetchSolution
public function fetchSolution(){

        return $this->db->get('solution')->result();
}

# SubscribeEmail >>>>>>>>
public function SubscribeEmail($subscribeEmail){

        return $this->db->insert('subscribe',$subscribeEmail);
}


public function fetchService(){
    
       // $this->db->distinct();
       // $this->db->select('vendorID,userName,userEmail,status');
       // $this->db->where('vendorID',$myEmail);
        return $this->db->get('services')->result();
}
##### fetchHeaderImg here

public function fetchHeaderImg(){

        return  $this->db->get('innerHeaderSlider')->row_array();
}

### fetchHeaderImgIndex 
public function fetchHeaderImgIndex(){

        return $this->db->get('headerSlider')->result();
}


  function fetchProductDetails($productName){
                 
                $this->db ->where('product_cat',$productName);
                return $this->db->get('product')->row_array();
                 
        }
        
        
          function fetchRelatedProduct($product_category){
                 
                $this->db ->where('product_cat',$product_category);
                return $this->db->get('product')->result();
                 
        }
        


###>>>>>fetchAboutUs
public function fetchAboutSection($sectionName,$sectionName1){
         $this->db ->like('section',$sectionName);
         $this->db ->or_like('section',$sectionName1);
        return $row = $this->db->get('aboutUs')->result();
}





# Login 
  public function checkUser($email, $password)
        {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        return $row = $this->db->get('user')->row_array();
     
     }
     
            public function submitUser($data){
    
            $this->db->insert('user',$data);
          
}
     

   public function authorise()
        {
             $user = $this->session->userdata('userAuth');
          if(!empty($user)){
              return true;
          }else{
              return false;
          }
          
     }

## Insrt cart and fetch detials fetchCartDetails
         public function fetchCartDetails($data)
        {
          $this->db->insert('carttable',$data);
            
        }


  public function getCartNum($username){
      $this->db->where('username',$username);
      $query = $this->db->get('carttable');
    return $query->num_rows();  
  }

# Cart  fetchCart
        public function fetchCart($username){
          $this->db->where('username',$username);
        return $this->db->get('carttable')->result();  
            
        }

# deleteCartItem
 public function deleteCartItem($id){
     $this->db->where('id',$id);
     $this->db->delete('carttable');  
 }
 # fetchTotalAmt
  public function fetchTotalAmt($username){
      $this->db->select_sum('totalPrice'); 
     $this->db->where('username',$username);
     $this->db->count_all();
    return $this->db->get('carttable')->result();  
 }

public function saveEnquiry($tablename,$data){
    $this->db->insert($tablename,$data);
}


## Class End      
}