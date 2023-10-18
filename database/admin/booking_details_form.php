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
<form name="form1" id="formID"method="post" action="booking_details_insert.php">
 <table align="center" class="table table-striped table-bordered table-hover">
    
    <tr>
      <td width="212" height="52"><strong>Booking id </strong></td>
      <td width="247"><input type="text" class="form-control" name="booking_id"></td>
    </tr>
    <tr>
      <td height="48"><strong>Worker id </strong></td>
      <td><input type="text"class="form-control" name="worker_id"></td>
    </tr>
    <tr>
      <td height="53"><strong>Service id </strong></td>
      <td><input type="text"class="form-control" name="service_id"></td>
    </tr>
    <tr>
      <td height="45"><strong>Service Status</strong></td>
      <td><input type="text" class="form-control"name="service_status"></td>
    </tr>
    <tr>
      <td height="60"><strong>Service Detail</strong></td>
      <td><input type="text" class="form-control" name="service_detail"></td>
    </tr>
    <tr>
      <td height="92"><strong>Note</strong></td>
      <td><textarea class="form-control" name="note"></textarea></td>
    </tr>
    <tr>
      <td height="47" colspan="2"><blockquote>
       
              <p align="center">
                  <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                  <input type="reset" name="Reset" value="Reset" class="btn  btn-danger">
</p>
           
      </td>
    </tr>
  </table>
  <p class="style1">&nbsp;</p>
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


