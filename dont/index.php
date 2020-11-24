<?php

include('conection.php');

/*$Year = '';
$query = "SELECT DISTINCT Year FROM ict,bst,ent,bpt,eet,mtt,fdt ORDER BY Year ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $Year .= '<option value="'.$row['Year'].'">'.$row['Year'].'</option>';
}
*/
?>

<html>
 <head>
  <title>Student course Registration</title>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Fill Your Details</h3>
   <br />
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <div class="form-group" align="center">
      <select name="filter_year" id="filter_year" class="form-control" required>
       <option value="">Select Year</option>
       <option value="1st">First</option>
       <option value="2nd">Second</option>
       <option value="3rd">Third</option>
       <option value="4th">Fourth</option>
      </select>
     </div>
     <div class="form-group" align="center">
      <select name="filter_semester" id="filter_semester" class="form-control" required>
        <option value="">Select Semester</option>
        <option value="1st">First</option>
        <option value="2nd">Second</option>
      </select>
     </div>
     <div class="form-group" align="center">
      <select name="filter_semester" id="filter_semester" class="form-control" required>
        <option value="">Select Department</option>
        <option value="ICT">ICT</option>
        <option value="BST">BST</option>
        <option value="ENT">ENT</option>
        <option value="EET">EET</option>
        <option value="MTT">MTT</option>
        <option value="BPT">BPT</option>
        <option value="FDT">FDT</option>
      </select>
     </div>
     <div class="form-group" align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <div class="table-responsive">
    <table id="student_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="30%">Course Title</th>
       <th width="10%">Course Code</th>
       <th width="15%">Status</th>
       <th width="15%">Credit</th>
       <th width="15%">Year</th>
       <th width="15%">Semester</th>
       <th width="15%">Department</th>
      </tr>
     </thead>
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fill_datatable();
  
  function fill_datatable(filter_year = '', filter_semester = '', filter_department = '')
  {
   var dataTable = $('#student_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
       url:"fetch.php",
       type:"POST",
       data:{
        filter_year:filter_year, filter_semester:filter_semester, filter_department:filter_department
       }
    }
   });
  }
  
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
  
  
 });
 
</script>