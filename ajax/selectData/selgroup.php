<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);

	$selclass = "SELECT * FROM tbl_group WHERE Status='1' order by groupId";	
	$selclassexe = mysql_query($selclass);
	
	while($row = mysql_fetch_array($selclassexe)){
	$classsec[] = $row;
	}
	print json_encode($classsec);
	?>