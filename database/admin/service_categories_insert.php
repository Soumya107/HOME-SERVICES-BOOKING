<?php
include('dbconnect.php');
$service_category_name=$_POST['service_category_name'];
$category_icon=$_FILES['category_icon']['name'];
$tmp_location=$_FILES['category_icon']['tmp_name'];
$target="../img/".$category_icon;
move_uploaded_file($tmp_location,$target);
$sql= "insert into service_categories values(null,'$service_category_name','$category_icon')";
mysqli_query($conn,$sql);
?>
<script>
alert("value inserted");
document.location="service_categories_view.php"
</script>
