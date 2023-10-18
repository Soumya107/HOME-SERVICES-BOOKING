<?php
include('dbconnect.php');
$booking_id=$_POST['booking_id'];
$worker_id=$_POST['worker_id'];
$service_id=$_POST['service_id'];
$status=$_POST['service_status'];
$ser_detail=$_POST['service_detail'];
$note=$_POST['note'];
$sql="insert into booking_details values(null,'$booking_id','$worker_id','$service_id','$status','$ser_detail','$note')";
mysqli_query($conn,$sql);
?>
<script>
alert("values Inserted....");
document.location="booking_details_view.php"
</script>