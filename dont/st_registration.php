<?php 
require_once('conection.php'); 
?>
 <?php 
	$Reg_Number = $_POST['Reg_Number'];
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Gender = $_POST['Gender'];
	$Email = $_POST['Email'];
	$Contact_Number = $_POST['Contact_Number'];
	$Password = $_POST['Password'];
	$Confirm_Password = $_POST['Confirm_Password'];

	//$hashed_password = sha1($Password);
	if($Password == $Confirm_Password){

	$sql = "INSERT INTO student_registration (Reg_Number,First_Name,Last_Name,Gender,Email,Contact_Number,Password,Confirm_Password) VALUES ('{$Reg_Number}','{$First_Name}','{$Last_Name}','{$Gender}','{$Email}','{$Contact_Number}','{$Password}','{$Confirm_Password}')";

	}
	else{
		echo 'password wrong';
	}
	$result = mysqli_query($connection,$sql);

	if($result){
		echo 'record added';
	}
	else{
		//echo 'fail';
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="css/st_registration.css">
</head>
<body>
	<a href="#"><img src="C:\Users\pc\Desktop\project\img\11.png" width="25"></a>
		<div class="loginbox">
			<h1>Create Account</h1>
			<form action="st_registration.php" method="post">
				<table align="left" cellpadding="15">
					<tr>
						<td>Registration Number</td>
						<td><input type="text" name="Reg_Number" placeholder="Enter your Reg-No" required></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="First_Name" placeholder="Enter your First Name" required></td>
					</tr>
						<td>Last Name</td>
						<td><input type="text" name="Last_Name" placeholder="Enter your Last Name" required></td>
					</tr>
					
					<tr>
						<td>Gender</td>
						<td><input type="radio" name="Gender" value= "M" required>Male
							<input type="radio" name="Gender" value= "F" required>Female
						</td>
					</tr>
					<tr>
						<td>E-mail Address</td>
						<td><input type="text" name="Email"  placeholder="Enter your E-mail" required></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<td><input type="text" name="Contact_Number" placeholder="Enter your Mobile Number" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="Password" placeholder="Enter your Password" required></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="Confirm_Password" placeholder="Renter your Password" required></td>
					</tr>
				</table>
					<input type="submit" value="Submit">
			</form>
		</div>

</body>
</html>