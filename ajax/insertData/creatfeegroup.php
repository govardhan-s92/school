<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);
	
	
	$data = array();
 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);


$group=$_POST['group'];
@extract($_POST);

if($group!=""){
	   $query = "INSERT INTO feegroup (feeGroup, feeGroupStatus) VALUES ('$group', '1');";	
	}
	$result = mysql_query($query) or die(mysql_error());
	
	?>