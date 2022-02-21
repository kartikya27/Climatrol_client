
             
             
                        <!--  <div class="col-sm-9 col-md-9 col-lg-10 col-sm-offset-3 col-md-offset-3 col-lg-offset-2"><div>-->
                                                <div id="content-wrapper" class="d-flex flex-column container">

            <!-- Main Content -->
            <div id="content">
        <h1><!--<img src="https://www.mywinechef.in/assets/imgs/products-img.png" class="header-img" style="margin-top:-2px;">-->&nbsp;&nbsp;&nbsp; Products</h1>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="well hidden-xs" style="display:none;"> 
                <div class="row">
                <form enctype="multipart/form-data" method="post" role="form" action="importproduct/">
             <div class="form-group" >
<label for="exampleInputFile">Import Products  </label>
<p class="help-block">&nbsp;</p>
</div>
 
<div class="form-group">
<!--<label for="exampleInputFile">&nbsp;Sample File Dowload <a href="https://www.mywinechef.in/attachments/csvfiles/products.csv">Click here...</a></label>-->
</div>
            
<div class="form-group">
<label for="exampleInputFile">File Upload</label>
<input type="file" name="file" id="file" size="150">
<p class="help-block">Only Excel/CSV File Import.</p>
</div>
<button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form></div></div>
                
            
               
            <hr>
                            <div class="table-responsive">
                    <table class="table table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Image</th> 
                                <th>Fron Page Image</th>
                                <th>Product Name</th>
<!--                                <th>Vendor</th>-->
<!--                                 <th>Product Quantity</th>-->
                             
                                <th>Product Category</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        
                        
                        
                        <tbody>
                            <?php 
                            foreach($row as $r){
                                
                                if(empty($r->product_img))
                                {
                                  $imglink=  $r->product_img = "https://www.electrosolutions.in/wp-content/uploads/2018/08/product-image-dummy.jpg";
                                    
                                }else
                                    {
                                        $imglink= base_url()."images/products/".$r->product_img;
                                    }
                                
                                
                            ?>
                            
                                                            <tr>
                                    <td>
                                  <img src="<?php echo $imglink ;?>" alt="No Image" class="img-thumbnail" style="height:100px;">
                                    </td>
                                    
                                    <td>
                                     <img src="<?php echo base_url();?>images/products/<?php echo $r->img_front;?>" alt="No Image" class="img-thumbnail" style="height:100px;">
                                    </td>
                                    
                                    <td><?php echo $r->product_name;?></td>                                  
                              
                                    
                                    <td><?php echo $r->product_cat;?>                                  </td>   
                                    
                                    <td>
                                        <div class="pull-right">
                                            <a data-toggle="modal" data-target="#edit<?php echo $r->id;?>" class="btn btn-primary btn-xs"" class="btn btn-info">Edit</a>
                                            <button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'product')">Delete</button>

                                          
                                                                                                                                        
          <div class="modal fade " id="edit<?php echo $r->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content p-2">
                <form action="editAboutUs" method="POST" enctype='multipart/form-data'>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <div class="modal-body"> 
                  
                      
                    <div class="form-group">
                        <label>Title</label>
                          <input type="hidden" name="id" value="<?php echo $r->id;?>">
                       <input name="title" type="text" class="form-control" value="<?php echo $r->product_name;?>" />
                    </div>
                    
                    <div class="form-group">
                        <label>Sub Title</label>
                         
                       <input name="subTitle" type="text" class="form-control" value="<?php echo $r->subTitle;?>" />
                    </div>
                    
                    <div class="form-group">
                        <label>Text</label>
                       <textarea style="height:200px" name="text" type="text" class="form-control" ><?php echo $r->text; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Section</label>
                         
                       <input name="section" type="text" readonly class="form-control" value="<?php echo $r->section;?>" >
                    </div>
                        <div class="form-group">
                        <label>Image (350 X 150)</label>
                       <input name="img" type="file" class="form-control" value="<?php echo $r->img1;?>" />
                    </div>
                     
                 
                            <button type="submit" name="" class="btn btn-primary w-25" id="editSlidersave">Save</button>
                    </div>
                   
                                </form>
            </div>
        </div>
    </div>                                                                                                 
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                        </div>
                                    </td>
                                </tr>
                                                          
                                    <?php } ?>
                                                                          
                                                        </tbody>
                    </table>
                </div>
                            </div>
                </div></div>
</div>
</div>
</div>


</div>

<!-- change pass -->
<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="calculator">
                 <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title">Security</div>
                    </div>
                    <div class="panel-body">
                        <label>Change my password</label> <span class="bg-success" id="pass_result">Changed!</span>
                        <form class="form-inline"  action="https://www.mywinechef.in/admin/changePass/" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control new-pass-field" placeholder="New password" name="new_pass">
                            </div>
                            <!-- <a href="javascript:void(0);"  class="btn btn-sm btn-primary">Update</a> -->
                            <button type="submit" class="btn btn-sm btn-primary">Update</button><hr>
                            <!-- onclick="changePass()"
                            <span>Password Strength:</span>
                            <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div></div>
                            <button type="button" class="btn btn-default generate-pwd">Generate Password</button> -->
                        </form>
                    </div>
                </div>   
            </div>           
        </div>
    </div>
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

   

</body>
</html>
