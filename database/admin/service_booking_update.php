<?php
include('dbconnect.php');
$booking_id=$_POST['booking_id'];
$customer_id=$_POST['customer_id'];
$booking_date=$_POST['booking_date'];
$booking_time=$_POST['booking_time'];
$booking_status=$_POST['booking_status'];

$sql="update service_booking set customer_id='$customer_id',booking_date='$booking_date',booking_time='$booking_date',booking_status='$booking_status' where booking_id='$booking_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("values Updated....");
document.location="service_booking_view.php"
</script>
