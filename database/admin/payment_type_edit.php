<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
   <style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-family: "Times New Roman", Times, serif}
.style3 {font-weight: bold; font-family: "Times New Roman", Times, serif; }
-->
   </style>
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
               <div class="col-md-12">
                   <h1 class="style2 page-header"><strong>
                     <strong>Payment Type Details </strong>
                   </strong></h1>
               </div>
              </div> 
                 <strong>
                 <!-- /. ROW  -->
                    </strong>
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style3">Payment Type Details Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include("dbconnect.php");
$p_id=$_REQUEST['p_id'];
$sql1="select *from payment_type where payment_id='$p_id'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);
?>

<form name="form1" method="post" action="payment_type_update.php">
 <input type="hidden" name="payment_id" value="<?php  echo $row['payment_id'];?>">
  <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td width="230">Customer Name </td>
      <td width="323"><select name="customer_id">
        <?php 
  include("dbconnect.php");
  $sql2="select * from payment_type pt, customer_details cd where pt.customer_id=cd.customer_id";
  $res2=mysqli_query($conn,$sql2);
  while($row=mysqli_fetch_array($res2))
  {
  ?>
        <option value="<?php echo $row['customer_id'];?>" <?php if($row1['customer_id']==$row['customer_id']){?>selected<?php }; ?>><?php echo $row['customer_name'];?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td>Payment</td>
      <td><input name="payment" type="text" value="<?php echo $row1['payment']?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Payment Date </td>
      <td><input name="payment_date" type="date" value="<?php echo $row1['payment_date']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Payment Mode </td>
      <td><input name="payment_mode" type="text" value="<?php echo $row1['payment_mode']?>"class="form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><blockquote>
        
              <p>
                  <input type="submit" name="Submit" value="Update" class="btn btn-primary">
                  <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
</p>
            
      </td>
    </tr>
  </table>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
			<?php include('val.php'); ?>
			</div>
             <!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
 <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> 
    
 <?php include('val.php'); ?>  
</body>
</html>
