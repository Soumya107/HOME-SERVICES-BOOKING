<?php
include('dbconnect.php');
$customer_id=$_POST['customer_id'];
$payment=$_POST['payment'];
$payment_date=$_POST['payment_date'];
$payment_mode=$_POST['payment_mode'];

$sql="insert into payment_type values(null,'$customer_id','$payment','$payment_date','$payment_mode') ";
mysqli_query($conn,$sql);



?>
<script>
alert("values inserted ...")
document.location="payment_type_view.php";
</script>