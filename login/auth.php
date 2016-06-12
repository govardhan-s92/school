<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	//Start session
	ini_set("max_execution_time", "1000");
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		echo $_SESSION['SESS_MEMBER_ID'];
		
		header("location: ../index.html");
		exit();
	}
	session_write_close();
?>