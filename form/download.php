<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'schooltree';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);


//if (isset($_GET['send']))
//	{
//$ADMISSION_ID = $_GET["send"];

//$query = "SELECT * FROM student_info1 where ADMISSION_ID='$ADMISSION_ID' ";
//$result = mysql_query($query) or die(mysql_error());
//		while($row = mysql_fetch_array($result))
//		{
//						$ADMISSION_ID = $row['ADMISSION_ID'];
//						$CLASS_ID = $row['CLASS_ID'];
//						$sname = $row['NAME'];
//						$fname = $row['FATHER_NAME'];
//						$dob = $row['DOB'];
//						$anglo = $row['IS_ANGLO_INDIAN'];
//						
//		}
//		
//	}


//@extract($GET);
$ADMISSION_ID=$_GET['send'];
$CLASS_ID=$_GET['CLASS_ID'];
$NAME=$_GET['NAME'];
$FATHER_NAME=$_GET['FATHER_NAME'];
$DOB=$_GET['DOB'];
$IS_ANGLO_INDIAN=$_GET['IS_ANGLO_INDIAN'];
$cur_date = date("d-m-y");


require_once('fpdf.php');
require_once('fpdi.php');

// initiate FPDI
$pdf = new FPDI("L");
// add a page
$pdf->AddPage();

// set the sourcefile
$pdf->setSourceFile('feeReceiptBedes.pdf');

// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx,0,0);

// now write some text above the imported page

$pdf->SetXY(37, 39);
$pdf->Write(0, $ADMISSION_ID);//ADMISSION_ID

$pdf->SetXY(119, 44);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(38, 44);
$pdf->Write(0, $NAME);//DOB

$pdf->SetXY(103, 34.5);
$pdf->Write(0, $cur_date);//birthPlace
/////////////////////////////////////////////

$pdf->SetXY(176, 39);
$pdf->Write(0, $ADMISSION_ID);//ADMISSION_ID

$pdf->SetXY(258, 44);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(177, 44);
$pdf->Write(0, $NAME);//DOB

$pdf->SetXY(242, 34.5);
$pdf->Write(0, $cur_date);//birthPlace

///////////////////////////////////////////
$pdf->SetXY(37, 141.5);
$pdf->Write(0, $ADMISSION_ID);//ADMISSION_ID

$pdf->SetXY(119, 146.5);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(38, 146.5);
$pdf->Write(0, $NAME);//DOB

$pdf->SetXY(103, 136.5);
$pdf->Write(0, $cur_date);//birthPlace

////////////////////////////////////////

$pdf->SetXY(176, 141.5);
$pdf->Write(0, $ADMISSION_ID);//ADMISSION_ID

$pdf->SetXY(258, 146.5);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(177, 146.5);
$pdf->Write(0, $NAME);//DOB

$pdf->SetXY(242, 136.5);
$pdf->Write(0, $cur_date);//birthPlace



$pdf->Output('aw.pdf', 'I');



?>

