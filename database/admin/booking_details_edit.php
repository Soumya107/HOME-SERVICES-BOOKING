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
                     <strong>Booking Details </strong>
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
                            <span class="style3">Booking Details Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include("dbconnect.php");
$b_id=$_REQUEST['b_id'];
 $sql="select *from booking_details where booking_detail_id='$b_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="booking_details_update.php">
<input type="hidden" name="booking_detail_id" value="<?php  echo $row['booking_detail_id'];?>">
  <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td width="290">Booking id </td>
      <td width="233"><input name="booking_id" type="text" value="<?php echo $row['booking_id']?>" class="form-control"></td>
    </tr>
    <tr>
      <td height="48">Worker id </td>
      <td><input name="worker_id" type="text" value="<?php echo $row['worker_id']?> "class="form-control"></td>
    </tr>
    <tr>
      <td>Service id </td>
      <td><input name="service_id" type="text" value="<?php echo $row['service_id']?>"class="form-control"></td></tr>
    <tr>
      <td height="45">Service Status</td>
      <td><input name="service_status" type="text" value="<?php echo $row['service_status']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Service Detail</td>
      <td><input name="service_data" type="text" value="<?php echo $row['service_detail'] ?>"class="form-control"></td>
    </tr>
    <tr>
      <td height="137">Note</td>
      <td><textarea name="note"class="form-control"><?php echo $row['note']?>



</textarea></td>
    </tr>
    <tr>
      <td height="47" colspan="2"><blockquote>
       
              <p>
                  <input type="submit" name="Submit" value="update" class="btn btn-primary">
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

