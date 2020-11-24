<!-- <!DOCTYPE html>
<html>
<head>
	<title></title> -->
	<link rel="stylesheet" type="text/css" href="css/fetch.css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#fetchval").on('change',function(){
				var value = $("#fetchval").val();
				$.ajax({
					url:'fetch.php',
					type:'POST',
					data:'request='+value,
					beforeSend:function(){
						$("#table-container").html('Working on...');
					},
					success:function(data){
						$("#table-container").html(data);
					},

				});
			});
		});
		$('#filter').click(function(){
		   var filter_year = $('#filter_year').val();
		   var filter_semester = $('#filter_semester').val();
		   var filter_department = $('#filter_department').val();
		   if(filter_year != '' && filter_semester != '' && filter_department != '')
		   {
		    $('#student_data').DataTable().destroy();
		    fill_datatable(filter_year, filter_semester, filter_department);
		   }
		   else
		   {
		    alert('Select Both filter option');
		    $('#student_data').DataTable().destroy();
		    fill_datatable();
		   }
		  });
  
	</script>
<!-- </head>
<body> -->
	<div id="ab">Fetch Result:</div>
	<select id="fetchval" name="fetchby">
		<option value="First">First</option>
		<option value="Second">Second</option>
		<option value="Third">Third</option>
		<option value="Fourth">Fourth</option>
	</select>
	<div class="form-group" align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
	<br><br><br>
	<table border="1">
	<div id="table-container">
		<?php

			$conn=mysqli_connect('localhost','root','','one_year_project');
			$query="select * from ict";
			$result=mysqli_query($conn,$query);
			echo '<tr>';
			echo '<th>Course_Title</th>';
			echo '<th>Course_Code</th>';
			echo '<th>Status</th>';
			echo '<th>Credit</th>';
			echo '<th>Year</th>';
			echo '<th>Semester</th>';
			echo '<th>Department</th>';
			echo '</tr>';
			while($output=mysqli_fetch_assoc($result)){
				echo '<tr>';
				echo'<td>'.$output['Course_Title'].'</td>';
				echo'<td>'.$output['Course_Code'].'</td>';
				echo'<td>'.$output['Status'].'</td>';
				echo'<td>'.$output['Credit'].'</td>';
				echo'<td>'.$output['Year'].'</td>';
				echo'<td>'.$output['Semester'].'</td>';
				echo'<td>'.$output['Department'].'</td>';
			};
			echo '</table>';
			mysqli_close($conn);
			?>
		
	</div>
<!-- </body>
</html> -->