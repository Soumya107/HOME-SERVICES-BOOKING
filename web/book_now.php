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
	$worker_service_id=$_REQUEST["w_id"];
	$sql="select ws.worker_id,ws.service_id,service_name,service_category_name,worker_name,service_charge,photo,specialization,gender,work_description,experiance from workers_service ws,worker_details wd,service_details sd, service_categories sc where ws.worker_id=wd.worker_id and ws.service_id=sd.service_id and sd.service_category_id=sc.service_category_id and worker_service_id='$worker_service_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
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
				<div class="row mb-2">
		
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col-md-4 p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $row['worker_name'];?></strong>
          <h3 class="mb-0"><strong>Gender:</strong><?php echo $row['gender'];?></h3>
          <div class="mb-1 text-muted"><strong>Service Charges:</strong><?php echo $row['service_charge'];?>/-</div>
          <p class="card-text mb-auto"><strong>Work Description:</strong></p>
		  <p class="card-text mb-auto"><?php echo $row['work_description'];?></p>
    <p class="card-text mb-auto"><strong>Experience:</strong><?php echo $row['experiance'];?></p>
   <p class="card-text mb-auto"><strong>Specialization:</strong><?php echo $row['specialization'];?></p>
         
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="../img/<?php echo $row['photo'];?>" width="50" height="50"> </div>
      </div>
    </div>
                                                                                                                                                                                                                
					
				
  <div class="clearfix"></div>
				</div>
				<?php include('cal.php');?>
				 <form action="book_service.php" method="post" id="f1">
				 <input name="worker_id" type="hidden" value="<?php echo $row["worker_id"]; ?>">
				 <input name="service_id" type="hidden" value="<?php echo $row["service_id"]; ?>">
				 <table width="576" border="0">
				 <tr>
        <td>Booking Date:</td>
        <td>
		<?php					
      $date_default = "";
     
      
      
         $date_default =date('Y-m-d');;
      



	  $myCalendar = new tc_calendar("b_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(date('Y'), null);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->dateAllow($date_default,null);
	  $myCalendar->writeScript();	  
	  ?></td>
      </tr>
                 <tr>
                   <td>Booking Time: </td>
                   <td><select name="booking_time" id="booking_time" class="form-control validate[required]">
                     <option value="">Select Time</option>
                     <option>08 AM - 10 AM</option>
                     <option>10 A.M - 12 NOON</option>
                     <option>02 P.M - 04 PM</option>
                     <option>04 PM - 06 PM</option>
                   </select></td>
                 </tr>
                 <tr>
        <td>Service Details</td>
        <td><textarea name="service_details" class="form-control validate[required,custom[onlyLetter]]" id="service_details"></textarea></td>
        </tr>
  <tr>
    <td>Notes</td>
    <td><textarea name="note" class="form-control validate[required,custom[onlyLetter]]" id="note"></textarea></td>
	</tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" class="btn btn-success" value="Book Now"></td>
    </tr>
</table>

				 </form>
				 
								
					
			</div>
			
			
		</div>
		<!--footer section start-->		
		<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>