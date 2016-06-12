<?php


$StudentName=$_GET['StudentName'];
$dob=$_GET['DOB'];
$Sno = $_GET['Sno'];
$StudentName = $_GET['StudentName'];
$dob = $_GET['DOB'];
$BirthPlace = $_GET['BirthPlace'];
$Religion = $_GET['Religion'];
$BaptismDate = $_GET['BaptismDate'];
$BaptismPlace = $_GET['BaptismPlace'];
$Priest = $_GET['Priest'];
$fName = $_GET['FatherName'];
$Focupation = $_GET['Foccupation'];
$Fqualification = $_GET['Fqualification'];
$Fincome = $_GET['FIncome'];
$Mname = $_GET['MotherName'];
$Moccupation = $_GET['Moccupation'];
$Mqualification = $_GET['Mqualification'];
$MotherTongue = $_GET['MotherTongue'];
$Mincome = $_GET['MIncome'];
$sibblings = $_GET['Siblings'];
$SibblingsName = $_GET['SibblingsName'];
$address = $_GET['Address'];
$TelRes = $_GET['TelRes'];
$TelOff = $_GET['TelOff'];
$phone = $_GET['Mobile'];
$email = $_GET['Email'];
$appNo=13000+$Sno;

if(isset($_POST['download']))
{
header("location:download.php?Sno=$Sno&StudentName=$StudentName&DOB=$dob&BirthPlace=$BirthPlace&Religion=$Religion&BaptismDate=$BaptismDate&BaptismPlace=$BaptismPlace&Priest=$Priest&FatherName=$fName&Foccupation=$Focupation&Fqualification=$Fqualification&FIncome=$Fincome&MotherName=$Mname&Moccupation=$Moccupation&Mqualification=$Mqualification&MotherTongue=$MotherTongue&MIncome=$Mincome&Siblings=$sibblings&SiblingsName=$SibblingsName&Address=$address&TelRes=$TelRes&TelOff=$TelOff&Mobile=$phone&Email=$email");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
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
</head>

<body>
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
    <div id="leftPanel"> <ul> <li><a href="../aboutus.html">About School</a></li> <li><a href="../history.html">History</a></li> <li><a href="../management.html">Management</a></li> 
      <li><a href="../torchBearers.html">Torch Bearers</a></li>
       <li><a href="../admissions.html">Admissions</a></li>

       
       <li><a href="../academics.html">Academics</a></li> 
    <li><a href="../Infrastructure.html">Facilities</a></li> 
    <li><a href="../sports.html">Sports</a></li> <li><a href="../gallery.html">Gallery</a></li> <li><a href="../NewsEvents.html">News &amp; Events</a></li> <li><a href="../alumni.html">Alumni</a></li> 
     
    </ul> 
    </div><div id="incenterPanel"> 
      <h1><span class="style1">Your Application Form Has been Registered</span><br />
      </h1>
      <p>Your Preliminary Application Number is <strong><span class="style1"><?php echo $appNo?></span></strong><br />
        <br />
        Submission of Preliminary Application <br />
        Date: <span class="style1"><strong>April 8th, 9th &amp; 10th </strong></span><br />
        Time: <strong><span class="style1">2.00pm to 4.00pm </span></strong><br />
      </p>
<div style="width:480px; margin-left:50px;"></div>
      <form id="form1" name="form1" method="post" action="">
        <input type="submit" name="download" id="download" value="Click here to download Preliminary Application form in PDF" />
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
