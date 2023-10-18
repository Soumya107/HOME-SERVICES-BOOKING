<?php
include('dbconnect.php');
$booking_det_id=$_REQUEST['s_id'];
$sql="delete from service_booking where booking_id='$booking_det_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted....");
document.location="service_booking_view.php";
</script>

