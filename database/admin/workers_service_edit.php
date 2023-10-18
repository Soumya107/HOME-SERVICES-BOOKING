
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
                     <strong>Worker Service Details </strong>
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
                            <span class="style3">Worker Service Details Edit Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include("dbconnect.php");
$ws_id=$_REQUEST['ws_id'];
$sql="select *from workers_service where worker_service_id='$ws_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="workers_service_update.php">
<input type="hidden" name="worker_service_id"  value= "<?php  echo $row['worker_service_id'];?>">
  <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td width="213">Worker id </td>
      <td width="290"><input name="worker_id" type="text" value="<?php echo $row['worker_id']?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Service id </td>
      <td><input name="service_id" type="text" value="<?php echo $row['service_id']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Service Charge </td>
      <td><input name="service_charge" type="text" value="<?php echo $row['service_charge']?>"></td>
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
