           <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new About Section</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url();?>Admin_control/Products_Category" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Category Name</label>
                    <input type="text" name="product_category" class="form-control" id="exampleInputMEnu" placeholder="Enter Product Category Name">
                  </div>
                   <?php $msg = $this->session->flashdata('msg');
	                                    if ($msg != ''){
	                                            echo  '<span style="color:green">'.$msg.'</span>';
	                                                    }
	                                ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"> Add </button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div> 
            
            
            
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <h3>Select for delete about Section</h3>
                        <select name="delete_category" id="delete_category" class="form-control">
                        <?php foreach($AboutSection as $AboutSection){ ?>
                          <option id="<?php echo $AboutSection->section; ?>" ><?php echo $AboutSection->section; ?></option>

                          <?php }
                          ?>

                        </select>
                      </div>
            
            
            
            
            
            
            
            </div>
            
            
            
            
             </div>
             
             
             
             
           </div>
            
            
            <!---------for DELETE MENU JS SCRIPT------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
 <script>
     $(document).ready(function(){
         
 $("#delete_category").change(function() {
     let option =  $('#delete_category').val();
     if (confirm('Are you sure you want to Delete?')) {
  // Delete it!
   $.ajax({
            url:'<?php echo base_url();?>Admin_control/deleteProduct_category',
            method:"POST",
            data:{
            option:option
          },
        success:function(data){
        //console.log(data);
        //alert(data);
        window.location.reload();
          }


 });
} else {
  // Do nothing!
  
}
    
});
});
     
     
 </script>
<!---------for DELETE MENU JS SCRIPT- END HERE------------>
    <script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>        
            
            