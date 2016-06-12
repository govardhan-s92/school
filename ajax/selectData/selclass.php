<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);

	$selclass = "SELECT *, CLASS_ID as id, CONCAT(Standard,' - ',Section) as text FROM tbl_class WHERE Status='1' order by CLASS_ID";	
	$selclassexe = mysql_query($selclass);
	
	while($row = mysql_fetch_array($selclassexe)){
	$classsec[] = $row;
	}
	print json_encode($classsec);
	?>