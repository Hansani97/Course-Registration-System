<!DOCTYPE html>
 <html>
 <head>
 	<title>Login Form</title>
 	<link rel="stylesheet" type="text/css" href="css/login.css">
 	<script type="text/javascript" src="jquery.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/st-dashboad.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">	
 </head>
 <body>
 	
	<div class="container">
 	<div class="loginbox">
 	<img src="img/Capture.PNG" class="image">
 		<h1>Login Here</h1> 
		 		<form id="form" action="login-process.php" method="POST">  
		 			<p>Reg_Number</p>
		 			<input type="text" name="Reg_Number" placeholder="AAA/0000/0000/000" autocomplete="off" required>
		 			<p>Password</p>
		 			<input type="password" name="Password" placeholder="Enter Password" required>
		 			<input type="submit" name="submit" value="Login"/><br>
		 			<center><a href="#">Froget Password?</a><br>
		 			<a href="st_registration1.php">Don't have an account</a></center>
 					</form>
 				</div>
 	</div> 
 </body>
 </html>