<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Local Service</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<style>
		.valerr{    color: #FF5722;
    font-weight: bold;}
		</style>
<script type="text/javascript">
function valfname()
{
   var fname=document.getElementById("form-full-name").value;
   if(fname=="" || fname==null)
   {
   document.getElementById("fname-err").innerHTML="* Name can not be blank";
   }
   else
   {
   document.getElementById("fname-err").innerHTML="";
   }
}
function valaddress()
{
   var address=document.getElementById("form-address").value;
   if(address=="" || address==null)
   {
   document.getElementById("address-err").innerHTML="* Address can not be blank";
   }
   else
   {
   document.getElementById("address-err").innerHTML="";
   }
}
function valmobile()
{
   var mobile=document.getElementById("form-mobile").value;
   if(mobile=="" || mobile==null)
   {
   document.getElementById("mobile-err").innerHTML="* Mobile can not be blank";
   }
   else
   {
      if(validateMobile(mobile)) 
       document.getElementById("mobile-err").innerHTML="";
	  else
	   document.getElementById("mobile-err").innerHTML="* Please Enter a 10 digit Mobile number"; 
   }
}

function valemail()
{
   var email=document.getElementById("form-email").value;
   if(email=="" || email==null)
   {
   document.getElementById("email-err").innerHTML="* Email can not be blank";
   }
   else
   {
      if(validateEmail(email)) 
         document.getElementById("email-err").innerHTML="";
	  else
         document.getElementById("email-err").innerHTML="* Please enter a valid email address";
   }
}
function valpassword()
{
   var password=document.getElementById("form-password").value;
   if(password=="" || password==null)
   {
   document.getElementById("password-err").innerHTML="* Password can not be blank";
   }
   else
   {

	  if(password.length<6)
	    document.getElementById("password-err").innerHTML="* Password should contain minimum of 6 characters";
	  else
        document.getElementById("password-err").innerHTML="";
   }
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validateMobile(mobile) {
    var re = /^[[0-9]{10,12}$/;
    return re.test(mobile);
}

function reg()
{
   var vfname=false,vaddr=false,vmob=false,vpwd=false,vemail=false;
   var fname=document.getElementById("form-full-name").value;
   if(fname=="" || fname==null)
   {
   document.getElementById("fname-err").innerHTML="* Name can not be blank";
   }
   else
   {
   document.getElementById("fname-err").innerHTML="";
   vfname=true;
   }
   var address=document.getElementById("form-address").value;
   if(address=="" || address==null)
   {
   document.getElementById("address-err").innerHTML="* Address can not be blank";
   }
   else
   {
   document.getElementById("address-err").innerHTML="";
   vaddr=true;
   }
   
   var mobile=document.getElementById("form-mobile").value;
   if(mobile=="" || mobile==null)
   {
   document.getElementById("mobile-err").innerHTML="* Mobile can not be blank";
   }
   else
   {
      if(validateMobile(mobile)) 
	  {
       document.getElementById("mobile-err").innerHTML="";
	   vmob=true;
	  }
	  else
	   document.getElementById("mobile-err").innerHTML="* Please Enter a 10 digit Mobile number"; 
   }
   
   var email=document.getElementById("form-email").value;
   if(email=="" || email==null)
   {
   document.getElementById("email-err").innerHTML="* Email can not be blank";
   }
   else
   {
      if(validateEmail(email)) 
	  {
         document.getElementById("email-err").innerHTML="";
		 vemail=true;
	  }
	  else
         document.getElementById("email-err").innerHTML="* Please enter a valid email address";
   }
   
   var password=document.getElementById("form-password").value;
   if(password=="" || password==null)
   {
   document.getElementById("password-err").innerHTML="* Password can not be blank";
   }
   else
   {

	  if(password.length<6)
	    document.getElementById("password-err").innerHTML="* Password should contain minimum of 6 characters";
	  else
	  {
        document.getElementById("password-err").innerHTML="";
		vpwd=true;
	  }
   }
   if(vfname && vmob && vemail && vaddr && vpwd)
     document.getElementById("rform").submit();
}
</script>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Sahara <span style="color:#FFC90E;" >Service</span></strong></h1>
                                                   </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our Sahara Service</h3>
	                            		<p>Enter email and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="log_check.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="text" name="username" placeholder="Email..." class="form-username form-control" id="username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" id="rform" action="register.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-full-name">Full Name</label>
				                        	<input type="text" name="form-full-name" placeholder="Full name..." class="form-full-name form-control" id="form-full-name" onBlur="valfname()">
											<div id="fname-err" class="valerr"></div>
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-address">Address</label>
				                        	<input type="text" name="form-address" placeholder="Address..." class="form-address form-control" id="form-address"  onBlur="valaddress()">
											<div id="address-err" class="valerr"></div>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-mobile">Mobile</label>
				                        	<input type="text" name="form-mobile" placeholder="Mobile..." class="form-mobile form-control" id="form-mobile"  onBlur="valmobile()">
											<div id="mobile-err" class="valerr"></div>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email"  onBlur="valemail()">
											<div id="email-err" class="valerr"></div>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password"  onBlur="valpassword()">
											<div id="password-err" class="valerr"></div>
				                        </div>
				                        <button type="button" class="btn" onClick="reg()">Sign me up!</button>

				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Desging & Developed By VRUSHABH A.K & SHRAVAN G<a href="#" target="_blank"><strong></strong></a>. <i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>