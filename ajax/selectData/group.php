<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);
	
$result = mysql_query("SELECT Standard, `Section`, grp, COUNT(`grp`) AS NoStudent FROM `v_studentlist` WHERE grp!='' GROUP BY `grp`, `CLASS_ID` ORDER BY `CLASS_ID` ASC");
//$result = mysql_query("SELECT `CLASS_ID, Standard, Section COUNT(`Section`) AS NoStudent FROM `student_info1` GROUP BY `CLASS_ID` ORDER BY `Standard` ASC");

while($row = mysql_fetch_array($result)) {
	
	$classsec[] = $row;
}
	print json_encode($classsec);


	?>