
             
             
                        <!--  <div class="col-sm-9 col-md-9 col-lg-10 col-sm-offset-3 col-md-offset-3 col-lg-offset-2"><div>-->
                                                <div id="content-wrapper" class="d-flex flex-column container">

            <!-- Main Content -->
            <div id="content">
<div>
    <h1> Enquire </h1>
    <!--        <a href="?settings" class="pull-right orders-settings"><i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span></a>-->
    </div>
<hr>

    

        <div class="row" style="margin-bottom: 2%; width: 100%;">
   
        </div>
        

  
  <table border="1" width="100%">
      
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Email</th>
                            <th>Customer Name</th>
                           
                            <th class="text-center">Phone</th>
                            <th class="text-center">Message</th>
                                                      
                        </tr>
                    
 <?php

        
        foreach($row as $detailOforder){
        $_SESSION['orderDetails'] = $detailOforder;
     
            $date = $detailOforder->enquiry_date;
            $email = $detailOforder->email;
            $name = $detailOforder->fullname;
            $phone =  $detailOforder->phone;
          $subject =  $detailOforder->subject;
    //   // ========   DONE  ============  
       ?>
       
                        
                      <tr>  
                                <td><input id="orderchk" type="checkbox" name="orderchk" value="15"></td>
                                <td class="relative" id="order_id-id-WINECHEF0015">
                                   <?php echo $date; ?>                               

                                </td>
                               
                                <td><i class="fa fa-user" aria-hidden="true"></i><?php echo $email; ?></td>
                               
                                
                                   
                                <td class="text-center">
                                   
                                     <span class="view-order"><a href="javascript:void(0);" class="" data-toggle="modal" data-target="#<?php echo $name ?>" style="" data-more-info="1241"><?php echo $name ?></a></span>    								
                               </td>
                                <td >
    							 <?php echo $phone ?>
    							 
                                  </td>
                                  
                                <td >
    							 <?php echo $subject ?>
    							 
                                  </td>
                 </tr> 
             
            
       <!---------model------>     
           
     <!-----
     
     <div class="modal fade" id="<?php //echo $phone ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document" style="max-width:70%; margin-top:10%">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Order Detailed <b id="client-name"><?php //echo $subject; ?></b></h4>
                     
                      </div>
                     
                        <div class="modal-body" id="preview-info-body" style="background: #fff;">
                       
                           
                            
                       
                            
            <table style="width:100%;" border="1" style="padding:20px">
                <tr>
                    <td>Customer Email</td>
                    <td><?php //echo $detailOforder->email; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php //echo $detailOforder->address; ?></td>
                </tr>
                <tr>
                    <td>Payment Type</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>Order Details</td>
                                    <td>
                                        <table>
                                        <tr>
                                            <td>Product:-</td><td><?php //echo $productName ?></td>
                                            </tr>
                                            <tr>
                                            <td>Quantity:-</td><td><?php //echo $quantity ?></td>
                                            </tr>
                                            <tr>
                                            <td>Price:-</td><td><?php //echo $productPrice ?></td>
                                            </tr>
                                        </table>
                                        
                                        
                    </td>
                </tr>
            
               </table>
               
               <?php //} ?>
                      </div>
                        
                        
                        
                        
                        
                        
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #513032;color: #fff;border-radius: 100px;">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
     ------>           
                           
    
    
       
<?php

} 
?>
  </table>

<?php
 //}
//else{ 

?>


<?php //}  


?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script>
$(document).ready(function() {
    $('#fromdate').datepicker({
        format: 'yyyy-mm-dd',
     });

    $('#todate').datepicker({
        format: 'yyyy-mm-dd',
     });
});
</script>
<script>
$(document).ready(function(){ 

    $('#orderchkexp #orderchk').click(function(){   
        var ordercb = new Array();
        $("#orderchkexp input[type=checkbox]:checked").each(function () {
            ordercb.push(this.value);
        });
        var ordercbValJoin = ordercb.join("s");
        if(ordercbValJoin != '')
        {
          var ordercbVal = ordercbValJoin;
        }
        else{
           var ordercbVal = 'no';
        }

        $("#ochkval").val(ordercbVal);

        var duration=$("#duration").val();
        var fromdate=$("#fromdate").val();
        var todate=$("#todate").val();
        if(duration == '')
        {
            var duration= 'no';
        }
         
        if(fromdate == '')
        {
            var fromdate= 'no';
        }
        
        if(todate == '')
        {
            var todate= 'no';
        }
        var url = "https://www.mywinechef.in/"+'admin/orderexport/'+duration+'/'+fromdate+'/'+todate+'/'+ordercbVal;
        $("#searchorder").attr("href", url);

    });
 }); 
</script>
<script>
$(document).ready(function(){ 
    $('#duration').on('change', function() {
        var duration=$("#duration").val();
        var fromdate=$("#fromdate").val();
        var todate=$("#todate").val();
        if(duration == '')
        {
            var duration= 'no';
        }
         
        if(fromdate == '')
        {
            var fromdate= 'no';
        }
        
        if(todate == '')
        {
            var todate= 'no';
        }

        var ordercb = new Array();
        $("#orderchkexp input[type=checkbox]:checked").each(function () {
            ordercb.push(this.value);
        });
        var ordercbValJoin = ordercb.join("s");
        if(ordercbValJoin != '')
        {
          var ordercbVal = ordercbValJoin;
        }
        else{
           var ordercbVal = 'no';
        }

        var url = "https://www.mywinechef.in/"+'admin/orderexport/'+duration+'/'+fromdate+'/'+todate+'/'+ordercbVal;
        $("#searchorder").attr("href", url);
    }); 

    $('#fromdate').bind("change", function() {
        var duration=$("#duration").val();
        var fromdate=$("#fromdate").val();
        var todate=$("#todate").val();
        if(duration == '')
        {
            var duration= 'no';
        }         
        if(fromdate == '')
        {
            var fromdate= 'no';
        }        
        if(todate == '')
        {
            var todate= 'no';
        }
        var ordercb = new Array();
        $("#orderchkexp input[type=checkbox]:checked").each(function () {
            ordercb.push(this.value);
        });
        var ordercbValJoin = ordercb.join("s");
        if(ordercbValJoin != '')
        {
          var ordercbVal = ordercbValJoin;
        }
        else{
           var ordercbVal = 'no';
        }

        var url = "https://www.mywinechef.in/"+'admin/orderexport/'+duration+'/'+fromdate+'/'+todate+'/'+ordercbVal;
        $("#searchorder").attr("href", url);
     });  

     $('#todate').bind("change", function() {
        var duration=$("#duration").val();
        var fromdate=$("#fromdate").val();
        var todate=$("#todate").val();
        if(duration == '')
        {
            var duration= 'no';
        }
        if(fromdate == '')
        {
            var fromdate= 'no';
        }
        if(todate == '')
        {
            var todate= 'no';
        }
        
        var ordercb = new Array();
        $("#orderchkexp input[type=checkbox]:checked").each(function () {
            ordercb.push(this.value);
        });
        var ordercbValJoin = ordercb.join("s");
        if(ordercbValJoin != '')
        {
          var ordercbVal = ordercbValJoin;
        }
        else{
           var ordercbVal = 'no';
        }

        var url = "https://www.mywinechef.in/"+'admin/orderexport/'+duration+'/'+fromdate+'/'+todate+'/'+ordercbVal;
        $("#searchorder").attr("href", url);
     });   
 });   
</script>

<script>
$(document).ready(function(){     
      var duration=$("#duration").val();
      var fromdate=$("#fromdate").val(); 
      var todate=$("#todate").val();
      // alert(fromdate);
      // if(duration != '' && fromdate !='' && todate !='')
      // {
        if(duration == '')
        {
            var duration= 'no';
        }
        if(fromdate == '')
        {
            var fromdate= 'no';
        }
        if(todate == '')
        {
            var todate= 'no';
        }
        
        var ordercb = new Array();
        $("#orderchkexp input[type=checkbox]:checked").each(function () {
            ordercb.push(this.value);
        });
        var ordercbValJoin = ordercb.join("s");
        if(ordercbValJoin != '')
        {
          var ordercbVal = ordercbValJoin;
        }
        else{
           var ordercbVal = 'no';
        }
        var url = "https://www.mywinechef.in/"+'admin/orderexport/'+duration+'/'+fromdate+'/'+todate+'/'+ordercbVal;
        $("#searchorder").attr("href", url);
      // }      
    
});  
</script>  </div>
</div>
</div>
</div>
<!--<footer>Powered by <a href="https://projects.letsgolive.in/trifla/">trifla.com/</a></footer>-->

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


<!-- Modal Calculator -->
<div class="modal fade" id="modalCalculator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Calculator</h4>
            </div>
            <div class="modal-body" id="calculator">
                <div class="hero-unit" id="calculator-wrapper">
                    <div class="row">
                        <div class="col-sm-8">
                            <div id="calculator-screen" class="form-control"></div>
                        </div>
                        <div class="col-sm-1">
                            <div class="visible-xs">
                                =
                            </div>
                            <div class="hidden-xs">
                                =
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="calculator-result"  class="form-control">0</div>
                        </div>
                    </div>
                </div>
                <div class="well">
                    <div id="calc-board">
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="SIN" data-key="115">sin</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="COS" data-key="99">cos</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="MOD" data-key="109">md</a>
                            <a href="javascript:void(0);" class="btn btn-danger" data-method="reset" data-key="8">C</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="55">7</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="56">8</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="57">9</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="BRO" data-key="40">(</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="BRC" data-key="41">)</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="52">4</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="53">5</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="54">6</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="MIN" data-key="45">-</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="SUM" data-key="43">+</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="49">1</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="50">2</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="51">3</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="DIV" data-key="47">/</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="MULT" data-key="42">*</a>
                        </div>
                        <div class="row">
                            <a href="javascript:void(0);" class="btn btn-default" data-key="46">.</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-key="48">0</a>
                            <a href="javascript:void(0);" class="btn btn-default" data-constant="PROC" data-key="37">%</a>
                            <a href="javascript:void(0);" class="btn btn-primary" data-method="calculate" data-key="61">=</a>
                        </div>
                    </div>
                </div>
                <div class="well">
                    <legend>History</legend>
                    <div id="calc-panel">
                        <div id="calc-history">
                            <ol id="calc-history-list"></ol>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 