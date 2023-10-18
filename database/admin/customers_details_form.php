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
                     <strong>Customer Details </strong>
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
                            <span class="style3">Customer Details Form </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

  <form name="form1" id="formID" method="post" action="customers_details_insert.php">
   <table align="center" class="table table-striped table-bordered table-hover">
      <tr>
        <td width="176">Customer name </td>
                  <td width="268"><input type="text" name="customer_name" class ="validate[required] form-control"></td>
      </tr>
      <tr>
        <td>Date Of Birth </td>
                  <td><input type="date" name="dob" class="form-control"></td>
      </tr>
      <tr>
        <td>Gender</td>
                  <td><input name="gender" type="radio" value="male">
                    male 
                    <input name="gender" type="radio" value="female"> 
                    female</td>
      </tr>
      <tr>
        <td>Address</td>
                  <td><textarea name="address" class="form-control"></textarea></td>
      </tr>
      <tr>
        <td>Mobile No </td>
                  <td><input type="text" name="mobile_no" class="form-control"></td>
      </tr>
      <tr>
        <td>E-mail id </td>
                  <td><input type="text" name="email"class="validate[required,custom[email] form-control"></td>
      </tr>
      <tr>
        <td colspan="2"><blockquote>
          
              <p>
                  <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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
