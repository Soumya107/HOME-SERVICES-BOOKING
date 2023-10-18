<?php
include('dbconnect.php'); 
$s_id=$_REQUEST['s_id'];
$sql="update service_booking set booking_status='Cancled' where booking_id='$s_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Service Booking Cancled");
document.location='service_booking_view.php';
</script>
