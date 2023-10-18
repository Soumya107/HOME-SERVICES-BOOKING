<?php
include('dbconnect.php');
$worker_det_id=$_REQUEST['w_id'];
$sql="delete from worker_details where worker_id='$worker_det_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted....");
document.location="worker_details_view.php";
</script>
