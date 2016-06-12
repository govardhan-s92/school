<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_MEMBER_DBNAME']);
	unset($_SESSION['firstname']);
	unset($_SESSION['dbuser']);
	unset($_SESSION['dbpass']);
	unset($_SESSION['smspasswd']);
	unset($_SESSION['senderid']);
	//header("location: login-failed.php");
	header("location: index.html");
?>
