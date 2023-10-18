<?php
include('../dbconnection/dbconnect.php');
$customer_id=$_REQUEST['requestid'];



$payment=$_POST['price'];
$payment_date=date('Y-m-d');
$payment_mode=$_POST['Payment_type'];
$sql="insert into payment_type values(null,'$customer_id','$payment','$payment_date','$payment_mode') ";
mysqli_query($conn,$sql);

$sql1="update service_booking set booking_status='WORK COMPLETED' where customer_id ='$customer_id'";
$res=mysqli_query($conn,$sql1);
?>

<script>
alert("Payment Is Done");
document.location="my_payments.php";
</script>
