  <?php
	require_once('conection.php');
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Gender = $_POST['Gender'];
	$Contact_Number = $_POST['Contact_Number'];
	$Reg_Number = $_POST['Reg_Number'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Confirm_Password = $_POST['Confirm_Password'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'cms');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		if ($Password == $Confirm_Password) {

			$hashed_password = sha1($Password);
			$sql = "INSERT INTO student_registration(Reg_Number,First_Name,Last_Name,Gender,Email,Contact_Number,Password,Confirm_Password) values('{$Reg_Number}','{$First_Name}', '{$Last_Name}', '{$Gender}', '{$Email}', $Contact_Number,'{$hashed_password}', '{$Confirm_Password}')";
			$sq = "INSERT INTO student(Reg_Number,Name) values('{$Reg_Number}','{$First_Name}')";
			$result = mysqli_query($conn, $sql);
			$resul = mysqli_query($conn, $sq);
		} else {
			echo ("password does not Match");
		}

		if ($result && $resul) {
			echo "Registration successfully...";
			header("Location:Login.php?reg=succ");
		}
		/*$stmt = $conn->prepare("insert into student_registration(Reg_Number, First_Name,Last_Name, Gender, Email, Contact_Number, Password, Confirm_Password) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssi", $First_Name, $Last_Name , $Gender, $Contact_Number, $Reg_Number, $Email, $Password, $Confirm_Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();*/
	}
	?>