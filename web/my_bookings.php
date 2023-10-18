<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Home Services - Home Page</title>

<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<?php include('meta_tags.php'); ?>
</head>
<body>
	<?php include('user_header.php');
include('../admin/dbconnect.php');
	 ?>
	<div class="main-banner banner text-center">
	  <div class="container"> 
	  
	  </div>
	</div>
		<!-- content-starts-here -->
 		<div class="content">
		 
			<hr>
			
			<div class="categories">
				<div class="container">
				 							  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
  <th>S.No</th>
    <th>Worker </th>
    <th>Service </th>
    <th>Service Status </th>
    <th>Service Charge</th>
    <th>Pay Now</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sn=1;
  $uname=$_SESSION['customer_id'];
  $sql="select * from customer_details cd,  workers_service ws, booking_details t1,service_booking t2,worker_details t3,service_details t4 where t1.booking_id=t2.booking_id and t4.service_id=ws.service_id and t1.worker_id=t3.worker_id and t1.service_id=t4.service_id and t2.customer_id='$uname' and cd.customer_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  <tr>
  <td><?php echo  $sn++?></td>
    <td>&nbsp;<?php echo $row['worker_name'];?></td>
    <td>&nbsp;<?php echo $row['service_name'];?></td>
    <td>&nbsp;<?php echo $row['booking_status'];?></td>
    <td>&nbsp;<?php echo $row['service_charge'];?></td>
    <td><?php if($row["booking_status"]=="Confirm") {?><a href="pay_now.php?customer_id=<?php echo $row["customer_id"];?>&custname=<?php echo $row["customer_name"];?>&custemail=<?php echo $row["email_id"]?>&rate=<?php echo $row["service_charge"] ;?>&custphone=<?php echo $row["mobile_number"]?>" class="btn btn-info" >Pay now</a><?php } ?></td>
    </tr>
  <?php

  }
  
  ?>

  </tbody>
                              </table>
					
					<div class="clearfix"></div>
				</div>
			</div>
			
			
		</div>
		<!--footer section start-->		
		<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>