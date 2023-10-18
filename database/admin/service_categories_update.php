<?php
include('dbconnect.php');
$service_category_id =$_POST['service_category_id'];
$service_category_name=$_POST['service_category_name'];
$category_icon=$_POST['category_icon'];
$sql="update service_categories set service_category_name='$service_category_name',category_icon='$category_icon' where service_category_id ='$service_category_id' ";
mysqli_query($conn,$sql);


?>
<script>
alert("values Updated....");
document.location="service_categories_view.php"
</script>
