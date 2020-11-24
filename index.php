<?php
	
	if(isset($_POST)){
		$valueTosearch = $_POST['valueTosearch'];
		$query = "SELECT * FROM `courses` WHERE CONCAT (`Course_Code`, `Status`,`Year`, `Semester`, `Department`) LIKE '%".$valueTosearch."%'";
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
	<title>Update Course Details</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="#" class="navbar-brand text-light"><i class="fa fa-pencil-square-o"></i>Course Registration System</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>t
		</button>
			<div class="collapse navbar-collapse" id="menu">	
			<ul class="navbar-nav">
				<li class="nav-item"><a href="admin-dashboard.php" class="nav-link"><i class="fa fa-home"></i>Home</a></li>
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
	<?php require_once 'process.php'; ?>

	<?php
	if(isset($_SESSION['message'])): ?>

	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif; ?>
	<div class="container">
		<h1 align="center">Course Details</h1>
		<form action="index.php" method="POST">
		<div class="form-row">
			<input type="hidden" name="ID" value="<?php echo $ID; ?>">
			<div class="form-group col-md-4">
				<label>Course Title</label>
				<input type="text" name="Course_Title" class="form-control" 
				value="<?php echo $Course_Title;?>" placeholder="Course_Title" >
			</div>
			<div class="form-group col-md-4">
				<label>Course Code</label>
				<input type="text" name="Course_Code" class="form-control" 
				value="<?php echo $Course_Code;?>" placeholder="Course_Code" >
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>Status</label>
				<input type="text" name="Status" class="form-control" 
				value="<?php echo $Status;?>" placeholder="Status" >
			</div>
			<div class="form-group col-md-4">
				<label>Credit</label>
				<input type="text" name="Credit" class="form-control" 
				value="<?php echo $Credit;?>" placeholder="Credit" >
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label>Year</label>
				<input type="text" name="Year" class="form-control" 
				value="<?php echo $Year;?>" placeholder="Year" >
			</div>
			<div class="form-group col-md-3">
				<label>Semester</label>
				<input type="text" name="Semester" class="form-control" 
				value="<?php echo $Semester;?>" placeholder="Semester" >
			</div>
			<div class="form-group col-md-3">
				<label>Department</label>
				<input type="text" name="Department" class="form-control" 
				value="<?php echo $Department;?>" placeholder="Department" >
			</div>
		</div>
			<div class="form-group">
			<?php
				if($update == true):
			?>	
				<button type="submit" name="update" class="btn btn-info">Update</button><br><br><br>
			<?php else: ?>
				<button type="submit" name="save" class="btn btn-primary">Save</button><br><br><br>
			<?php endif; ?>
		
			<div class="search">
				<label>Search</label>
				<input type="text" name="valueTosearch" value="" placeholder="Value To Search">
				<button type="submit" name="search" class="btn btn-warning">Search</button><br><br><br>
			</div>
		</form>
		<?php 
		$mysqli = new mysqli('localhost','root','','one_year_project') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM courses")or die($mysqli->error);
		?>



		<div class="row">
		<table class="table" border="2px solid">
			<thead>
				<tr>
					<th>Course_Title</th>
					<th>Course_Code</th>
					<th>Status</th>
					<th>Credit</th>
					<th>Year</th>
					<th>Semester</th>
					<th>Department</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
		<?php
			while ($row = mysqli_fetch_array($search_result)):
		?>
			<tr>
				<td><?php echo $row['Course_Title']?></td>
				<td><?php echo $row['Course_Code']?></td>
				<td><?php echo $row['Status']?></td>
				<td><?php echo $row['Credit']?></td>
				<td><?php echo $row['Year']?></td>
				<td><?php echo $row['Semester']?></td>
				<td><?php echo $row['Department']?></td>
				<td>
					<a href="index.php?edit=<?php echo $row['ID']; ?>" class="btb btn-warning">Update</a>

					<a href="index.php?delete=<?php echo $row['ID']; ?>" class="btb btn-danger">Delete</a>
				</td>
			</tr>

	<?php endwhile ; ?>
	</table>
	</div>
	<?php
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>

	</div>
</body>
</html>