<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
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
$appNo=15005+$Sno;
	//$ch = curl_init();
//	//$reseller="epraburajan@gmail.com";
//	$user = "epraburajan@gmail.com:p@mani4u";
//	//$receipientno = "9600037999," .$Mobile1 ."";
//	$receipientno = $Mobile1;
//	$msgtxt = "Your application is successfully submitted. Your application number is " . $appNo .". ";
//	$senderID = "ROSARY";
//	curl_setopt($ch,CURLOPT_URL,  "api.mVaayoo.com/mvaayooapi/MessageCompose");
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//	curl_setopt($ch, CURLOPT_POST, 1);
//	curl_setopt($ch,CURLOPT_POSTFIELDS,"user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt&state=0");
//	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//	$buffer = curl_exec($ch);
//	echo $buffer;
//	curl_close($ch);
}

if(isset($_POST['download']))
{
@extract($_POST);
header("location:download.php?Sno=$Sno&StudentName=$StudentName&DOB=$dob&BirthPlace=$BirthPlace&Religion=$Religion&BaptismDate=$BaptismDate&BaptismPlace=$BaptismPlace&Priest=$Priest&FatherName=$fName&Foccupation=$Focupation&Fqualification=$Fqualification&FIncome=$Fincome&MotherName=$Mname&Moccupation=$Moccupation&Mqualification=$Mqualification&MotherTongue=$MotherTongue&MIncome=$Mincome&Siblings=$sibblings&SiblingsName=$SibblingsName&standard=$standard&Section=$Section&addr=$addr&address3=$address3&Mobile1=$Mobile1&Mobile2=$Mobile2");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rosary Matriculation School</title>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="grey">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href="../images/favicon.png" rel="shortcut icon">
<link href="../images/favicon.png" rel="bookmark icon">
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<link href="../css/main.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.min-latest.js"></script>
<script src="../js/jquery.nivo.slider.js"></script>
<script src="../js/custom.js"></script>
<script type="text/javascript">
function displayclass(val)
{
	if (val=="Rc")
	{
	document.getElementById('rc').style.display="block";
	}
	if (val!="Rc")
	{
	document.getElementById('rc').style.display="none";
	document.getElementById('BaptismDate').value="";
	document.getElementById('BaptismPlace').value="";
	document.getElementById('Priest').value="";
	}

	
}

function displaysib(val)
{
		
	if (val=="yes")
	{
	document.getElementById('sib').style.display="block";
	}
	if (val!="yes")
	{
	document.getElementById('sib').style.display="none";
	document.getElementById('SibblingsName').value="";
		}
	
}
	</script>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<script src="file:///D|/wamp/www/SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script>
$(function () {
    setInterval("rotateDiv()", 10000);
});
function rotateDiv() {
    var currentDiv = $("#simpleslider div.current");
    var nextDiv = currentDiv.next();
    if (nextDiv.length == 0) nextDiv = $("#simpleslider div:first");
    currentDiv.removeClass('current')
        .addClass('previous')
        .fadeOut('2000');
    nextDiv.fadeIn('3000')
        .addClass('current', function () {
        currentDiv.fadeOut('2000', function () {
            currentDiv.removeClass('previous');
        });
    });
}
</script>
<style type="text/css">
.txtflds {
	line-height: 21px;
	height: 21px;
	width: 120px;
	border: 1px solid #93969B;
	font-size: 11px;
	color: #666666;
	padding: 0px;
	margin: 0px;
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
#wrapper #mainContainer #incenterPanel #form1 #lkgAdm li {
	margin-bottom: 8px;
	padding-bottom: 8px;
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #F4F4F4;
	list-style-type: none;
}
.style4 {
	color: #FF0000;
	font-size: 11px;
}
#wrapper #mainContainer #incenterPanel div #abc table tr td strong {
	color: #FFF;
}
</style>
</head>
<body>
<div id="header">
  <!-- Start navigation area -->
 <?php include("../includes/menu.php"); ?>
  <!-- End navigation area -->
  <div class="clear"></div>
  <!-- Start Social & Logo area -->
  <div id="header_small">
    <!-- Start Social area -->
  
    <!-- End Socialarea -->
    <!-- Start Logo area -->
  <div id="logo"> <a href="../index.html"><img src="../images/logo.png"></a> </div>
    <!-- End Logo area -->
  </div>
  <!-- End Social & Logo area -->
</div>
<div id="main">
  <!-- Start H1 Title -->
  <div class="titlesnormal" style="margin-bottom:0px;">
    <h1>LKG Preliminary Application Form</h1>
    <span></span> </div>
  <!-- End H1 Title -->
  <!-- Start Main Body Wrap -->
  <div id="main-wrap">
    <!-- Start Latest Project titles -->
    <div class="boxes-full" style="background:#303e6f;">
      <div class="boxes-padding fullpadding">
        <!-- Start None Split Section -->
        <div class="splitnone"><h1 style="text-align:left;">Please fill the Details Below</h1>
                 
           <div class="cont1" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">


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
      </ul><form id="form1" name="form1" method="post" action="admissions15.php"> 
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
<div class="clrflt"><!--comment--></div>
</div>

        </div>
        <!-- End None Split Section -->
      
        <!-- Start Quater Split Section -->
       
       
        <!-- End Quater Split Section -->
      </div>
      <span class="box-arrow"></span> </div>
    <!-- End Latest Project titles -->
  </div>
  <!-- End Main Body Wrap -->
</div>
<!-- Start Footer -->
<div id="footer">
  <!-- Start Footer Top -->

  <!-- End Footer Top -->
  <div class="clear"></div>
  <!-- Start Footer Bottom -->
  <div id="footerbottom">
    <div class="footerwrap">
      <!-- Start Copyright Div -->
      <div id="copyright">Copyrights@2014</div>
      <!-- PLEASE SUPPORT US BY LEAVING THIS LINK -->
      <!-- End Copyright Div -->
      <!-- Start Social area -->
      <div class="socialfooter">
        <ul>
          <li><a href="#" class="social-google"></a></li>
          <li><a href="#" class="social-facebook"></a></li>
          <li><a href="#" class="social-twitter"></a></li>
          <li><a href="#" class="social-linkedin"></a></li>
          <li><a href="#" class="social-forrst"></a></li>
          <li><a href="#" class="social-dribbble"></a></li>
        </ul>
      </div>
      <!-- End Socialarea -->
    </div>
  </div>
  <!-- End Footer Bottom -->
</div>
<!-- End Footer -->
<!-- Start Scroll To Top Div -->
<div id="scrolltab"></div>
<!-- End Scroll To Top Div -->

</body>
</html>