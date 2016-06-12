<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'rossary';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

if(isset($_POST['aaa']))
{
	$app = $_POST['app'];
	$date=$_POST['date'];
	$month=$_POST['month'];
	$dob = $date."-".$month."";
	$snow = $app-15005;
	$qri = "SELECT * FROM admission WHERE Sno='$snow' AND dob='$dob'";
		$result = mysql_query($qri)or die(mysql_error());
		
			if($result) 
			{
				
				if(mysql_num_rows($result) == 1) 
				{
					//Login Successful
				while($row = mysql_fetch_array($result))
						{
				$dob=$row['DOB'];
				$Sno = $row['Sno'];
				$StudentName = $row['StudentName'];
				$dob = $row['DOB'];
				$BirthPlace = $row['BirthPlace'];
				$Religion = $row['Religion'];
				$BaptismDate = $row['BaptismDate'];
				$BaptismPlace = $row['BaptismPlace'];
				$Priest = $row['Priest'];
				$FatherName = $row['FatherName'];
				$Foccupation = $row['Foccupation'];
				$Fqualification = $row['Fqualification'];
				$FIncome = $row['FIncome'];
				$MotherName = $row['MotherName'];
				$Moccupation = $row['Moccupation'];
				$Mqualification = $row['Mqualification'];
				$MotherTongue = $row['MotherTongue'];
				$MIncome = $row['MIncome'];
				$Siblings = $row['Siblings'];
				$SiblingsName = $row['SiblingsName'];
				$standard = $row['standard'];
				$Section = $row['Section'];
				$Address = $row['Address'];
				$address2 = $row['address2'];
				$Mobile1 = $row['Mobile1'];
				$Mobile2 = $row['Mobile2'];
						}
				$Rel=array("Rc"=>"70","Christian"=>"93","Hindu"=>"111","Muslim"=>"132","Others"=>"152");
				$sib=array("yes"=>"171","no"=>"191");
				
				require_once('fpdf.php');
				require_once('fpdi.php');
				
				$appNo=15005+$Sno;
				
				// initiate FPDI
				$pdf = new FPDI();
				// add a page
				$pdf->AddPage();
				// set the sourcefile
				$pdf->setSourceFile('TestDoc1.pdf');
				// import page 1
				$tplIdx = $pdf->importPage(1);
				// use the imported page and place it at point 10,10 with a width of 100 mm
				$pdf->useTemplate($tplIdx,0,0);
				
				// now write some text above the imported page
				$pdf->SetXY(181, 52);
				$pdf->Write(0, $appNo);//App No
				
				$pdf->SetXY(52, 59);
				$pdf->Write(0, $StudentName);//Name
				
				$pdf->SetXY(52, 68);
				$pdf->Write(0, $dob);//DOB
				
				$pdf->SetXY(126, 68);
				$pdf->Write(0, $BirthPlace);//birthPlace
				
				$image2 = "arrow.png";
				$pdf->Image($image2,$Rel[$Religion],73);//70,93,131,111,152//Relegion
				
				$pdf->SetXY(68, 85.5);
				$pdf->Write(0, $BaptismDate);//Baptism
				
				$pdf->SetXY(128, 85.5);
				$pdf->Write(0, $BaptismPlace);//Baptism Place
				
				$pdf->SetXY(75, 94);
				$pdf->Write(0, $Priest);//Priest
				
				$pdf->SetXY(75, 104);
				$pdf->Write(0, $FatherName);//Fathers Name
				
				$pdf->SetXY(43.5, 122.5);
				$pdf->Write(0, $Foccupation);//Occupation
				
				$pdf->SetXY(43.5, 113.5);
				$pdf->Write(0, $Fqualification);//Qualification
				
				$pdf->SetXY(172, 122.5);
				$pdf->Write(0, $FIncome);//Income
				
				$pdf->SetXY(75, 136);
				$pdf->Write(0, $MotherName);//Mothers Name
				
				$pdf->SetXY(43.5, 144);
				$pdf->Write(0, $Mqualification);//MQualification
				
				$pdf->SetXY(172, 152.5);
				$pdf->Write(0, $MIncome);//MIncome
				
				$pdf->SetXY(43.5, 152.5);
				$pdf->Write(0, $Moccupation);//Occupation
				
				$pdf->SetXY(59, 165);
				$pdf->Write(0, $MotherTongue);//Mother Tongue
				
				$image1 = "arrow.png";
				$pdf->Image($image1, $sib[$Siblings],172);//172,191//Siblings
				
				$pdf->SetXY(43.5, 183);
				$pdf->Write(0, $SiblingsName);//Sibling Name
				
				$pdf->SetXY(143, 183);
				$pdf->Write(0, $standard);//stand
				
				$pdf->SetXY(181, 183);
				$pdf->Write(0, $Section);//sec
				
				$pdf->SetXY(59, 192);
				$pdf->Write(0, $Address);//address
				
				$pdf->SetXY(59, 200);
				$pdf->Write(0, $address2);//address
				
				$pdf->SetXY(52, 209);
				$pdf->Write(0, $Mobile1);//phone
				
				$pdf->SetXY(142, 209);
				$pdf->Write(0, $Mobile2);//Mobile
				
				
				$pdf->Output('Application2015.pdf', 'D');
				}
				else 
				{
					//Login failed
					header("location: ../../index.php");
					exit();
				}
			}
}

?>

