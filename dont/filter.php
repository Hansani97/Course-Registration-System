<!DOCTYPE html>
<html>
<head>
	<title>Filter Data</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
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
	<div class="container">
		<h3 style="color: #000; text-align: center;font-weight: bold;">Filter Data</h3>
		<div class="row">
			<div class="form-group col-md-4">
				<label for="inputyear">Reg_Number</label>
				<i class="fa fa-user-o"></i>
				<input type="text" name="Reg_Number" class="form-control" required="">
			</div>
		
			<div class="form-group col-md-4">
				<label for="inputyear">Name</label>
				<i class="fa fa-user-o"></i>
				<input type="text" name="Name" class="form-control" required="">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<label for="inputyear">Email</label>
				<i class="fa fa-user-o"></i>
				<input type="text" name="Email" class="form-control" required="">
			</div>

			<div class="form-group col-md-4">
				<label for="inputyear">Course</label>
				<i class="fa fa-user-o"></i>
				<input type="text" name="Course" class="form-control" required="">
			</div>
		</div>

		<div class="form-row">
					<div class="form-group col-md-3">
							<label for="inputyear">Year</label>
							<select id="inputyear" class="form-control" name="Year">
								<option selected value="1st">1st</option>
								<option value="2nd">2nd</option>
								<option value="3rd">3rd</option>
								<option value="4th">4th</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="inputyear">Semester</label>
							<select id="inputyear" class="form-control" name="Semester">
								<option selected>1st</option>
								<option>2nd</option>
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
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<input type="submit" name="submit" class="btn btn-primary">
					</div>
				</div>

				<div class="row">
					<table class="table table-striped table-hover">
						<th>
							<tr>
								<td>Reg_Number</td>
								<td>Name</td>
								<td>Email</td>
								<td>Course</td>
								<td>Year</td>
								<td>Semester</td>
								<td>Department</td>
							</tr>
						</th>

					<tbody>
						<?php
						include("conection.php");
						if(isset($_POST['submit'])){
							$Reg_Number=$_POST['Reg_Number'];
							$Name=$_POST['Name'];
							$Email=$_POST['Email'];
							$Course=$_POST['Course'];
							$Year=$_POST['Year'];
							$Semester=$_POST['Semester'];
							$Department=$_POST['Department'];
							

							if($Reg_Number != "" || $Name != "" || $Email != "" || $Course != "" || $Year != "" || $Semester != "" || $Department != ""){
								echo $query ="SELECT * FROM reg_details WHERE Reg_Number = '$Reg_Number' OR Name = '$Name' OR Email = '$Email ' OR Course = '$Course' OR Year = '$Year' OR Semester = '$Semester' OR Department = '$Department'";
								exit();

								$data = mysqli_query($connect,$query) or die ('error');
								if(mysqli_num_rows($data) > 0){
									while($row = mysqli_fetch_assoc($data)){
										$Reg_Number = $row['Reg_Number'];
										$Name = $row['Name'];
										$Email = $row['Email'];
										$Course = $row['Course'];
										$Year = $row['Year'];
										$Semester = $row['Semester'];
										$Department = $row['Department'];
										?>
										<tr>
											<td><?php echo $Reg_Number;?></td>
											<td><?php echo $Name;?></td>
											<td><?php echo $Email;?></td>
											<td><?php echo $Course;?></td>
											<td><?php echo $Year;?></td>
											<td><?php echo $Semester;?></td>
											<td><?php echo $Department;?></td>
										</tr>
										<?php
									}
								}
								else{
									?>
									<tr>
										<td>Record not found!</td>
									</tr>
									<?php
								}
							}
						}
						?>
					</tbody>
				</table>
				</div>
	</div>
</body>
</html>