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
<?php include('meta.php'); ?>
</head>
<body>
	<?php include('header.php');
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
				 <?php

  $sql="select * from  service_categories";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  
  ?>
					<div class="col-md-2 focus-grid">
						<a href="../login.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><img src="images/icons/<?php echo $row['category_icon'];?>" width="145" height="131" /></div>
									<h4 class="clrchg"><?php echo $row['service_category_name'];?></h4>
								</div>
							</div>
						</a>
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