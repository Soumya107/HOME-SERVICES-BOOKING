<?php
include('dbconnection/dbconnect.php');
$customer_name=$_POST['c_name'];
$date_of_birth=$_POST['c_dob'];
$gender=$_POST['gender'];
$address=$_POST['c_add'];
$mobile_no=$_POST['c_mob'];
$email=$_POST['c_email'];
$password=$_POST['password'];
$hint_qtn=$_POST['hint_qtn'];
$hint_ans=$_POST['hint_ans'];

$sql="insert into customer_details values(null,'$customer_name','$date_of_birth','$gender','$address','$mobile_no','$email')";
mysqli_query($conn,$sql);

$sql1=" insert into login values('$email','$password','user','$hint_qtn','$hint_ans','active')";
mysqli_query($conn,$sql1);
?>


<script>
alert(" customer detail inserted....");
document.location="login.php";
</script>