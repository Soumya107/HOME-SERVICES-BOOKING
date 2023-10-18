<?php
include('dbconnect.php');
$worker_id=$_POST['worker_id'];
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



$sql="update worker_details set worker_name='$worker_name',gender ='$gender',date_of_birth='$dob',address='$address',qualification='$qualification',mobile_number='$mobile_no',email_id ='$email', 
work_description='$work_description',specialization='$specialization' where worker_id='$worker_id'";
mysqli_query($conn,$sql);


?>
<script>
alert("values Updated....");
document.location="worker_details_view.php"
</script>
