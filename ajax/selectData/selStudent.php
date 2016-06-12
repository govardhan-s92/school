<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);
	
	
	$data = array();
 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);

$adno=$_POST['adno'];
//$adno="16318";

if($adno!=""){
		//$abslist = "SELECT *, CONCAT(Standard,' - ',Section) as classec FROM student_info1 LEFT JOIN tbl_class ON student_info1.CLASS_ID = tbl_class.CLASS_ID LEFT JOIN stu_address ON student_info1.ADMISSION_ID = stu_address.ADMISSION_ID LEFT JOIN  stu_parents ON student_info1.ADMISSION_ID = stu_parents.ADMISSION_ID WHERE student_info1.ADMISSION_ID='$adno'";	
				$abslist = "SELECT *, CONCAT(Standard,' - ',Section) as classec FROM student_info1 LEFT JOIN tbl_class ON student_info1.CLASS_ID = tbl_class.CLASS_ID WHERE student_info1.ADMISSION_ID='$adno'";	

		}
	$abslistexe = mysql_query($abslist);
	
	while($row = mysql_fetch_array($abslistexe)){
	$data = $row;
	}
	print json_encode($data);
	
	
	?>