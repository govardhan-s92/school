<?php	
//Start session
	session_start();
	
$dbhost = 'localhost';
$dbuser = 'root';
//$dbpass = '';
$dbpass = ($_SERVER['HTTP_HOST'] == 'localhost') ? '' : 'webexcel@123';
$dbname = 'main';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);
date_default_timezone_set('Asia/Kolkata');
$script_tz = date_default_timezone_get();
	
//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['loginn']);
	$password = clean($_POST['password']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Invalid Username';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Invalid Password';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: loginfailed.html");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM members WHERE login='$login' AND passwd='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_MEMBER_DBNAME'] = $member['dbname'];
			$_SESSION['firstname'] = $member['firstname'];
			$_SESSION['mail'] = $member['mail'];
			$_SESSION['dbuser'] = $member['dbuser'];
			$_SESSION['dbpass'] = $member['dbpass'];
			$_SESSION['smspasswd'] = $member['smspasswd'];
			$_SESSION['senderid'] = $member['senderid'];
			$_SESSION['phone'] = $member['phone'];
			$_SESSION['valid'] = $member['valid'];
			$_SESSION['Type'] = $member['Type'];
			$_SESSION['credits'] = $member['credits'];
			$_SESSION['logo'] = $member['logo'];
			session_write_close();
			$types = $_SESSION['Type'];
			header("location: ../dashboard.php");
			exit();
		}
		else 
		{
			//Login failed
			header("location: loginFailed.php");
			exit();
		}
	}
	else 
	{
		die("Query failed");
	}
?>