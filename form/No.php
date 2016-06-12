<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'bede';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);
error_reporting(0);

$txt2 = "Name of the School
Name of the Education District
Name of the Revenue District
Name of the Pupil (in block letters)
Name of the Father / Mother / Guardian
Nationality, Religion and Caste
Community Whether he belongs to Adidravida (S. Caste) or 
S. Tribe, Backward Class or Most Backward Class, 
Convert to Christianity from S. Caste or Denotified Tribes
Sex
Date of Birth, as entered in the Admission Register in figures and words

Personal marks of Identification

Date of admission and standard in which admitted (the year in words)
(a) Standard in which the Pupil was studying at the time of leaving (in words)
(b) The Course Offered i.e, General Education or Vocational Education
(c) In the case of General Education, the subjects offered under 
Part - III, Group A, Medium of Instruction - ENGLISH
(d) In the Case of Vocational Education, the Vocational subject under 
 a) Part-III Group B and the related subject offered under Part II (Group (A) Nil
(e) Language offered under Part I
(f) Medium of Study
Whether qualified for promotion to higher standard under 
Higher Secondary Education rules
Whether the pupil has paid all the fees due to the school
Whether Pupil was in receipt of any scholarship (nature of the 
scholarship to be specified or any Educational Concession)
Whether the Pupil has undergone medical inspection, if any,
during the academic year (first or repeat to be specified)
Date on which the pupil actually left the school
The Pupil's conduct and character
Date on which application for Transfer Certificate was made on 
behalf of the pupil by his Parent or guardian
Date of the Transfer Certificate
Course Study";

$AdmissionNumber=$_GET['send'];
$tclist = "SELECT * FROM tc WHERE AdmissionNumber='$AdmissionNumber' ";			
				$tcdld = mysql_query($tclist);
				$row = mysql_fetch_array($tcdld);
				$DateofTC = $row['DateofTC'];
				$DateofTC = date ("d-m-Y", strtotime ($DateofTC));
				$DateOfTCapp = $row['DateOfTCapp'];
				$DateOfTCapp = date ("d-m-Y", strtotime ($DateOfTCapp));
				$DateofBirth = $row['DateofBirth'];
				$DateofBirth = date ("d-m-Y", strtotime ($DateofBirth));
				$Dateofleaving = $row['Dateofleaving'];	
				$Dateofleaving = date ("d-m-Y", strtotime ($Dateofleaving));				
				mysql_close();

$Sno ="1.


2.
3.
4.
5.


6.
7.

8.

9.
10.







11.

12.
13.

14.

15.
16.
17.

18.
19.
";
$txt1 = ":
:
:
:
:
:
:


:
:
:
:
:
:
:
:
:

:
:
:
:
:

:
:

:

:
:
:

:
:";

$ab = "a
b";

require_once('fpdf.php');
require_once('fpdi.php');

// initiate FPDI
$pdf = new FPDI("P");
// add a page
$pdf->AddPage();

// set the sourcefile
$pdf->setSourceFile('bedesTc1.pdf');

// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx,0,0);

// now write some text above the imported page

$pdf->SetXY(166.5, 30);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 4.7, $row['TCno']);// 	

$pdf->SetXY(11.5, 40.5);
$pdf->SetFont('Arial','',8.5);
$pdf->MultiCell(0, 4.7, $Sno);//Sno

$pdf->SetXY(116.5, 96.8);
$pdf->SetFont('Arial','',8.5);
$pdf->MultiCell(0, 4.7, $ab);//Sno

$pdf->SetXY(166.5, 34);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 4.7, $row['AdmissionNumber']);//Sno

$pdf->SetXY(15.5, 40.5);
$pdf->SetFont('Arial','',8.5);
$pdf->MultiCell(0, 4.7, $txt2);//default Text

$pdf->SetXY(118.5, 40.5);
$pdf->SetFont('Arial','',8.5);
$pdf->MultiCell(0, 4.7, $txt1);//column

$pdf->SetXY(120, 40.5);
$pdf->SetFont('Arial','B',7.5);
$pdf->MultiCell(0, 4.7, "ST. BEDE'S ANGLO INDIAN HIGHER SECONDARY SCHOOL
CHENNAI CENTRAL
CHENNAI");//SCHOOL

///////////////////////Variable Starts ////////////////////////////////////////

$pdf->SetXY(26, 30);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['RegNo']);

$pdf->SetXY(120, 55.3);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['NameofCandidates']);

$pdf->SetXY(120, 60);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['NameofFather']);

$pdf->SetXY(120, 64.7);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['NationRelCaste']);

$pdf->SetXY(120, 69.4);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['Community']);

$pdf->SetXY(120, 83.5);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['Sex']);

$pdf->SetXY(120, 88.2);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $DateofBirth);

$pdf->SetXY(120, 92.9);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['DOBwords']);

$pdf->SetXY(120, 97.6);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['IdentificationMarks']);

$pdf->SetXY(120, 102.3);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['IdentificationMarks2']);

$pdf->SetXY(120, 107);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5,$row['DateofAdmission']);

$pdf->SetXY(120, 111.7);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['StandardLeaving']);

$pdf->SetXY(120, 116.4);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['Course']);

$pdf->SetXY(120, 121.1);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['CaseGeneralEducation']);

$pdf->SetXY(120, 125.8);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['Vocational']);

$pdf->SetXY(120, 130.5);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['RelatedSubject']);

$pdf->SetXY(120, 139.9);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['Language']);

$pdf->SetXY(120, 144.6);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['MediumofStudy']);

$pdf->SetXY(120, 149.3);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['isPassedHSC']);

$pdf->SetXY(120, 158.7);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['isFeesPaid']);

$pdf->SetXY(120, 163.4);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['isScholarShip']);

$pdf->SetXY(120, 172.8);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['MedicalInspection']);

$pdf->SetXY(120, 182.2);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $Dateofleaving);

$pdf->SetXY(120, 186.9);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['PupilsCharacter']);

$pdf->SetXY(120, 191.6);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $DateOfTCapp);

$pdf->SetXY(120, 201);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $DateofTC);

$pdf->SetXY(67, 222);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['AcademicYear']);

$pdf->SetXY(108, 222);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['StandardStudied']);

$pdf->SetXY(143, 222);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5,$row['2ndLang']);

$pdf->SetXY(175, 222);
$pdf->SetFont('Arial','B',8.5);
$pdf->MultiCell(0, 3.5, $row['Instructon']);


$pdf->Output('aw.pdf', 'I');



?>

