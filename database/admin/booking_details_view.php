<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<title>Home Services</title>
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
                       Booking Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="booking_details_form.php" class="btn btn-info btn">Add Booking Details </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Booking Details View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="855" height="131" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="70">Sl.No</th>
    <th width="116">Booking Id </th>
    <th width="110">Worker Id </th>
    <th width="103">Service Id </th>
    <th width="103">Service Status</th>
    <th width="103">Service Details </th>
    <th width="64">Note</th>
    <th width="83"><div align="center">Edit </div></th>
    <th width="63"><div align="center">Delete</div></th>
   </tr>
  </thead>
  <tbody>
  <?php
  include("dbconnect.php");
  $sl=1;
  $sql="select * from booking_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td height="55"><?php echo $sl++ ?></td>
    <td><?php echo $row['booking_id']?></td>
    <td><?php echo $row['worker_id']?> </td>
    <td><?php echo $row['service_id']?></td>
    <td><?php echo $row['service_status']?></td>
    <td><?php echo $row['service_detail'] ?></td>
    <td><?php echo $row['note']?></td>
    <td><div align="center"><a href="booking_details_edit.php?b_id=<?php echo $row['booking_detail_id'];?>"><img src="../img/edit_01.png" width="40" height="40"></a></div></td>
    <td><div align="center"><a href="booking_details_delete.php?b_id=<?php echo $row['booking_detail_id'];?>"><img src="../img/delete.png" width="40" height="40"></a></div></td>
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
