<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<title>Payment type details</title>
<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style2 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<body>
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
               <div class="col-md-12">
                   <h1 class="page-header style1">
                       Payment type Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="payment_type_form.php" class="btn btn-info btn">Add payment type Details </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Payment type Details View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="74" height="67">Sl. No </th>
    <th width="123">Customer Name </th>
    <th width="164">Payment</th>
    <th width="172">Payment Date </th>
    <th width="218">Payment Mode </th>
    
  </tr>
  </thead>
  <tbody>
  <?php 
  include("dbconnect.php");
  $sl=1;
  $sql="select * from payment_type pt, customer_details cd where pt.customer_id=cd.customer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
    
  <tr>
      <td><?php echo $sl++ ?> </td>
    <td><?php echo $row['customer_name']?></td>
    <td><?php echo $row['payment']?></td>
    <td><?php echo $row['payment_date']?></td>
    <td><?php echo $row['payment_mode']?></td>
    
  </tr>
  <?php } ?> 
</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              
                <!-- /. ROW  -->
     
        
                    <!-- End  Hover Rows  -->
               <?php include('footer.php');?>
                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
</body>
</html>
