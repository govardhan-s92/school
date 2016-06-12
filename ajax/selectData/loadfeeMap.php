<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);

 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);
@extract($_POST);

	$abslist ="SELECT * FROM v_fees WHERE feeGroup = '$feeGroup' ";	
	$abslistexe = mysql_query($abslist);
	while($row = mysql_fetch_array($abslistexe)){
	$data[] = $row;
	}
	print json_encode($data);
	
	?>