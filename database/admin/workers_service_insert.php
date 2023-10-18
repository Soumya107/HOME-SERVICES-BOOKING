<?php
include('dbconnect.php');
$worker_id=$_POST['worker_id'];
$service_id=$_POST['service_id'];
$service_charge=$_POST['service_charge'];





 echo $sql="insert into workers_service values(null,'$worker_id','$service_id','$service_charge')";
mysqli_query($conn,$sql);
?>
<script>
alert("value inserted");
document.location="workers_service_view.php"
</script>