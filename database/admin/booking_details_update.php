<?php
include('dbconnect.php');
$booking_detail_id=$_POST['booking_detail_id'];
$booking_id=$_POST['booking_id'];
$worker_id=$_POST['worker_id'];
$service_id=$_POST['service_id'];
$status=$_POST['service_status'];
$ser_detail=$_POST['service_data'];
$note=$_POST['note'];
$sql="update booking_details set booking_id='$booking_id',worker_id='$worker_id',service_id='$service_id',service_status='$status',service_detail='$ser_detail',note='$note' where booking_detail_id='$booking_detail_id'";

mysqli_query($conn,$sql);



?>
<script>
alert("values Updated....");
document.location="booking_details_view.php"
</script>



