<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Change ID</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php include_once('conection.php');

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$ckey = $_POST['ckey'];
		$nkey = $_POST['nkey'];
		$cnfkey = $_POST['cnfkey'];

		$query = mysqli_query($connect,"SELECT Email,Password FROM admin_login WHERE Email='$email' AND Password='$ckey' ");
		$num = mysqli_fetch_array($query);

		if($nkey == $cnfkey){
			if($num>0){
				$con = mysqli_query($connect,"UPDATE admin_login SET Password='$nkey' WHERE Email='$email' ");
				echo "Password Change Successfully";
				header("location: admin-dashboard.php");
				//$_SESSION['msg1'] = "Password Change Successfully";
			}
		}
			else{
				echo "Password does not match";
				//$_SESSION['msg2'] = "Password does not match";
			}
	}
	?>
	

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
							<li class="text1">E-mail Address :  </li>
							<li class="agileits-main1"><i class="fa fa-envelope" aria-hidden="true"></i><input name="email" type="text" required="" autocomplete="off"></li>
							<li class="text1">Current Key ID :  </li>
							<li class="agileits-main1"><i class="fa fa-key" aria-hidden="true"></i><input name="ckey" type="password" required="" autocomplete="off"></li>
							<li class="text1">New Key ID :  </li>
							<li class="agileits-main1"><i class="fa fa-lock" aria-hidden="true"></i><input  name="nkey" type="password" value="" required="" autocomplete="off"></li>
							<li class="text1">Confirm New Key ID :  </li>
							<li class="agileits-main1"><i class="fa fa-lock" aria-hidden="true"></i><input  name="cnfkey" type="password" value="" required="" autocomplete="off"></li>
						</ul>
						<div class="btn">
						<input type="button" name="" value="Reset" class="btn btn-warning">
						<input type="submit" name="submit" value="Save" class="btn btn-warning">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
</body>
</html>