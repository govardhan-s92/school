<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$dbhost = 'localhost';
$dbuser = $_SESSION['dbuser'];
$dbpass = ($_SERVER['HTTP_HOST'] == 'localhost') ? '' : $_SESSION['dbpass'];
$dbname = $_SESSION['SESS_MEMBER_DBNAME'];


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);
date_default_timezone_set('Asia/Kolkata');
//$script_tz = date_default_timezone_get();
error_reporting(0);
?>