
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Home Page Client</h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add  Clients icon    </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> 
                <th> Image</th>
                <th> type </th>
               
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
                        <td><img src="<?php echo base_url();?>images/clients/<?php echo $r->icon; ?>" style="height:80px; width:80px;" /></td>
                       
                        <td><?php echo $r->type; ?></td>
                        <!--<td>Jodhpur, Rajasthan</td>-->
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'clients_associates')">Delete</button></td>
                    </tr> 
                                        
        <?php  $x++;  } ?>                             
                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->

<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="addClient" method="POST" enctype="multipart/form-data">
                <!--<input type="hidden" name="update" value="">-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Client</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        <div class="form-group">
                        <label>Image</label>
                       <input name="icon" type="file" class="form-control"/>
                    </div>
                   
                     
                   
                   <div class="form-group">
                        
                      <input class="form-control"type="hidden" name="type" value="Client" type="text">
                    </div>
                    
                    
                   
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="location.href = 'testimonial.php';" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                <form action="editClient" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Edit Client Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                    </div>
                                        <div class="modal-body"> 
                        <!--<div class="form-group">-->
                        <!--        <label>Id</label>-->
                            <input type="hidden" name="id" class="form-control"  value="<?php echo $r->id;?>" readonly>
                        <!--          </div> -->
                        <!--          <div class="form-group">-->
                                <!--<label>Name</label>-->
                                <input type="hidden" name="type" class="form-control" value="client">
                                
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img" class="form-control" >
                                
                            </div>
                            
                                 
                            
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div> </div>
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



   