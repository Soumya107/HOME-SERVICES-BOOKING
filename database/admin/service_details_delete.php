<?php
include('dbconnect.php');
$service_det_id=$_REQUEST['sd_id'];
$sql="delete from service_details where service_id='$service_det_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted....");
document.location="service_details_view.php";
</script>