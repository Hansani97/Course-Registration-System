<?php
	$mysqli = new mysqli('localhost','root','','one_year_project') or die(mysqli_error($mysqli));

	$Reg_Number= $_POST['Reg_Number'];
	$Password = $_POST['Password'];

	if(empty($Reg_Number)){
		$reg_error = 'Please enter Registration Number';
	}
	else if(strlen($Reg_Number) != 17) {
		$reg_error = 'Your Registration Number is invalid';
	}
	if(empty($Password)){
		$pass_error = 'Please enter Password';
	}
	else if(strlen($Password) < 8) {
		$pass_error = 'Your password need to have a minimum length of 8';
	}
	else{
		$result = $mysqli->query("SELECT * FROM student_registration WHERE Reg_Number = '$Reg_Number' and Password = '$Password'") or die($mysqli->error());
		$row = $result->fetch_array();
			if($row['Reg_Number'] == $Reg_Number && $row['Password'] == $Password){
			header("location: st-dashboad.php");
			}
			else{
			echo "<script>alert('Registration Number or Password not correct')</script> ";
			 
			}
	}
	
	include('login.php');
?>