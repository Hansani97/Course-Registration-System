<?php
	
	if(isset($_POST)){
		$Year = $_POST['Year'];
		$valueTosearch = $_POST['valueTosearch'];
		$query = "SELECT * FROM `ict` WHERE Year="$Year" ";
		$search_result = filterTable($query);
	}

	else{
		echo 'Not match data';

	}

	function filterTable($query){
		$connect=mysqli_connect('localhost','root','','one_year_project');
		$filter_result=mysqli_query($connect,$query);
		return $filter_result;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Registration</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/course-reg.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="#" class="navbar-brand text-light"><i class="fa fa-pencil-square-o"></i>Course Registration System</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>t
		</button>
			<div class="collapse navbar-collapse" id="menu">	
			<ul class="navbar-nav">
				<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-home"></i>Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user-o"></i>About</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-phone"></i>contact</a></li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<div class="dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
					 	<i class="fa fa-id-badge"></i>Tech Info</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Profile</a>
							<a href="#" class="dropdown-item">Setting</a>
							<a href="#" class="dropdown-item">Theme</a>
							<a href="#" class="dropdown-item">About Us</a>
						</div>
					</div>
				</li>
				<li class="nav-item">
					 <a href="#" class="nav-link">
					 	<i class="fa fa-sign-out"></i>Logout
					 </a>
				</li>
			</ul>
		</div>
	</nav>
		<div class="row1">
			<div class="row">
				<div class="col-12">
					<a href="#"><i class="fa fa-bar-chart"></i>Dashboard</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<h1>Course registration form</h1>
			<form>	
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputyear">Name with Initial</label>
						<i class="fa fa-user-o"></i>
						<input type="text" name="" class="form-control" required="">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputregno">Registration Number</label>
						<i class="fa fa-pencil-square-o"></i>
						<input type="text" name="" class="form-control" required="">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="reg">
							<label for="inputindex">Index Number</label>
							<i class="fa fa-pencil-square-o"></i>
							<input type="text" name="" class="form-control">
						</div>
					</div>
				</div>
					<div class="form-row">
					<div class="form-group col-md-3">
							<label for="inputyear">Academic Year</label>
							<select id="inputyear" class="form-control" name="Year">
								<option selected value="1st">First Year</option>
								<option value="2nd">Second Year</option>
								<option value="3rd">Third Year</option>
								<option value="4th">Fourth Year</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="inputyear">Semester</label>
							<select id="inputyear" class="form-control" name="sem">
								<option selected>First Semester</option>
								<option>Second Semester</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="inputyear">Department</label>
							<select id="inputyear" class="form-control" name="Department">
								<option selected>ICT</option>
								
								<option>ENT</option>
								<option>MTT</option>
								<option>EET</option>
								
								<option>BST</option>
								<option>BPT</option>
								<option>FDT</option>
							</select>
						</div>
						<div class="search">
				<label>Search</label>
				<input type="" name="valueTosearch" 
				value="" placeholder="Value To Search">
				<button type="submit" name="search" class="btn btn-warning">Search</button><br><br><br>
			</div>
				</div>
				
				</table>
					<input type="submit" value="SUBMIT" class="btn btn-outline-warning">
			</form>
	</div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>