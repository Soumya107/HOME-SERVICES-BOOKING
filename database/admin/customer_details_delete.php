<?php
include('dbconnect.php');
$customer_id=$_REQUEST['c_id'];
$sql="delete from customer_details where customer_id='$customer_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Value Deleted.....");
document.location= "customer_details_view.php"

</script>
