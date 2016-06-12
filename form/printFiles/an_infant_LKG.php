<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'schooltree';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

$ADMISSION_ID=$_GET['send'];
$ReceiptID=$_GET['ReceiptID'];
$ReceiptID = str_pad($ReceiptID, 4, '0', STR_PAD_LEFT);
$CLASS_ID=$_GET['CLASS_ID'];
$NAME=$_GET['NAME'];
$FATHER_NAME=$_GET['FATHER_NAME'];
$phone=$_GET['phone'];
$cur_date = date("d-m-y");


require_once('../fpdf.php');
require_once('../fpdi.php');

// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();

// set the sourcefile
$pdf->setSourceFile('an_infant_LKG.pdf');

// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx,0,0);

// now write some text above the imported page

$pdf->SetXY(30, 41.5);
$pdf->Write(0, $ReceiptID);//ReceiptID

$pdf->SetXY(22, 46.5);
$pdf->Write(0, $NAME);//ADMISSION_ID

$pdf->SetXY(21.5, 52.5);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(76.5, 41);
$pdf->Write(0, $cur_date);//birthPlace

$pdf->SetXY(78, 47);
$pdf->Write(0, $ADMISSION_ID);//DOB


/////////////////////////////////////////////

$pdf->SetXY(133 , 41.5);
$pdf->Write(0, $ReceiptID);//ReceiptID

$pdf->SetXY(125, 46.5);
$pdf->Write(0, $NAME);//ADMISSION_ID

$pdf->SetXY(124, 52.5);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(179, 41	);
$pdf->Write(0, $cur_date);//birthPlace

$pdf->SetXY(181, 47);
$pdf->Write(0, $ADMISSION_ID);//DOB

///////////////////////////////////////////
$pdf->SetXY(30, 182.5);
$pdf->Write(0, $ReceiptID);//ReceiptID

$pdf->SetXY(22, 187.5);
$pdf->Write(0, $NAME);//ADMISSION_ID

$pdf->SetXY(21.5, 193.5);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(76.5, 182);
$pdf->Write(0, $cur_date);//birthPlace

$pdf->SetXY(78, 188);
$pdf->Write(0, $ADMISSION_ID);//DOB

/////////////////////////////////////////////

$pdf->SetXY(133 , 182.5);
$pdf->Write(0, $ReceiptID);//ReceiptID

$pdf->SetXY(125, 187.5);
$pdf->Write(0, $NAME);//ADMISSION_ID

$pdf->SetXY(124, 193.5);
$pdf->Write(0, $CLASS_ID);//Name

$pdf->SetXY(179, 182	);
$pdf->Write(0, $cur_date);//birthPlace

$pdf->SetXY(181, 188);
$pdf->Write(0, $ADMISSION_ID);//DOB

$pdf->Output('aw.pdf', 'I');



?>

