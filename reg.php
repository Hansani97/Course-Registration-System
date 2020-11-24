<?php 
require_once('conection.php'); 
?>
 <?php 

 	$mysqli = new mysqli('localhost','root','','one_year_project') or die(mysqli_error($mysqli));

	$Reg_Number = $_POST['Reg_Number'];
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Gender = $_POST['Gender'];
	$Email = $_POST['Email'];
	$Contact_Number = $_POST['Contact_Number'];
	$Password = $_POST['Password'];
	$Confirm_Password = $_POST['Confirm_Password'];


	// if(strlen($Reg_Number) != 17) {
	// 	$reg_error = 'Your Registration Number is invalid';
	// }
	// if(strlen($Contact_Number) != 10) {
	// 	$mobi_error = 'Your Mobile Number is invalid';
	// }
	// // if(strlen($Password) < 8) {
	// // 	$pass_error = 'Your password minimum length of 8';
	// // }
	// else{

	$hashed_password = sha1($Password);
	if($Password == $Confirm_Password){

	$sql = "INSERT INTO student_registration (Reg_Number,First_Name,Last_Name,Gender,Email,Contact_Number,Password,Confirm_Password) VALUES ('{$Reg_Number}','{$First_Name}','{$Last_Name}','{$Gender}','{$Email}','{$Contact_Number}','{$Password}','{$Confirm_Password}')";

	}
	else{
		echo 'password wrong';
	}
	$result = mysqli_query($connect,$sql);

	if($result){
		echo "<script>alert('Record Added')</script> ";
		header("location:login.php");
	}

	include('st_registration1.php');
 ?>