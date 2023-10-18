<?php
include('dbconnect.php');
$customer_id=$_POST['customer_id'];
$booking_date=$_POST['booking_date'];
$booking_time=$_POST['booking_time'];
$booking_status=$_POST['booking_status'];

$sql="insert into service_booking values(null,'$customer_id','$booking_date','$booking_time','$booking_status')";
mysqli_query($conn,$sql);
?>
<script>
alert("value inserted");
document.location="service_booking_form.php"
</script>
