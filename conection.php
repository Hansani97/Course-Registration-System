<?php 
	$connect = mysqli_connect('localhost','root','','one_year_project');

	if(mysqli_connect_errno()){
		die('database connection fail' .mysqli_connect_error());

	}
	else{
		//echo 'conection succsess';
	}
 ?>