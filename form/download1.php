<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'schooltree';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);


if (isset($_GET['send']))
	{
$ADMISSION_ID = $_GET["send"];
$cur_dateq = date("d-m-y");
$query = "SELECT * FROM student_info1 where ADMISSION_ID='$ADMISSION_ID' ";
$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result))
		{
						$ADMISSION_ID = $result['ADMISSION_ID'];
						$CLASS_ID = $result['CLASS_ID'];
						$sname = $result['NAME'];
						$fname = $result['FATHER_NAME'];
						$dob = $result['DOB'];
						$anglo = $result['IS_ANGLO_INDIAN'];
						
		}
	}

//@extract($GET);
//$StudentName=$_GET['StudentName'];


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
$pdf->SetXY(173, 40);
$pdf->Write(0, $ADMISSION_ID);//App No

$pdf->SetXY(52, 59);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(52, 68);
$pdf->Write(0, $NAME);//DOB

$pdf->SetXY(126, 68);
$pdf->Write(0, $FATHER_NAME);//birthPlace

$pdf->SetXY(172, 122.5);
$pdf->Write(0, $DOB);//Income

echo $ADMISSION_ID;


$pdf->Output('feeReceiptBedes.pdf', 'I');

?>

