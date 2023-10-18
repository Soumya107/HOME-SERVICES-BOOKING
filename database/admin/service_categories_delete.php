<?php
include('dbconnect.php');
$service_cat_id=$_REQUEST['ss_id'];
$sql="delete from service_categories where service_category_id='$service_cat_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted....");
document.location="service_categories_view.php";
</script>