<!-- <?php
if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">Id</th>  
                <th width="30%">Name</th>  
                <th width="15%">Age</th>  
                <th width="50%">Email</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  

?>
 -->

<!DOCTYPE html>
<html>
<head>
	<title>Update Course Details</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="#" class="navbar-brand text-light"><i class="fa fa-pencil-square-o"></i>Course Registration System</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>t
		</button>
			<div class="collapse navbar-collapse" id="menu">	
			<ul class="navbar-nav">
				<li class="nav-item"><a href="st-dashboad.php" class="nav-link"><i class="fa fa-home"></i>Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user-o"></i>About</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-phone"></i>contact</a></li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					 <a href="logout.php" class="nav-link">
					 	<i class="fa fa-sign-out"></i>Logout
					 </a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1 align="center">Course Registration</h1>
		<form action="course.php" method="POST">
			<div class="search">

				<label>Year</label>
				<input type="text" name="Year" 
				value="" placeholder="Value To Search" autocomplete="off">

				<label>Semester</label>
				<input type="text" name="Semester" 
				value="" placeholder="Value To Search" autocomplete="off">

				<label>Department</label>
				<input type="text" name="Department" 
				value="" placeholder="Value To Search" autocomplete="off">

				<button type="submit" name="search" class="btn btn-warning">Search</button>
				
			</div>
		</form>
			<form action="coursest.php" method="POST">
			<div class="form-row">
			<div class="form-group col-md-4">
				<label>Name with initials</label>
				<input type="text" name="name" class="form-control" 
				placeholder="Enter name" required="" autocomplete="off">
			</div>
		</div>
			<div class="form-row">
			<div class="form-group col-md-4">
				<label>Registration Number</label>
				<input type="text" name="regno" class="form-control" 
				placeholder="AAA/0000/0000/000" required="" autocomplete="off">
			</div>
		</div>
			<div class="form-row">
			<div class="form-group col-md-3">
				<label>Index Number</label>
				<input type="text" name="index" class="form-control" 
				placeholder="Index Number" required="" autocomplete="off">
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Save</button><br><br>
		</form>
		<!-- <form method="POST">
			<input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" /> 
		</form> -->
		<?php require_once 'conection.php';?>


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
					<th>Select</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(isset($_POST['search'])){
						$Year = $_POST['Year'];
						$Semester = $_POST['Semester'];
						$Department = $_POST['Department'];

						if($Year != "" || $Semester != "" || $Department != ""){
							$query = "SELECT * FROM courses WHERE Year = '$Year' AND Semester = '$Semester' AND Department = '$Department'";
							$data = mysqli_query($connect,$query) or die('error');
							if(mysqli_num_rows($data) > 0){
								while($row = mysqli_fetch_assoc($data)){
									
									$Course_Title = $row['Course_Title'];
									$Course_Code = $row['Course_Code'];
									$Status = $row['Status'];
									$Credit = $row['Credit'];
									$Year = $row['Year'];
									$Semester = $row['Semester'];
									$Department = $row['Department'];
									?>
									<tr>
										
										<td><?php echo $Course_Title;?></td>
										<td><?php echo $Course_Code;?></td>
										<td><?php echo $Status;?></td>
										<td><?php echo $Credit;?></td>
										<td><?php echo $Year;?></td>
										<td><?php echo $Semester;?></td>
										<td><?php echo $Department;?></td>
										<td><input type="checkbox" name="Course_Title[]" class="chk" value="<?php echo $row['Course_Title']; ?>"></td>
									</tr>
									<?php
								}
							}
							else{
								?>
								<tr>
									<td>Records Not Found!</td>
								</tr>
								<?php
							}
						}
							
					}

				?>
				
			</tbody>
	</table>
</body>
</html>