
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Home Page Testimonial</h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add  Testimonial    </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> 
                <th> Name</th>
                <th> Text </th>
                <th> Company</th>
                <!--<th> Position</th>-->
                <th> Edit </th> 
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            
               <?php 
             
//           $sqtestimonial = "SELECT * FROM testimonial";
           
//           $result = $con->query($sqtestimonial);

// if ($result->num_rows > 0) {
//   // output data of each row
 
 $x = 1;
 
//   while($row = $result->fetch_assoc()) {
foreach($row as $r){

        
           ?> 
            
            
                        <tr> 
                        <td><?php echo $r->name; ?></td>
                        <td><?php echo $r->msg; ?> </td>
                        <td><?php echo $r->company; ?></td>
                        <!--<td>Jodhpur, Rajasthan</td>-->
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'testimonial')">Delete</button></td>
                    </tr> 
                                        
        <?php  $x++;  } ?>                             
                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->

<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="addTestimonial" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="" value="">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Testimonial</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                    <!--                    <div class="form-group">-->
                    <!--    <label>Image</label>-->
                    <!--   <input name="addTestimonialimage" type="file" class="form-control"/>-->
                    <!--</div>-->
                   <div class="form-group">
                        <label>Name </label>
                      <input class="form-control" name="name" value="" type="text">
                    </div>
                  
                    
                   <div class="form-group" style="position: relative;">
                        <label>Text</label>
                    <textarea name="msg" cols="" rows="" class="form-control"></textarea>
                    </div>               
                   
                   
                   <div class="form-group">
                        <label>Company </label>
                      <input class="form-control" name="company" value="" type="text">
                    </div>
                    
                    
                    <!--<div class="form-group">-->
                    <!--    <label>Position </label>-->
                    <!--  <input class="form-control" name="position" value="" type="text">-->
                    <!--</div>-->
                    
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="location.href = 'testimonial.php';" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $x = 1;
 
//   while($row = $result->fetch_assoc()) {
foreach($row as $r){

        
           ?> 
            
<div class="modal fade" id="edit<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="editTestimonial" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Edit Testimonial Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                    </div>
                                        <div class="modal-body"> 
                        <div class="form-group">
                                <!--<label>Id</label>-->
                                 <input type="hidden" name="id" class="form-control"  value="<?php echo $r->id;?>" readonly>
                                  </div> 
                                  <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $r->name; ?>">
                            </div>
                           
                            <div class="form-group">
                                <label>Text</label>
                                <textarea name="msg" class="form-control" value="" rows="6" ><?php echo $r->msg; ?></textarea>
                                
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="CatUpdate" class="btn btn-primary">Save</button>
                    </div>
                                </form>
            </div>
        </div>
    </div> 

    <?php  } ?>
<script src="admin_files/vendor/jquery/jquery.min.js"></script>
    <script src="admin_files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_files/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin_files/js/sb-admin-2.min.js"></script>
</div>
</div>
</div>
</div>
<!--<footer>Powered by <a href="https://projects.letsgolive.in/trifla/">trifla.com/</a></footer>-->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function deleteSingle(id,tablename){
        
        $.ajax({
                url:"<?php echo base_url()?>Admin_control/deleteS",
                method:"POST",
                data:{id:id,tablename:tablename},
                success:function(data){
                    // alert(data);
                alert('deleted!');
           
            window.location.reload();
        }
    })
    }
</script>



   