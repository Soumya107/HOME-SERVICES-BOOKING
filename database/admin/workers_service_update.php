<?php
include('dbconnect.php');
$worker_service_id=$_POST['worker_service_id']; 
$worker_id=$_POST['worker_id'];
$service_id=$_POST['service_id'];
$service_charge=$_POST['service_charge'];

$sql="update workers_service set worker_id='$worker_id',service_id='$service_id',service_charge='$service_charge' where worker_service_id='$worker_service_id' ";
mysqli_query($conn,$sql);


?>
<script>
alert("values Updated....");
document.location="workers_service_view.php"
</script>

