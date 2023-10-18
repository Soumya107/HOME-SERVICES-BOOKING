<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Effective Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>

	<div class="video-w3l" data-vide-bg="video/1">
		<!--header-->
		<div class="header-w3l">
			<h1>
				<span>L</span>ocal
				<span>S</span>ervices
				<span>R</span>egister
				<span>F</span>orm
			</h1>
		</div>
		<!--//header-->
		<div class="main-content-agile">
			<div class="sub-main-w3">
				<h2>Register Here
					<i class="fa fa-hand-o-down" aria-hidden="true"></i>
				</h2>
		
		<form class="form" method="post" id="formID" name="formID" action="customer_insert.php">
		<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
			<input type="text" placeholder="Customer Name" name="c_name" class="user validate[required]">
		</div>	
		<div class="pom-agile">
		<label>DOB:</label>
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<input type="date" placeholder="Date of Birth" name="c_dob" class="user validate[required,custom[date]]">
			</div>	
		<div class="pom-agile">
		<label>Gender:</label>
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<select name="gender" class="user">
			
  <option>Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
</div>	
		<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<input type="text" placeholder="Address" name="c_add" class="user" class=" validate[required]">
			</div>	
		<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<input type="text" placeholder="Mobile" name="c_mob" class="user validate[required,custom[mobile]]">
			</div>	
		<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<input type="text" placeholder="Email-Id" name="c_email" class="user validate[required,custom[email]]">
			</div>	
		<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<input type="password" placeholder="Password" name="password" class="pass validate[required]" minlength="6">
			</div>	
		<div class="pom-agile">
		<label>Security Question:</label>
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<select name="hint_qtn" class="user">
			
  <option>Select Security Question</option>
  <option>Which is your favourite color?</option>
  <option>Which is your favourite city?</option>
  <option>Where did you born?</option>
</select>
</div>	
<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>	
			<input type="password" placeholder="Security Answer" name="hint_ans" class="pass validate[required]">
			</div>	
			<div class="right-w3l">
						<input type="submit" value="Register">
					</div>
			<div class="sub-w3l">
					<a href="login.php">Already Registered? Login Here</a>
						<div class="clear"></div>

					</div>
		</form>
		
	</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2022 Hocal Services. All rights reserved | Desging & Developed By 
				<a href="#"></a>
			</p>
		</div>
		<!--//footer-->
	</div>

	<!-- js -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<!-- //js -->

	<!-- //js -->
<?php include('val.php');?>
</body>

</html>