<?php
	$mysqli = new mysqli('localhost','root','','one_year_project') or die(mysqli_error($mysqli));

	$Email= $_POST['Email'];
	$Password = $_POST['Password'];

	$Email = stripcslashes($Email);
	$Password = stripcslashes($Password);
	
	$result = $mysqli->query("SELECT * FROM admin_login WHERE Email = '$Email' and Password = '$Password'") or die($mysqli->error());
	$row = $result->fetch_array();
	if($row['Email'] == $Email && $row['Password'] == $Password){
		echo "Login Success!!! Welcome";

		header("location: admin-dashboard.php");
	}
	else{
		echo 'Email or Password not correct';
		header("location: admin-login.php");
	}

?>
