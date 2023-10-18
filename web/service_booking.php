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
<?php error_reporting (0);?>
<?php session_start();?>
<?php include('meta_tags.php'); ?>

</head>
<body>
	<?php include('user_header.php');
	include('../admin/dbconnect.php');
	$service_category_id=$_REQUEST["service_category_id"];
	$customer_id=$_SESSION['customer_id'];
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
				<script type="text/javascript">
				function c()
				{
				document.getElementById("f1").submit();
				}
				</script>
				 <form action="service_booking.php" method="post" id="f1">
				 <input name="service_category_id" type="hidden" value="<?php echo $service_category_id; ?>">
				 <table width="576" border="0">
  <tr>
    <td width="77">Service:</td>
    <td width="489"><select name="service_id" id="service_id" class="form-control validate[required]" onChange="c()">
          <option value="">Select Service</option>
          <?php
		
		$sql2="select sd.service_id,service_name,service_category_name from   service_details sd, service_categories sc where sd.service_category_id=sc.service_category_id and sd.service_category_id='$service_category_id'";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		
		?>
          <option value="<?php echo $row2['service_id'];?>" <?php if($row2['service_id']==$_REQUEST["service_id"]){ echo "selected"; } ?>><?php echo $row2['service_category_name']."->".$row2['service_name'];?></option>
          <?php
		}
		?>
        </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

				 </form>
				 
								
					<div class="row mb-2">
					 <?php
	 $sn=1;
$n=1;
   $sql="select worker_service_id,ws.worker_id,ws.service_id,service_name,worker_name,service_charge,photo,specialization,gender,work_description,experiance from workers_service ws,worker_details wd,service_details sd where ws.worker_id=wd.worker_id and ws.service_id=sd.service_id and ws.service_id='".$_REQUEST["service_id"]."'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
   $n++;
   if($n%2==0)
   {
   ?>
    <div class="clearfix"></div>
				</div>
   <div class="row mb-2">
   <?php
   }
 $sql2="select count(*) as cnt from  service_booking sb,customer_details cd where sb.customer_id=cd.customer_id and sb.customer_id='$customer_id' and booking_id in(select booking_id from booking_details where worker_id='".$row["worker_id"]."')";
  $res2=mysqli_query($conn,$sql2);
 $row2=mysqli_fetch_array($res2);
 $vcounts=$row2["cnt"];
  ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col-md-4 p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $row['worker_name'];?></strong>
          <h4 class="mb-0"><strong>Gender:</strong> <?php echo $row['gender'];?></h4>
          <p class="mb-0">&nbsp;</p>
          <h4 class="mb-0"><strong>Visit Counts: </strong><?php echo $vcounts;?></h4>
          <p class="mb-0">&nbsp;</p>
          <div class="mb-1 text-muted">
            <h4><strong>Service Charges:</strong> <?php echo $row['service_charge'];?>/-</h4>
            <p>&nbsp;</p>
          </div>
          <h4 class="card-text mb-auto"><strong>Work Description:</strong></h4>
		  <p class="card-text mb-auto"><?php echo $row['work_description'];?></p>
		  <p class="card-text mb-auto">&nbsp;</p>
		  <h4 class="card-text mb-auto"><strong>Experience: </strong><?php echo $row['experiance'];?></h4>
		  <p class="card-text mb-auto">&nbsp;</p>
		  <h4 class="card-text mb-auto"><strong>Specialization:</strong> <?php echo $row['specialization'];?></h4>
		  <p class="card-text mb-auto">&nbsp;</p>
		  <a href="book_now.php?w_id=<?php echo $row['worker_service_id'];?>" class="btn btn-success">Book Now</a>
        </div>
        <div class="col-auto d-none d-lg-block">          <img src="../img/<?php echo $row['photo']?> "width="371" height="263"> </div>
      </div>
    </div>
                                                                                                                                                                                                                
					
				 <?php
  
  }
  
  ?>
  <div class="clearfix"></div>
				</div>
			</div>
			
			
		</div>
		<!--footer section start-->		
		<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>