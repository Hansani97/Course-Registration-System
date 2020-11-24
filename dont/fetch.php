<?php 
include('conection.php');

$column=array('Course Title','Course Code','Status','Credit','Year','Semester','Department');
$query="select * from ict,bst,ent,bpt,fdt,eet,mtt";

if (isset($_POST['filter_year'],$_POST['filter_semester'],$_POST['filter_department']) && $_POST['filter_year'] != '' && $_POST['filter_semester'] != '' && $_POST['filter_department'] != '' )
{
	$query.='where Year="'.$_POST['filter_year'].'" and Semester="'.$_POST['filter_semester'].'" and Department="'.$_POST['filter_department'].'"';
	
}
if(isset($_POST['order'])){
	$query.='ORDER BY'.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';

}

else{
	$query.='ORDER BY Year DESC';
}

$query1='';
if ($_POST['length'] != -1) {
	$query1='LIMIT'.$_POST['start'].','.$_POST['length'];

}
$statement=$connect->prepare($query);
$statement->execute();
$number_filter_row=$statement->rowCount();
$statement=$connect->prepare($query.$query1);
$statement->execute();
$result=$statement->fetchAll();
$data=array();

foreach ($result as $row) {
	$sub_array=array();
	$sub_array[]=$row['Course Title'];
	$sub_array[]=$row['Course Code'];
	$sub_array[]=$row['Status'];
	$sub_array[]=$row['Credit'];
	$sub_array[]=$row['Year'];
	$sub_array[]=$row['Semester'];
	$sub_array[]=$row['Department'];
	$data[]=$sub_array;
}

function count_all_data($connect){
	$query="select * from ict,ent,bst,fdt,bpt,mtt,eet";
	$statment=$connect->prepare($query);
	$statment->execute();
	return $statment->rowCount();

}

$output=array(
	'draw'=>intval($_post['draw']),
	'recordsTotal'=>count_all_data($connect),
	'data'=>$data

);
echo json_encode($output);

?>
