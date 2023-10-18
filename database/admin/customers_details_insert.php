<?php
include('dbconnect.php');
$customer_name=$_POST['customer_name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$sql="insert into customer_details values(null,'$customer_name','$dob','$gender','$address','$mobile_no','$email')";
mysqli_query($conn,$sql);
?>
<script>
alert("Values Inserted.....");
document.location="customer_details_view.php"
</script>
