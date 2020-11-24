<?php
	include('conection.php');
	$Semester='';
	$query="SELECT DISTINCT Semester from ict,bst,ent,bpt,fdt,mtt,eet ORDER BY Year ASC";

	$statement=$connect->prepare($query);
	$statement->execute();
	$result=$statemnt->fetchALl();
	foreach($result as $row){
		$Semester.='<option value="'.$row['Semester'].'">'.$row['Semester'].'</option>';
	
	} 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Custom Search in JQuery Datatable using PHP AJax</title>

	<script type="text/javascript" src="js/jquery.js"></script>	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

</head>
<body>
	<div class="container box">
		<h3 align="center">Coustermer Search in Jquery Datatable using PHP</h3>
		<br>

		<div class="raw">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<select name="filter_year" id="filter_year" class="form-control" required>
						<option value="">select year</option>
						<option value="1st">First Year</option>
						<option value="2nd">Second Year</option>
						<option value="3rd">Third Year</option>
						<option value="4th">Fourth Year</option>
						
					</select>
				</div>
				<div class="form-group">
					<select name="filter_semester" id="filter_semester" class="form-control" required="">
						<option value="">select semester</option>
						<?php 
							echo $Semester;
						 ?>
					</select>
				 </div>
				<div class="form-group" align="center">
					<button type="button" name="filter" id="filter"class="btn btn-info">filter</button>
				</div>
				
			</div>
			<div class="col-md-4"></div>
			
		</div>
		<div class="table-responsive">
			<table id="student_data" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="20%">Course Title</th>
						<th width="20%">Course Code</th>
						<th width="20%">Status</th>
						<th width="20%">Credit</th>
						<th width="20%">Year</th>
						<th width="20%">Semester</th>
						<th width="20%">Department</th>
					</tr>
				</thead>
			</table>
		</div>

</body>
</html>

<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		fill_datatable();
		function fill_datatable(filter_year='',filter_semester='',filter_department=''){
			var dataTable=$('#student_data').DataTable({
				"processing":true,
				"serverSide":true,
				"order":[],
				"searching":false,
				"ajax":{
					url:"fetch.php",
					type:"POST",
					data:filter_year:filter_year,filter_semester:filter_semester,filter_department:filter_department



				}
			})
		}
	});

	$('#filter').click(function(){
		var filter_year=$('#filter_year').val();
		var filter_semester=$('#filter_semester').val();
		var filter_department=$('#filter_department').val();
		if(filter_year!=''&& filter_semester!='' && filter_department!=''){
			$('#student_data').DataTable().destroy();
			fill_datatable (filter_year,filter_semester,filter_department);
		}

		else{
			alert('select 3rd filter option');
			$('#student_data').DataTable().destroy();
			fill_datatable();
		}
	})

</script>