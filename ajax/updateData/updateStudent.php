<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);
//$data = array();
 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);
foreach ($_POST as $key => $value )
{
	$data = explode('|', $value);
	$columnName = $key;
	$valuq = $value;
}
$ADMISSION_ID = $_POST['ADMISSION_ID'];
	$abslist = "UPDATE `student_info1` SET $columnName ='$valuq' WHERE `ADMISSION_ID`='$ADMISSION_ID'";	
	$abslistexe = mysql_query($abslist);
	while($row = mysql_fetch_array($abslistexe)){
	$data = $row;
	}
	print json_encode($data);
	?>