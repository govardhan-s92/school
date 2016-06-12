<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'rossary';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

if(isset($_POST['proceed']))
{
$StudentName=$_POST['StudentName'];
$date=$_POST['date'];
$month=$_POST['month'];
$dob = $date."-".$month."";
$BirthPlace = $_POST['BirthPlace'];
$Religion = $_POST['Religion'];
$BaptismDate = $_POST['BaptismDate'];
$BaptismPlace = $_POST['BaptismPlace'];
$Priest = $_POST['Priest'];
$fName = $_POST['fName'];
$Focupation = $_POST['Focupation'];
$Fqualification = $_POST['Fqualification'];
$Fincome = $_POST['Fincome'];
$Mname = $_POST['Mname'];
$Moccupation = $_POST['Moccupation'];
$Mqualification = $_POST['Mqualification'];
$MotherTongue = $_POST['MotherTongue'];
$Mincome = $_POST['Mincome'];
$sibblings = $_POST['sibblings'];
$SibblingsName = $_POST['SibblingsName'];
$standard = $_POST['standard'];
$Section = $_POST['Section'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$address = $address1." ".$address2."";
$standard = $_POST['standard'];
$Section = $_POST['Section'];
$Mobile1 = $_POST['Mobile1'];
$Mobile2 = $_POST['Mobile2'];

$sql1="INSERT INTO admission (StudentName, DOB, BirthPlace, Religion, BaptismDate, BaptismPlace, Priest, FatherName, Foccupation, Fqualification, FIncome, MotherName, Moccupation, Mqualification, MotherTongue, MIncome, Siblings, SiblingsName, Address, address2, standard, Section, Mobile1, Mobile2) VALUES('$StudentName', '$dob', '$BirthPlace', '$Religion', '$BaptismDate', '$BaptismPlace', '$Priest', '$fName', '$Focupation', '$Fqualification', '$Fincome', '$Mname', '$Moccupation', '$Mqualification', '$MotherTongue', '$Mincome', '$sibblings', '$SibblingsName', '$address','$address3', '$standard', '$Section', '$Mobile1', '$Mobile2')";
$result = mysql_query($sql1) or die(mysql_error());


$Sno = mysql_insert_id();
$appNo=16005+$Sno;
	$ch = curl_init();
	//$reseller="epraburajan@gmail.com";
	$user =  "parentalert";
	$pass = "a~t~D9b8";
	//$receipientno = "9600037999," .$Mobile1 ."";
	$receipientno = $Mobile1;
	$finalmsg = "Your application is successfully submitted. Your application number is " . $appNo .". ";
	$senderID = "ROSARY";
	curl_setopt($ch, CURLOPT_URL,"http://api.unicel.in/SendSMS/sendmsg.php");					
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_POST, 1);							
								curl_setopt($ch, CURLOPT_POSTFIELDS,"uname=$user&pass=$pass&send=$senderID&dest=$receipientno&msg=$finalmsg");
								curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
								curl_setopt($ch, CURLOPT_TIMEOUT_MS, 20000);
								$buffer = curl_exec($ch);
}

if(isset($_POST['download']))
{
@extract($_POST);
header("location:download.php?Sno=$Sno&StudentName=$StudentName&DOB=$dob&BirthPlace=$BirthPlace&Religion=$Religion&BaptismDate=$BaptismDate&BaptismPlace=$BaptismPlace&Priest=$Priest&FatherName=$fName&Foccupation=$Focupation&Fqualification=$Fqualification&FIncome=$Fincome&MotherName=$Mname&Moccupation=$Moccupation&Mqualification=$Mqualification&MotherTongue=$MotherTongue&MIncome=$Mincome&Siblings=$sibblings&SiblingsName=$SibblingsName&standard=$standard&Section=$Section&addr=$addr&address3=$address3&Mobile1=$Mobile1&Mobile2=$Mobile2");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admission</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../calender.js"></script>
<style type="text/css">
#wrapper  #mainContainer  #incenterPanel  #lkgAdm  li  {
	margin-bottom: 5px;
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #F4F4F4;
	list-style-type: none;
}

.txtflds {
	line-height: 17px;
	height: 17px;
	width: 65px;
	border: 1px solid #93969B;
	float: right;
	font-size: 11px;
	color: #666666;
	padding: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 4px;
}

body {
	background-color: #333;
	margin: 0px;
}
.style1 {
	color: #FF6600
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
</style>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</head>

<body >
    <!--<body onload="noBack();"
    onpageshow="if (event.persisted) noBack();" onunload="">-->
<div id="wrapper">
  <div id="innerheader">
   <div id="menu">
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../aboutus.html">About us</a></li>
        <li><a href="../Gallery.html">Gallery</a></li>
        <li><a href="../contactus.html">Contact Us</a></li>
        <li><a href="#">Parentalert</a></li>
      </ul>
    </div><div class="clrflt"><!--&nbsp;--></div>
    <div id="breadCrumb"><br />
<br />
<br />
<br />
<a href="../index.html">Home</a> &gt; About Us</div>
  </div>
  <div id="mainContainer">
    <div id="leftPanel"> <ul> <li><a href="../aboutus.html">About School</a></li> <li><a href="../history.php">History</a></li> <li><a href="../management.html">Management</a></li> 
      <li><a href="../torchBearers.html">Torch Bearers</a></li>
       <li><a href="../admissions.html">Admissions</a></li>

       
       <li><a href="../academics.html">Academics</a></li> 
    <li><a href="../Infrastructure.html">Facilities</a></li> 
    <li><a href="../sports.html">Sports</a></li> <li><a href="../gallery.html">Gallery</a></li> <li><a href="../NewsEvents.html">News &amp; Events</a></li> <li><a href="../alumni.html">Alumni</a></li> 
     
    </ul> 
    </div><div id="incenterPanel"> 
      <h1><span class="style1">Your Application form is validated successfully</span> </h1>
      <h2> A confirmation SMS is Sent to <?php echo $Mobile1;?></h2>
      
      <div class="style2" style="width:276px; height:60px; background-image:url(../images/bgr.png); padding:21px 16px 16px 16px; text-align:center; font-size: 14px;"><strong style="font-size:21px;">Your Preliminary Application Number<br />
 <?php echo $appNo;?></strong></div>
     
      <ul id="lkgAdm">
        <strong>The following must be attached to this Form at the time of Submission </strong><br />
        1. Photostat copy of Corporation Birth Certificate/Baptism Certificate. <br />
        2. Copy of the Ration Card for address proof to be enclosed. <br />
        3. One Passport size photograph of the child. <br />
        4. A Self addressed stamped cover (Long size) of Rs.5/-
      </ul><form id="form1" name="form1" method="post" action="admissio14.php"> 
     		   <input name="Sno" type="hidden" value="<?php echo $Sno; ?>" />
	    <input name="StudentName" type="hidden" value="<?php echo $StudentName; ?>" />
              <input name="dob" type="hidden" value="<?php echo $dob; ?>" />
              <input name="BirthPlace" type="hidden" value="<?php echo $BirthPlace; ?>" />
              <input name="Religion" type="hidden" value="<?php echo $Religion; ?>" />
              <input name="BaptismDate" type="hidden" value="<?php echo $BaptismDate; ?>" />
              <input name="BaptismPlace" type="hidden" value="<?php echo $BaptismPlace; ?>" />
              <input name="Priest" type="hidden" value="<?php echo $Priest; ?>" />
              <input name="MotherTongue" type="hidden" value="<?php echo $MotherTongue; ?>" />
              <input name="sibblings" type="hidden" value="<?php echo $sibblings; ?>" />
              <input name="SibblingsName" type="hidden" value="<?php echo $SibblingsName; ?>" />
              <input name="standard" type="hidden" value="<?php echo $standard; ?>" />
              <input name="Section" type="hidden" value="<?php echo $Section; ?>" />
              <input name="fName" type="hidden" value="<?php echo $fName; ?>" />
              <input name="Focupation" type="hidden" value="<?php echo $Focupation; ?>" />
              <input name="Fqualification" type="hidden" value="<?php echo $Fqualification; ?>" />
              <input name="Fincome" type="hidden" value="<?php echo $Fincome; ?>" />
			  <input name="Mname" type="hidden" value="<?php echo $Mname; ?>" />
              <input name="Mqualification" type="hidden" value="<?php echo $Mqualification; ?>" />
              <input name="Mincome" type="hidden" value="<?php echo $Mincome; ?>" />
              <input name="Moccupation" type="hidden" value="<?php echo $Moccupation; ?>" />
              <input name="addr" type="hidden" value="<?php echo $address; ?>" />
              <input name="address3" type="hidden" value="<?php echo $address3; ?>" />
              <input name="Section" type="hidden" value="<?php echo $Section; ?>" />
              <input name="Mobile1" type="hidden" value="<?php echo $Mobile1; ?>" />
        <input name="Mobile2" type="hidden" value="<?php echo $Mobile2; ?>" /><div style="padding:10px 10px 10px 30px;; background-image:url(../images/100.png); height:80px; width:370px;"><br />
</div>
      <p><span class="style1"><br />
          <strong>Submission of Preliminary Application <br />
        Date:</strong></span><strong>6th &amp; 7th, April 2014</strong><span class="style1"><strong><br />
        Time: </strong></span><strong>2.00pm to 4.00pm</strong><br />
      </p> <h2>Please download the validated Application by clicking the button below<br />
      </h2>
      <input type="submit" name="download" id="download" value="Download
 Preliminary Application form" />
      </form>

      
      
      <p></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><br />
      </p>
<div class="panels"></div>
    </div>
    
    <div class="clrflt"></div>
  </div>
  <div id="footer">
    <div id="rgtPanel"><span class="style8">Contact Us</span> <br />
      <br />
      <table width="225" cellpadding="1" cellspacing="1">
      <tr>
        <td width="56" valign="top"><span class="style9">Address</span></td>
      <td width="10" valign="top"><span class="style9">:</span></td>
      <td width="122" valign="top"><span class="style9">11, Papanasam Sivam Road,<br />
Santhome,<br />
Chennai - 600004<br />
Tamilnadu.</span></td>
    </tr>
      <tr>
        <td valign="top"><span class="style9">Landmark</span></td>
      <td><span class="style9">:</span></td>
      <td><span class="style9"> Near Santhome Church</span></td>
    </tr>
      <tr>
        <td valign="top"><span class="style9">Phone</span></td>
      <td><span class="style9">:</span></td>
      <td><span class="style9">+91-44-24983617,<br />
+91-44-24983617</span></td>
    </tr>
      <tr>
        <td valign="top"><span class="style9">Fax</span></td>
      <td><span class="style9">:</span></td>
      <td><span class="style9"> +044-24983617</span></td>
    </tr>
      <tr>
        <td valign="top"><span class="style9">E- mail</span></td>
      <td><span class="style9">:</span></td>
      <td><span class="style9"> rosarymatriculation@yahoo.com</span></td>
    </tr>
  </table>
    </div>
      <div class="fPanel">
      <span class="style2">Students Library</span><br />
        <img src="../images/ftimg-1.jpg" width="183" height="108" /><br />
We are presenting a free students library. It's including different type of videos of student problems, research papers and solved questions.
      </div>
      <div class="fPanel">
      <span class="style2">Computer Lab</span><br />
        <img src="../images/ftimg-3.jpg" width="183" height="108" /><br />
We are presenting a free students library. It's including different type of videos of student problems, research papers and solved questions.    </div>
    <div class="fPanel">
    <span class="style2">Physics Lab</span><br />
        <img src="../images/ftimg-2.jpg" width="183" height="108" /><br />
We are presenting a free students library. It's including different type of videos of student problems, research papers and solved questions.      </div>
    <div class="clrflt"><!--&nbsp;--></div>
  </div>
</div>
</body>
</html>
