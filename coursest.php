<?php 
require_once('conection.php'); 
?>
 <?php 
	$name = $_POST['name'];
	$regno = $_POST['regno'];
	$index = $_POST['index'];
	
	

	$sql = "INSERT INTO student (Name,Reg_Number,Index_Number) VALUES ('{$name}','{$regno}','{$index}')";

	$result = mysqli_query($connect,$sql);

	if($result){
		echo "<script>alert('registration success')</script> ";
		header("location:st-dashboad.php");
	}
	else{
	}

	if(isset($_POST['save'])){
		$Course_Title =$_POST['Course_Title'];
		$Course_Code =$_POST['Course_Code'];
		$Status =$_POST['Status'];
		$Credit =$_POST['Credit'];
		$Year =$_POST['Year'];
		$Semester =$_POST['Semester'];
		$Department =$_POST['Department'];

		$mysqli->query("INSERT INTO reg_course (Course_Title,Course_Code,Status,Credit,Year,Semester,Department) VALUES('$Course_Title','$Course_Code','$Status','$Credit','$Year','$Semester','$Department')")or die($mysqli->error);

		$_SESSION['message'] = "Record has been saved!";
		$_SESSION['msg_type'] = "success";

		header("location: st-dashboad.php");
	}
 ?>