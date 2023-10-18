<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<title>Service Booking</title>
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
                       Service Booking Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="service_booking_form.php" class="btn btn-info btn">Add Service Booking </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Service Booking View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="78" height="50">Sl.No</th>
    <th width="135">Customer Name </th>
    <th width="145">Booking Date </th>
    <th width="168">Booking Time</th>
    <th width="177">Booking Status </th>
    <th width="84">Confirm</th>
    <th width="89">Cancle</th>
   </tr>
  </thead>
  <tbody>
  <?php
  include("dbconnect.php");
  $sl=1;
  $sql="select *from service_booking sb,customer_details cd where sb.customer_id=cd.customer_id";
 $res= mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name']?></td>
    <td><?php echo $row['booking_date']?></td>
    <td><?php echo $row['booking_time']?></td>
    <td><?php echo $row['booking_status']?></td>
    <td><?php if($row["booking_status"]=="pending"){ ?><a href="service_booking_confirm.php?s_id=<?php echo $row['booking_id']?>" onClick="return confirm('Do you want to Confirm Booking')" class="btn btn-success">Confirm Booking</a><?php } ?></td>
    <td><?php if($row["booking_status"]=="pending"){ ?><a href="service_booking_cancle.php?s_id=<?php echo $row['booking_id']?>" onClick="return confirm('Do you want to Cancle Booking')" class="btn btn-danger">Cancle Booking</a><?php } ?></td>
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

