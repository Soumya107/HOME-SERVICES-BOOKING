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
                     <strong>Worker Details </strong>
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
                            <span class="style3">Worker Edit Details Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php 
include("dbconnect.php");
$w_id=$_REQUEST['w_id'];
$sql="select *from worker_details where worker_id='$w_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="worker_details_update.php">
<input type="hidden" name="worker_id" value="<?php echo $row['worker_id'];?>">
  <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td width="247">Worker Name </td>
      <td width="272"><input name="worker_name" type="text" value="<?php echo $row['worker_name']?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male">      
        male
          <input name="gender" type="radio" value="female">
      female</td></tr>
    <tr>
      <td>Date Of Birth </td>
      <td><input name="dob" type= "date" value="<?php echo $row['date_of_birth']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address"class="form-control"><?php echo $row['address']?></textarea></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><input name="qualification" type="text" value="<?php echo $row['qualification']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Mobile No </td>
      <td><input name="mobile_no" type="text" value="<?php echo $row['mobile_number']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>E-mail id </td>
      <td><input name="email_id" type="text" value="<?php echo $row['email_id']?>"class="form-control"></td>
    </tr>
    <tr>
      <td>Work Description</td>
      <td><textarea name="work_description"class="form-control"><?php echo $row['work_description']?></textarea></td>
    </tr>
    <tr>
      <td>Experience</td>
      <td><textarea name="experience"class="form-control"><?php echo $row['experiance']?></textarea></td>
    </tr>
    <tr>
      <td>Specialization</td>
      <td><input name="specialization" type="text" value="<?php echo $row['specialization']?>"class="form-control"></td>
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
