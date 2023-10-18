<?php
include('dbconnect.php');
$worker_name=$_POST['worker_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$qualification=$_POST['qualification'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email_id'];
$work_description=$_POST['work_description'];
$experience=$_POST['experience'];
$specialization=$_POST['specialization'];
$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../img/".$photo;
move_uploaded_file($tmp_location,$target);



$sql="insert into worker_details values(null,'$worker_name','$gender','$dob','$address','$qualification','$mobile_no','$email','$work_description','$experience','$specialization','$photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("value inserted");
document.location="worker_details_view.php"
</script>