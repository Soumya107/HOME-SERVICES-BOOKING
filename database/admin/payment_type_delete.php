<?php
include('dbconnect.php');
$payment_det_id=$_REQUEST['p_id'];
$sql="delete from payment_type where payment_id='$payment_det_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted....");
document.location="payment_type_view.php";
</script>
