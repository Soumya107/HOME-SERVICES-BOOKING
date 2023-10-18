<?php
include('dbconnect.php');


$service_name=$_POST['service_name'];
$service_description=$_POST['service_description'];
$service_category_id=$_POST['service_category_id'];
$sql="update service_details set service_name='$service_name',service_description='$service_description' where service_category_id='$service_category_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values Updated....");
document.location="service_details_view.php"
</script>

