
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Home Page Mission Vision</h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add  Mission Vision    </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> 
                <th> Image</th>
                <th> Name </th>
                <th> Text</th>
                <!--<th> Position</th>-->
                <th> Edit </th> 
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            
               <?php 

 
 $x = 1;
 

foreach($mission as $mission){

        
           ?> 
            
            
                        <tr> 
                        <td><img src="<?php echo base_url(); ?>img/others/<?php echo $mission->img1; ?>" style="height:80px; width:80px;" /></td>
                        <td><?php echo $mission->title; ?> </td>
                        <td><?php echo $mission->text; ?></td>
                        <!--<td>Jodhpur, Rajasthan</td>-->
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php echo $mission->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $mission->id;?>,'aboutUs')">Delete</button></td>
                    </tr> 
                     <div class="modal fade" id="edit<?php echo $mission->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="editMission" method="POST" enctype="multipart/form-data">
                    <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">Edit Blog Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       
                    </div>
                                        <div class="modal-body"> 
                        <div class="form-group">
                                <!--<label>Id</label>-->
                                 <input type="hidden" name="id" class="form-control"  value="<?php echo $mission->id; ?>" readonly>
                                  </div> 
                                  <div class="form-group">
                                <label>title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $mission->title; ?>">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img1" class="form-control" >
                                
                            </div>
                            <div class="form-group">
                                <label>Text</label>
                                <textarea name="text" class="form-control"rows="5" ><?php echo $mission->text;?></textarea>
                                
                            </div>
                            
                    
                    <div class="modal-footer">
                        <button type="submit" name="CatUpdate" class="btn btn-primary">Save</button>
                    </div></div>
                                </form>
            </div>
        </div>            
        <?php  $x++;  } ?>                             
                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->

<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="addMission" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="update" value="">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Mission Vision</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        <div class="form-group">
                        <label>Image</label>
                       <input name="addMissionimage" type="file" class="form-control"/>
                    </div>
                   
                   <div class="form-group" style="position: relative;">
                        <label>Text</label>
                    <textarea name="addMissionText" cols="" placeholder="Add Text" rows="" class="form-control"></textarea>
                    </div>               
                   
                   
                   <div class="form-group">
                        <label>Name </label>
                      <input class="form-control" placeholder="Add Title" name="addMissionName" value="" type="text">
                    </div>
                    
                    
                    <!--<div class="form-group">-->
                    <!--    <label>Position </label>-->
                    <!--  <input class="form-control" name="position" value="" type="text">-->
                    <!--</div>-->
                    
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="location.href = 'testimonial.php';" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="testimonial" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="admin_files/vendor/jquery/jquery.min.js"></script>
    <script src="admin_files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_files/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
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

   