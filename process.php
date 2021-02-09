<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'cms') or die(mysqli_error($mysqli));

$ID = "";
$number = "";
$update = false;
$Course_Title = '';
$Course_Code = '';
$Status = '';
$Credit = '';
$Year = '';
$Semester = '';
$Department = '';

if (isset($_POST['save'])) {
	$ID = $_POST['ID'];
	$Course_Title = $_POST['Course_Title'];
	$Course_Code = $_POST['Course_Code'];
	$Status = $_POST['Status'];
	$Credit = $_POST['Credit'];
	$Year = $_POST['Year'];
	$Semester = $_POST['Semester'];
	$Department = $_POST['Department'];

	$mysqli->query("INSERT INTO courses (ID,Course_Title,Course_Code,Status,Credit,Year,Semester,Department) VALUES('$ID','$Course_Title','$Course_Code','$Status','$Credit','$Year','$Semester','$Department')") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: Update Course(admin).php");
}

if (isset($_GET['delete'])) {
	$ID = $_GET['delete'];
	$mysqli->query("DELETE FROM courses WHERE ID=$ID") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: Update Course(admin).php");
}


if (isset($_GET['edit'])) {
	$ID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM courses WHERE ID=$ID") or die($mysqli->error);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$number = $row['ID'];
		$Course_Title = $row['Course_Title'];
		$Course_Code = $row['Course_Code'];
		$Status = $row['Status'];
		$Credit = $row['Credit'];
		$Year = $row['Year'];
		$Semester = $row['Semester'];
		$Department = $row['Department'];
	} else {
		print_r(mysqli_error($mysqli));
	}
}

if (isset($_POST['update'])) {
	$ID = $_POST['ID'];
	$Course_Title = $_POST['Course_Title'];
	$Course_Code = $_POST['Course_Code'];
	$Status = $_POST['Status'];
	$Credit = $_POST['Credit'];
	$Year = $_POST['Year'];
	$Semester = $_POST['Semester'];
	$Department = $_POST['Department'];

	$mysqli->query("UPDATE courses SET Course_Title='$Course_Title',Course_Code='$Course_Code',Status='$Status',Credit='$Credit',Year='$Year',Semester='$Semester',Department='$Department' WHERE ID=$ID") or die($mysqli->error);

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header('location: Update Course(admin).php');
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
