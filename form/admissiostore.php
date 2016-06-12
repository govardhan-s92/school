<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'rossary';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

if(isset($_POST['proceed']))
{
@extract($_POST);
$dob = $date."-".$month."";
}

if(isset($_POST['payuSubmit']))
{
	@extract($_POST);
		$qri = "SELECT * FROM admission WHERE StudentName='$StudentName' AND DOB='$dob'";
		$selabsexe = mysql_query($qri)or die(mysql_error());
		$numabs = mysql_num_rows($selabsexe);
		if($numabs >0)
		{
		while($row = mysql_fetch_array($selabsexe))
		{
		$Sno=$row['Sno'];
		header("location:thankyou.php?Sno=$Sno&StudentName=$StudentName&DOB=$dob&BirthPlace=$BirthPlace&Religion=$Religion&BaptismDate=$BaptismDate&BaptismPlace=$BaptismPlace&Priest=$Priest&FatherName=$fName&Foccupation=$Focupation&Fqualification=$Fqualification&FIncome=$Fincome&MotherName=$Mname&Moccupation=$Moccupation&Mqualification=$Mqualification&MotherTongue=$MotherTongue&MIncome=$Mincome&Siblings=$sibblings&SibblingsName=$SibblingsName&Address=$address&TelRes=$TelRes&TelOff=$TelOff&Mobile=$phone&Email=$email");
		}
		}
		else
		{
$sql1="INSERT INTO admission (StudentName, DOB, BirthPlace, Religion, BaptismDate, BaptismPlace, Priest, FatherName, Foccupation, Fqualification, FIncome, MotherName, Moccupation, Mqualification, MotherTongue, MIncome, Siblings, SiblingsName, Address, TelRes, TelOff, Mobile, Email) VALUES('$StudentName', '$dob', '$BirthPlace', '$Religion', '$BaptismDate', '$BaptismPlace', '$Priest', '$fName', '$Focupation', '$Fqualification', '$Fincome', '$Mname', '$Moccupation', '$Mqualification', '$MotherTongue', '$Mincome', '$sibblings', '$SibblingsName', '$address', '$TelRes', '$TelOff', '$phone', '$email')";
$result = mysql_query($sql1) or die(mysql_error());
$Sno = mysql_insert_id();
$appNo=13000+$Sno;
$ch = curl_init();
	$reseller="epraburajan@gmail.com";
	$user = "parentalert@webexcel.in:WEBEXCEL";
	$receipientno = "9600037999," .$phone ."";
	$msgtxt = "Your application is successfully submitted. Your application number is " . $appNo .". Please take a print and submit on APRIL 7th to 9th between 2.00pm to 4.00pm.";
//	//$receipientno = "9600037999,8500120120";
	$senderID = "ROSARY";
	curl_setopt($ch,CURLOPT_URL,  "twowaysms.co.in/api/MessageCompose");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,"reseller=$reseller&user=$user&senderID=$senderID&receipientno=$phone&msgtxt=$msgtxt&state=0");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$buffer = curl_exec($ch);
	curl_close($ch);
//////////////////////	
 header("location:thankyou.php?Sno=$Sno&StudentName=$StudentName&DOB=$dob&BirthPlace=$BirthPlace&Religion=$Religion&BaptismDate=$BaptismDate&BaptismPlace=$BaptismPlace&Priest=$Priest&FatherName=$fName&Foccupation=$Focupation&Fqualification=$Fqualification&FIncome=$Fincome&MotherName=$Mname&Moccupation=$Moccupation&Mqualification=$Mqualification&MotherTongue=$MotherTongue&MIncome=$Mincome&Siblings=$sibblings&SibblingsName=$SibblingsName&Address=$address&TelRes=$TelRes&TelOff=$TelOff&Mobile=$phone&Email=$email");
		}
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../calender.js"></script>
<script src="../SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
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
<link href="../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
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
      <h1><span class="style1">LKG Admissions</span></h1>
      <div style="width:480px; margin-left:50px;">
        <form action="admissiostore.php" method="post" name="form1" id="form1" >
          <ul id="lkgAdm">
            <li>Student Name: <input name="StudentName" type="hidden" value="<?php echo $StudentName; ?>" /> <strong><span class="style1"><?php echo $StudentName; ?></span></strong></li>
            <li>Date of Birth:<input name="dob" type="hidden" value="<?php echo $dob; ?>" /><strong><span class="style1"> <?php echo $dob; ?></span></strong></li>
            <li>Place of birth:<input name="BirthPlace" type="hidden" value="<?php echo $BirthPlace; ?>" /><strong><span class="style1"> <?php echo $BirthPlace; ?></span></strong></li>
            <li>Religion:<input name="Religion" type="hidden" value="<?php echo $Religion; ?>" /><strong><span class="style1"> <?php echo $Religion; ?></span></strong></li>
			<li>(If Catholic)Date of Baptism:<input name="BaptismDate" type="hidden" value="<?php echo $BaptismDate; ?>" /><strong><span class="style1"> <?php echo $BaptismDate; ?></span></strong></li>
			<li>Place of Baptism: <input name="BaptismPlace" type="hidden" value="<?php echo $BaptismPlace; ?>" /><strong><span class="style1"><?php echo $BaptismPlace; ?></span></strong></li>
			<li>Name of the Present Parish:<input name="Priest" type="hidden" value="<?php echo $Priest; ?>" /><strong><span class="style1"> <?php echo $Priest; ?></span></strong></li>
            <li>Mother Tongue: <input name="MotherTongue" type="hidden" value="<?php echo $MotherTongue; ?>" /><strong><span class="style1"><?php echo $MotherTongue; ?></span></strong></li>
            <li>Own sister:<input name="sibblings" type="hidden" value="<?php echo $sibblings; ?>" /><strong><span class="style1"> <?php echo $sibblings; ?></span></strong></li>
            <li>Sister Name & Standard:<input name="SibblingsName" type="hidden" value="<?php echo $SibblingsName; ?>" /> <strong><span class="style1"><?php echo $SibblingsName; ?></span></strong></li>
            <li>Father Name:<input name="fName" type="hidden" value="<?php echo $fName; ?>" /><strong><span class="style1"> <?php echo $fName; ?></span></strong></li>
			<li>Fathers Occupation:<input name="Focupation" type="hidden" value="<?php echo $Focupation; ?>" /> <strong><span class="style1"><?php echo $Focupation; ?></span></strong></li>
			<li>Fathers Qualification:<input name="Fqualification" type="hidden" value="<?php echo $Fqualification; ?>" /><strong><span class="style1"><?php echo $Fqualification; ?></span></strong></li>
			<li>Fathers Income (per month):<input name="Fincome" type="hidden" value="<?php echo $Fincome; ?>" /><strong><span class="style1"> <?php echo $Fincome; ?></span></strong></li>
            <li>Mother Name: <input name="Mname" type="hidden" value="<?php echo $Mname; ?>" /><strong><span class="style1"><?php echo $Mname; ?></span></strong></li>
            <li>Mother’s Qualification:<input name="Mqualification" type="hidden" value="<?php echo $Mqualification; ?>" />  <strong><span class="style1"><?php echo $Mqualification; ?></span></strong></li>
            <li>Mother’s Income (per month):<input name="Mincome" type="hidden" value="<?php echo $Mincome; ?>" />  <strong><span class="style1"><?php echo $Mincome; ?></span></strong></li>
            <li>Mother’s Occupation:<input name="Moccupation" type="hidden" value="<?php echo $Moccupation; ?>" /> <strong><span class="style1"> <?php echo $Moccupation; ?></span></strong></li>
            <li>Mother Tongue:<input name="MotherTongue" type="hidden" value="<?php echo $MotherTongue; ?>" /> <strong><span class="style1"><?php echo $MotherTongue; ?></span></strong></li>
			<li>Address1:<input name="address" type="hidden" value="<?php echo $address; ?>" /> <strong><span class="style1"> <?php echo $address; ?></span></strong></li>
			<li>Telephone Office: <input name="TelOff" type="hidden" value="<?php echo $TelOff; ?>" /><strong><span class="style1"><?php echo $TelOff; ?></span></strong></li>
			<li>Telephone Residence:<input name="TelRes" type="hidden" value="<?php echo $TelRes; ?>" /> <strong><span class="style1"> <?php echo $TelRes; ?></span></strong></li>
            <li>Mobile: <input name="phone" type="hidden" value="<?php echo $phone; ?>" /><strong><span class="style1"><?php echo $phone; ?></span></strong></li>
			<li>Email:<input name="email" type="hidden" value="<?php echo $email; ?>" /> <strong><span class="style1"> <?php echo $email; ?></span></strong></li>
            <strong>The following must be attached to this Form at the time of Submission </strong><br />
1. Photostat copy of Corporation Birth Certificate/Baptism Certificate.
             <br />
            2. Copy of the Ration Card for address proof to be enclosed.
            <br />
            3. Passport size photograph of the child.
            <br />
            4. A Self addressed stamped cover (Long size) of Rs.5/- <br />
            <br />
            Submission of Preliminary Application <br />
Date: <span class="style1"><strong>April 8th, 9th &amp; 10th </strong></span><br />
Time: <strong><span class="style1">2.00pm to 4.00pm </span></strong><br />
            <br />
            <div style="padding:10px; background-color:#CCC;"><span id="sprycheckbox1">
              <input name="pay" type="checkbox" class="fltlft" id="pay" />
              <span class="checkboxRequiredMsg fltlft" >Please Select.</span></span><strong>5. Kindly Pay Rs100/- towards the form at the time of submission</strong><br />
</div>
<span class="style1">You will receive SMS on your mobile  on sucsessfully submiting the Application Form</span><br />
<br />
<li><input name="payuSubmit" type="submit" value="Submit LKG Preliminary Application Form" />
</li>
          </ul>
        </form>
         
      </div>
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
<script type="text/javascript">
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>
</body>
</html>
