<?php
	$connect = mysqli_connect('localhost','root','','cms');

	if(mysqli_connect_errno()){
		die('database connection fail' .mysqli_connect_error());

	}
	else{
		echo 'conection succsess';
	}

	$Email= $_POST['Email'];
	$Password = $_POST['Password'];

	$Email = stripcslashes($Email);
	$Password = stripcslashes($Password);
	
	$result = $connect->query("SELECT * FROM admin_login WHERE Email = '$Email' and Password = '$Password'") or die($connect->error());
	$row = $result->fetch_array();
	if($row['Email'] == $Email && $row['Password'] == $Password){
		echo "Login Success!!! Welcome";
		header("location: Admin Dashboard.php");
	}
	else{
		echo 'Email or Password not correct';
		header("location: Admin Login.php");
		
	}

?>
