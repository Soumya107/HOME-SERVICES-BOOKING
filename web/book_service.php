<?php
session_start();
include('../admin/dbconnect.php');
$worker_id=$_POST['worker_id'];
$service_id=$_POST['service_id'];
$service_status="pending";
$service_details=$_POST['service_details'];
$booking_time=$_POST["booking_time"];
$note=$_POST['note'];
$customer_id=$_SESSION['customer_id'];
$booking_date=$_POST['b_date'];

 echo $sql="select * from booking_details t1,service_booking t2,worker_details t3,service_details t4 where t1.booking_id=t2.booking_id and t1.worker_id=t3.worker_id and t1.service_id=t4.service_id and t1.worker_id='$worker_id' and t2.booking_time='$booking_time'";
  $res=mysqli_query($conn,$sql);
  if($row=mysqli_fetch_array($res))
  {
  ?>
  <script type="text/javascript">
  alert("Worker is already booked on the selected date and time.Select Different");
  history.back();
  </script>
  <?php
  }
  else
  {
$sql="insert into service_booking values(null,'$customer_id','$booking_date','$booking_time','pending')";
mysqli_query($conn,$sql);
$booking_id=mysqli_insert_id($conn);
$sql="insert into booking_details values(null,'$booking_id','$worker_id','$service_id','pending','$service_details','$note')";
mysqli_query($conn,$sql);
?>
<script>
alert("Service Booked Successfully");
document.location="user_home.php";
</script>
<?php
}
?>