<?php
include('dbconnect.php');
$worker_ser_id=$_REQUEST['ws_id'];
$sql="delete from workers_service where worker_service_id ='$worker_ser_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted....");
document.location="workers_service_view.php";
</script>
