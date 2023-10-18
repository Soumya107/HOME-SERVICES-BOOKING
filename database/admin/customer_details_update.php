<?php
include('dbconnect.php');
$customer_id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$sql="update customer_details set customer_name='$customer_name',date_of_birth='$dob',gender='$gender',address='$address',mobile_number='$mobile_no',email_id='$email' where customer_id='$customer_id' ";

mysqli_query($conn,$sql);


?>
<script>
alert("values Updated....");
document.location="customer_details_view.php"
</script>

	