<?php

include('conection.php');

$column = array('Course_Title', 'Course_Code', 'Status', 'Credit', 'Year', 'Semester', 'Department');

$query = "
SELECT * FROM ict,bst,ent,bpt,eet,mtt,fdt 
";

if(isset($_POST['filter_Year'], $_POST['filter_Semester']) && $_POST['filter_Year'] != '' && $_POST['filter_Semester'] != '')
{
 $query .= '
 WHERE Year = "'.$_POST['filter_Year'].'" AND Semester = "'.$_POST['filter_Semester'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY Status DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['Course_Title'];
 $sub_array[] = $row['Course_Code'];
 $sub_array[] = $row['Status'];
 $sub_array[] = $row['Credit'];
 $sub_array[] = $row['Year'];
 $sub_array[] = $row['Semester'];
 $sub_array[] = $row['Department'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM ict";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>

