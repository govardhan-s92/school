<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	//error_reporting(0);
	
	
$data = array();
 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);

$class=$_POST['name'];
//$class="35";
 if($class!=""){
	 	$abslist = "SET @r=0";
	$abslistq = "UPDATE `student_info1` SET `rollNumber`= (SELECT @r := @r+1) WHERE `CLASS_ID`=$class ORDER BY `NAME`";
	}
	$abslistexe = mysql_query($abslist);
	$abslistexeq = mysql_query($abslistq);
	
	
	?>
	