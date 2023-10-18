<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Home Services - Payments Page</title>


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
  <th>Bill No</th>
    <th>Customer</th>
    <th>Payment </th>
    <th>Payment Date </th>
    <th>Payment Mode </th>
    </tr>
   </thead>
  <tbody>
   
   <?php
   $sn=1;
   $bn=1000;
   $uname=$_SESSION['customer_id'];
  include('../admin/dbconnect.php');
   $sql="select * from payment_type pt,customer_details cd where pt.customer_id=cd.customer_id and pt.customer_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  
  ?>
  
  
    <tr> 
   <td><?php echo  $sn++?></td>
   <td><?php echo  $bn++?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<?php echo $row['payment'];?></td>
    <td>&nbsp;<?php echo $row['payment_date'];?></td>
    <td>&nbsp;<?php echo $row['payment_mode'];?></td>
    </tr>
  <?php

  }
  
  ?>                      </table>
					<div class="clearfix"></div>
				</div>
			</div>
			
			
		</div>
		<!--footer section start-->		
		<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>