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
                     <strong>Service Categories Details </strong>
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
                            <span class="style3">Service Categories Details Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include("dbconnect.php");
$ss_id=$_REQUEST['ss_id'];
$sql="select *from service_categories where service_category_id='$ss_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="service_categories_update.php">
<input type="hidden" name="service_category_id" value="<?php echo $row['service_category_id'];?>">
  <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td width="239">Service Category Name </td>
      <td width="200"><input name="service_category_name" type="text" value="<?php echo $row['service_category_name']?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Category Icon </td>
      <td><input name="category_icon" type="text" value="<?php echo $row['category_icon']?>"class="form-control"></td>
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

