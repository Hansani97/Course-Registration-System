<?php 
require_once('conection.php'); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Change ID</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="jquery.min.js"></script>
</head>

	<div class="about-bottom">
	<div class="col-md-6 pd_about_bottom_left">
		<div class="grid-single-page-agileits1">
		<img src="img/8.jpeg" alt="" class="img-responsive" /> </div>
		</div>
	</div>
	<div class="col-md-6 pd_about_bottom_right">
		<div class="abt-pd">
			<div class="header-pd">
				<h2>Change ID</h2>
				<h4>Enter the Following Details</h4>
				<form action="" method="post" class="mod2">
					<div class="col-md-8 col-xs-8 pd-left-mk">
						<ul>
							<li class="text1">Current Key ID :  </li>
							<li class="agileits-main1"><i class="fa fa-key" aria-hidden="true"></i><input name="oldpw" type="password" required=""></li>
							
							<li class="text1">New Key ID :  </li>
							<li class="agileits-main1"><i class="fa fa-lock" aria-hidden="true"></i>
							<input  name="newpw" type="password" value="" required="" /></li>

							<li class="text1">Show Key ID :  </li>
							<li class="agileits-main1"><i class="fa fa-lock" aria-hidden="true"></i><input  name="confpw" type="password" value="" required="" /></li>
						</ul>
						<div class="btn">
						<input type="submit" name="submit" value="Save" class="btn btn-warning">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<?php
session_start();
	$profile = $_SESSION['user_name'];

	if($profile){

	}
	// else{
	// 	header('location:change-id.php');
	// }

	if(isset($_POST['submit'])){
		$oldpw = $_POST['oldpw'];
		$newpw = $_POST['newpw'];
		$confpw = $_POST['confpw'];

		$query = "SELECT Password FROM admin WHERE User_Name='$profile'";
		$result = mysqli_query($query,$connect);

		while($row=mysqli_fetch_array($result)){
			$Pass=$row['Password'];

			if($Pass==$oldpw){
				if($newpw==$confpw){
					$q = "UPDATE admin SET Password='$confpw' WHERE User_Name='$profile' ";
					$update=mysqli_query($connect,$q);

					if($update){
						echo 'new password & confirm password do not mathch';
					}

				}
				else{
					echo 'new password & confirm password do not mathch';
				}
			}
			else{
					echo 'new password & confirm password do not mathch';
				}
		}
	}




?>

</body>
</html>