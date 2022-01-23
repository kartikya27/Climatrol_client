
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Home Page </h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add Shipping Charge   </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> 
                <!--<th> Image</th>-->
                <th> Charge </th>
                <th> Type</th>
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
// print_r($r);
        
           ?> 
            
            
                        <tr> 
                       
                        <td><?php echo $r->charge_value; ?> </td>
                        <td><?php echo $r->type; ?></td>
                        <!--<td>Jodhpur, Rajasthan</td>-->
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'shippingcharge')">Delete</button></td>
                    </tr> 
                                        
        <?php  $x++;  } ?>                             
                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->

<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="addShippingCharge" method="POST" enctype="multipart/form-data">
              
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Shipping Charge</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        
                   
                   <div class="form-group" style="position: relative;">
                        <label>Charge value</label>
                    <input class="form-control" name="charge_value" value="" type="text">
                    </div>               
                   
                   
                   <div class="form-group">
                        <label>type </label>
                     <select name="type" class="form-control">
                         <option value="value">in value</option><option value="percent">in percentage</option>
                     </select>
                     
                    </div>
                    
                    
                    <!--<div class="form-group">-->
                    <!--    <label>Position </label>-->
                    <!--  <input class="form-control" name="position" value="" type="text">-->
                    <!--</div>-->
                    
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="testimonial" class="btn btn-primary">Save</button>
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
                <form action="editShippingCharge" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Edit Shipping Charge Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                    </div>
                                        <div class="modal-body"> 
                        <div class="form-group">
                                <!--<label>Id</label>-->
                                 <input type="hidden" name="id" class="form-control"  value="<?php echo $r->id;?>" readonly>
                                  </div> 
                                  <div class="form-group">
                                <label>Charge value</label>
                                <input type="text" name="charge_value" class="form-control" value="<?php echo $r->charge_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>type</label>
                                <select name="type">
                                    <option value="value">value</option>
                                    
                                    <option value="value">percentage</option>
                                </select>
                                
                                
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



   