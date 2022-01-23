  
             
                        <!--  <div class="col-sm-9 col-md-9 col-lg-10 col-sm-offset-3 col-md-offset-3 col-lg-offset-2"><div>-->
                                                <div id="content-wrapper" class="d-flex flex-column container">

            <!-- Main Content -->
            <div id="content">
<h1> Home Page Slider</h1>
<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add Home Page Slider
    </a>
   
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> 
                <th>Slider Image</th>
                <th>Slider Title</th>
               <th>Slider Sub Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($row as $r){?>
                                <tr> 
                        <td><img src="<?php echo base_url()."images/img/".$r->img;?>" style="height:150px; width:350px;" /></td>
                        <td class="text-center">
                            <a href="">
                                <span class="label label-success"><?php echo $r->title;?></span></a>
                        </td>
                        
                        <td class="text-center">
                            <a href="">
                                <span class="label label-success"><?php echo $r->subTitle;?></span></a>
                        </td>
                       
                    <td class="text-center">
                            <button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'headerSlider')">Delete</button>
                        </td>
                    </tr> 
                    <div class="modal fade " id="edit<?php echo $r->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content p-2">
                <form action="editData" method="POST" enctype='multipart/form-data'>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Slider</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <div class="modal-body"> 
                  
                      <!--<input type="hidden" name="tablename" value="headerSlider">-->
                    <div class="form-group">
                        <label>Title</label>
                          <input type="hidden" name="id" value="<?php echo $r->id;?>">
                       <input name="title" type="text" class="form-control" value="<?php echo $r->title;?>" />
                    </div>
                    
                    <div class="form-group">
                        <label>Sub Title</label>
                       <input name="subTitle" type="text" class="form-control" value="<?php echo $r->subTitle;?>" />
                    </div
                    <div class="form-group">
                        <label>Text</label>
                       <input name="text" type="text" class="form-control" value="<?php echo $r->text;?>" />
                    </div>
                        <div class="form-group">
                        <label>Image (350 X 150)</label>
                       <input name="img2" type="file" class="form-control" value="<?php echo $r->img2;?>" />
                    </div>
                     
                    <!-- <div class="form-group">-->
                    <!--    <label>Status</label>-->
                       <!--<select name="sliderStatusedit"  class="form-control" id="<?php echo "editStatus".$r->id;?>">-->
                       <!--    <option value="Enabled" <?php if($r->status=="Enabled")echo "selected";?>>Enabled</option><option value="Disabled" <?php if($r->status!="Enabled") echo "selected";?>>Disabled</option>-->
                       <!--</select>-->
                       
                    <!--</div>-->
                    <!-- <div class="form-group">-->
                    <!--    <label>Slide Number</label>-->
                    <!--   <input name="slideNumberedit" type="number" class="form-control" value="<?php echo $r->slid_number?>" id="<?php echo "editNumber".$r->id;?>" required/>-->
                    <!--</div>   -->
                            <button type="submit" name="" class="btn btn-primary w-25" id="editSlidersave">Save</button>
                    </div>
                   
                                </form>
            </div>
        </div>
    </div>
                    <?php }?>

                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->
<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo base_url();?>Admin_control/insert_slider/" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="update" value="0">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Home Page Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                   
                    <div class="form-group">
                        <label>Image</label>
                       <input name="sliderImageAdd" type="file" class="form-control" required/>
                        <input placeholder="Title" name="sliderName" type="text" class="form-control" required/>
                         <input name="sliderSubtitle" type="text" class="form-control" placeholder="Slide Sub title"/>
                          <input name="sliderBtntext" type="text" class="form-control" placeholder="Button Text" required/>
                           <input name="sliderBtnLink" type="text" class="form-control" placeholder="Page Link (If any product uploaded)"/>
                    </div>
                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="location.href = '<?php echo base_url();?>slider';" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


</div>

<!-- change pass -->



<!-- Modal Calculator -->

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