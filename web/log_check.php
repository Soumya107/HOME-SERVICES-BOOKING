<?php session_start(); 
include('connect.php');
$username=$_POST["username"];
$password=$_POST["password"];
$sql="select * from login l,register r where l.username=r.email and username='$username' and password='$password' and usertype='user' and status='active'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
  $utype=$row["type"];
  $_SESSION["uname"]=$username;
  $_SESSION["reg_id"]=$row["reg_id"];
  $_SESSION["type"]=$utype;
  header('location:customer/order_now');
}
else
{
?>
<script type="text/javascript">
alert("Invalid user");
history.back();
</script>
<?php
}
?>