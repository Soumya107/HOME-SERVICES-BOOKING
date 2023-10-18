<?php session_start();?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];

include('dbconnection/dbconnect.php');
$sql="select * from login where user_name='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$_SESSION['uname']=$username;
$type=$row['type'];


if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="user")
{
$sql="select * from  customer_details where email_id='$username'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  $_SESSION["customer_id"]=$row["customer_id"];
header('location:{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

web/user_home.php');
}




}
else
