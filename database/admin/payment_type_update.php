<?php
include('dbconnect.php');
$payment_id =$_POST['payment_id'];
$customer_id=$_POST['customer_id'];
$payment=$_POST['payment'];
$payment_date=$_POST['payment_date'];
$payment_mode=$_POST['payment_mode'];

$sql="Update payment_type set customer_id='$customer_id',payment='$payment',payment_date='$payment_date',payment_mode='$payment_mode' where payment_id='$payment_id'";
mysqli_query($conn,$sql);



?>
<script>
alert("values Updated....");
document.location="payment_type_view.php"
</script>
