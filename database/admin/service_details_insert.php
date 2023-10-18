<?php
include('dbconnect.php');
$service_name=$_POST['service_name'];
$service_description=$_POST['service_description'];
$service_category_id=$_POST['service_category_id'];


$sql="insert into service_details values(null,'$service_name','$service_description','$service_category_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("value inserted");
document.location="service_details_view.php"
</script>