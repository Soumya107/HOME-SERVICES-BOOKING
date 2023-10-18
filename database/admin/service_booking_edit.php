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
                     <strong> Service Booking Details </strong>
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
                            <span class="style3"> Service Booking Details Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include("dbconnect.php");
$s_id=$_REQUEST['s_id'];
$sql="select *from service_booking sb, customer_details cd  where cd.customer_id=sb.customer_id and booking_id='$s_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" method="post" action="service_booking_update.php">
<input type="hidden" name="booking_id" value="<?php echo $row['booking_id'];?>">
 <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td width="156">Customer name </td>
      <td width="288"><input name="customer_name" type="text" value="<?php echo $row['customer_name'];?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Booking Date </td>
      <td><input name="booking_date" type="date" value="<?php echo $row['booking_date']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Booking Time</td>
      <td><input name="booking_time" type="text" value="<?php echo $row['booking_time']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Booking Status </td>
      <td><input name="booking_status" type="text" value="<?php echo $row['booking_status']?>"class="form-control"></td>
    </tr>
    <tr>
      <td height="53" colspan="2"><blockquote>
       
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

