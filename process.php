<?php
	session_start();

	$mysqli = new mysqli('localhost','root','','one_year_project') or die(mysqli_error($mysqli));

	$ID = 0;
	$update = false;
	$Course_Title ='';
	$Course_Code ='';
	$Status = '';
	$Credit ='';
	$Year ='';
	$Semester ='';
	$Department ='';

	if(isset($_POST['save'])){
		$Course_Title =$_POST['Course_Title'];
		$Course_Code =$_POST['Course_Code'];
		$Status =$_POST['Status'];
		$Credit =$_POST['Credit'];
		$Year =$_POST['Year'];
		$Semester =$_POST['Semester'];
		$Department =$_POST['Department'];

		$mysqli->query("INSERT INTO courses (Course_Title,Course_Code,Status,Credit,Year,Semester,Department) VALUES('$Course_Title','$Course_Code','$Status','$Credit','$Year','$Semester','$Department')")or die($mysqli->error);

		 $_SESSION['message'] = "Record has been saved!";
		 $_SESSION['msg_type'] = "success";

		 header("location: index.php");
	}

	if(isset($_GET['delete'])){
		$ID = $_GET['delete'];
		$mysqli->query("DELETE FROM courses WHERE ID=$ID") or die($mysqli->error());

		 $_SESSION['message'] = "Record has been deleted!";
		 $_SESSION['msg_type'] = "danger";

		 header("location: index.php");
	}


	if(isset($_GET['edit'])){
		$ID = $_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM courses WHERE ID=$ID") or die($mysqli->error());

		if(count($result)==1){
			$row = $result->fetch_array();
			$Course_Title =$row['Course_Title'];
			$Course_Code =$row['Course_Code'];
			$Status =$row['Status'];
			$Credit =$row['Credit'];
			$Year =$row['Year'];
			$Semester =$row['Semester'];
			$Department =$row['Department'];
		}
	}

	if(isset($_POST['update'])){
		$ID = $_POST['ID'];
		$Course_Title =$_POST['Course_Title'];
		$Course_Code =$_POST['Course_Code'];
		$Status =$_POST['Status'];
		$Credit =$_POST['Credit'];
		$Year =$_POST['Year'];
		$Semester =$_POST['Semester'];
		$Department =$_POST['Department'];

		$mysqli->query("UPDATE courses SET Course_Title='$Course_Title',Course_Code='$Course_Code',Status='$Status',Credit='$Credit',Year='$Year',Semester='$Semester',Department='$Department' WHERE ID=$ID") or die($mysqli->error);

		 $_SESSION['message'] = "Record has been updated!";
		 $_SESSION['msg_type'] = "warning";

		 header('location: index.php');
	}

	/*if(isset($_POST['search'])){
		$ID = $_POST['ID'];
		$Course_Title =$_POST['Course_Title'];
		$Course_Code =$_POST['Course_Code'];
		$Status =$_POST['Status'];
		$Credit =$_POST['Credit'];
		$Year =$_POST['Year'];
		$Semester =$_POST['Semester'];
		$Department =$_POST['Department'];

		$mysqli->query("SELECT * FROM courses WHERE Course_Code=$Course_Code") or die($mysqli->error);

		 $_SESSION['message'] = "Record has been updated!";
		 $_SESSION['msg_type'] = "warning";

		 header('location: index.php');
	}*/
?>