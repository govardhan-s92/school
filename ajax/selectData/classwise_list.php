<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);
	
	
	$data = array();
 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);

$class=$_POST['name'];
//$class="10";
@extract($_POST);

if($class!=""){
	   $abslist = "SELECT *,  lpad(rollNumber, 2, 0) as roll FROM v_studentlist LEFT JOIN tbl_class ON v_studentlist.CLASS_ID=tbl_class.CLASS_ID WHERE v_studentlist.CLASS_ID='$class' ORDER BY v_studentlist.rollNumber";	
	}

	$abslistexe = mysql_query($abslist);
	while($row = mysql_fetch_array($abslistexe)){
	$data[] = $row;
	}
	print json_encode($data);
	
	
	?>
	