<?php 
include('dbconnect.php');
$booking_det_id=$_REQUEST['b_id'];
$sql="delete from booking_details where booking_detail_id='$booking_det_id'";
mysqli_query($conn,$sql);
?>


<script>
alert("Value Deleted Successfully");
document.location="booking_details_view.php"
</script>