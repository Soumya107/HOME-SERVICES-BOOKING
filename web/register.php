<?php session_start(); 

include('connect.php');
$fname=$_POST["form-full-name"];
$address=$_POST["form-address"];
$mobile=$_POST["form-mobile"];
$email=$_POST["form-email"];
$password=$_POST["form-password"];
$sql="insert into register values(null,'$fname','$email','$mobile','$address')";
$res=mysqli_query($conn,$sql);
$sql="insert into login values('$email','$password','user','active')";
$res=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("Registered Successfully");
document.location="login.php";
</script>
