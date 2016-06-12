<?php
	require_once('../../login/auth.php');
	//Include database connection details
	require_once('../../login/config.php');
	error_reporting(0);
	
	
$user = array();
 //Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);

$CLASS_ID=$_POST['CLASS_ID']; 
$grp=$_POST['grp'];
$name=$_POST['sname'];
$fname=$_POST['fname'];
$DOB=$_POST['DOB'];
$IIlang=$_POST['IIlang'];
$Type=$_POST['Type'];
$Boarder=$_POST['Boarder'];

$query = "SELECT * FROM tbl_class WHERE CLASS_ID='$CLASS_ID'";
	 $result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result))
		{
	$Standard = $row['Standard'];
	$Section = $row['Section'];
		}

if($CLASS_ID == "45" || $CLASS_ID == "41" || $CLASS_ID == "42" || $CLASS_ID == "46")
{
	$CLASSSEC = "grp1";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '1'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	 $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="1";
}
elseif($CLASS_ID == "43" || $CLASS_ID == "44" || $CLASS_ID == "47" || $CLASS_ID == "48")
{
	$CLASSSEC = "grp2";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '1'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	 $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="1";
}
elseif($CLASS_ID == "33" || $CLASS_ID == "34" || $CLASS_ID == "35" || $CLASS_ID == "36")
{
	$CLASSSEC = "9n10";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '2'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	 $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="2";
}
elseif($CLASS_ID == "37" || $CLASS_ID == "38" || $CLASS_ID == "39" || $CLASS_ID == "40")
{
	$CLASSSEC = "9n10";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '2'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	 $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="2";
}
elseif($CLASS_ID == "29" || $CLASS_ID == "30" || $CLASS_ID == "31" || $CLASS_ID == "32")
{
	$CLASSSEC = "8";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '2'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	 $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="2";
}
elseif($CLASS_ID == "21" || $CLASS_ID == "22" || $CLASS_ID == "23" || $CLASS_ID == "24" || $CLASS_ID == "25" || $CLASS_ID == "26" || $CLASS_ID == "27" || $CLASS_ID == "28")
{
	$CLASSSEC = "6to7";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '2'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	 $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="2";
}
else{
	$CLASSSEC = "1to5";
	$selclass = "SELECT MAX(ADMISSION_ID) as ADNO FROM student_info1 WHERE Department = '2'";
	$selclassexe = mysql_query($selclass);
	 $row = mysql_fetch_array($selclassexe);
	$ADMISSION_IDr = $row['ADNO'];
	  $ADMISSION_ID =  $ADMISSION_IDr+1;
	 $depart ="2";
}





$query = "INSERT INTO student_info1(ADMISSION_ID,CLASSSEC, CLASS_ID, NAME, FATHER_NAME, DOB, IILanguage, Type, grp, Department) values ('$ADMISSION_ID', '$CLASSSEC', '$CLASS_ID', '$name', '$fname', '$DOB', '$IIlang', '$Type', '$grp', '$depart')"; //Insert Query
$result = mysql_query($query) or die(mysql_error());


	$data = array("ADNO" => "$ADMISSION_ID");
	print json_encode($data);
	
	
	?>