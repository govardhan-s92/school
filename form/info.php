<?php $dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'rossary';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rosary Matriculation School - Admissions</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="calender.js"></script>
<style type="text/css">
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
#wrapper #mainContainer #incenterPanel #form1 #lkgAdm li {
	margin-bottom: 8px;
	padding-bottom: 8px;
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #F4F4F4;
	list-style-type: none;
}
.style4 {color: #FF6600; font-size: 10px; }
</style>
</head>

<body>
<div id="wrapper">
  <div id="innerheader">
   <div id="menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About us</a></li>
        <li><a href="Gallery.html">Gallery</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li><a href="#">Parentalert</a></li>
      </ul>
    </div><div class="clrflt"><!--&nbsp;--></div>
    <div id="breadCrumb"><br />
<br />
<br />
<br />
<a href="index.html">Home</a> &gt; Admissions</div>
  </div>
  <div id="mainContainer">
    <div id="leftPanel"> <ul> <li><a href="aboutus.html">About School</a></li> <li><a href="history.html">History</a></li> <li><a href="management.html">Management</a></li> 
      <li><a href="torchBearers.html">Torch Bearers</a></li>
       <li><a href="admissions.html">Admissions</a></li>

       
       <li><a href="academics.html">Academics</a></li> 
    <li><a href="Infrastructure.html">Facilities</a></li> 
    <li><a href="sports.html">Sports</a></li> <li><a href="gallery.html">Gallery</a></li> <li><a href="NewsEvents.html">News &amp; Events</a></li> <li><a href="alumni.html">Alumni</a></li> 
     
    </ul> 
    </div><div id="incenterPanel"> 
      <h1><span class="style1">LKG Admissions</span></h1>
<div style="width:350px; margin-left:150px;">
        <!--<form id="form1" name="form1" method="post" action="admissiostore.php">
          <ul id="lkgAdm">
            <li>
              <input name="firstname" type="text" class="txtfld" id="firstname" />
              Student Name:</li>
            <li>
               
               <select name="year" id="year"  class="txtflds">
                 <option selected="selected">YEAR</option>
                 <option>2009</option>
                 <option>2010</option>
               </select><select name="month" id="month" class="txtflds">
                 <option>MONTH</option>
                 <option>JANUARY</option>
                 <option>FEBRUARY</option>
                 <option>MARCH</option>
                 <option>APRIL</option>
                 <option>MAY</option>
                 <option>JUNE</option>
                 <option>JULY</option>
                 <option>AUGUST</option>
                 <option>SEPTEMBER</option>
                 <option>OCTOBER</option>
                 <option>NOVEMBER</option>
                 <option>DECEMBER</option>
               </select><select name="date" id="date" class="txtflds">
             <option selected="selected">DATE</option>
                   <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
              </select>Date of Birth:
              <br />
              <span class="style4">As per birth Certificate</span></li>
            <li><input type="text" name="email" id="email" class="txtfld" />Email:            </li>
              
               <li><input type="text" name="fName" id="fName" class="txtfld" />Father Name:            </li>
		    <li><input type="text" name="phone" id="phone" class="txtfld" />
		    Phone:            </li>
			   <li><input type="text" name="address1" id="address1" class="txtfld" />Address1:</li>
			   <li><input type="text" name="address2" id="address2" class="txtfld" />Address2:            </li>
			  
		    <li><input type="text" name="pcode" id="pcode" class="txtfld" />Pin Code:</li>
              <li> <input name="amount" type="hidden" id="amount" value="110" />
                <input name="surl" type="hidden" id="surl" value="http://www.rosarychennai.com/success.html" />
                <input name="furl" type="hidden" id="furl" value="http://www.rosarychennai.com/failure.html" />
                <input name="proceed" type="submit" class="fltrgt" id="proceed" value="Submit form" />
                <input name="productinfo" type="hidden" id="productinfo" value="AdmissionForm" />
            </li>
          </ul>
        </form>-->
      </div>
      <?php 
	echo "<form  method='post' action='index.php'><table border='1' width='600' align='center' cellpadding='2' cellspacing='0'>
<tr bgcolor='#3A81C3' style='color:#ffffff;'>
<th style='width:30%;'>Student Name</th>
<th style='width:15%;'>Date of Birth</th>
<th style='width:15%;'>Religion</th>
<th style='width:15%;'>Contact</th>
<th style='width:15%;'>Email</th>


</tr>";
$qury = "Select * FROM admission";
$resu = @mysql_query($qury);
while($row = mysql_fetch_array($resu))
  {
  $StudentName = $row['StudentName'];
  $DOB = $row['DOB'];
  $Religion = $row['Religion'];
  $Mobile = $row['Mobile'];
  $Email = $row['Email'];
  //$credits = $row['credits'];
  echo "<tr>";
  echo "<td>" . $StudentName . "</td>";
  echo "<td>" . $DOB . "</td>";
  echo "<td align='center'>" . $Religion . "</td>";
  echo "<td>" . $Mobile . "</td>";
  echo "<td >" . $Email . "</td>";
  //echo "<td>" . $credits . "</td>";

  echo "</tr>";  
  }
  	echo "</table>";
	echo "</form>";
	
    ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
        <img src="images/ftimg-1.jpg" width="183" height="108" /><br />
We are presenting a free students library. It's including different type of videos of student problems, research papers and solved questions.
      </div>
      <div class="fPanel">
      <span class="style2">Computer Lab</span><br />
        <img src="images/ftimg-3.jpg" width="183" height="108" /><br />
We are presenting a free students library. It's including different type of videos of student problems, research papers and solved questions.    </div>
    <div class="fPanel">
    <span class="style2">Physics Lab</span><br />
        <img src="images/ftimg-2.jpg" width="183" height="108" /><br />
We are presenting a free students library. It's including different type of videos of student problems, research papers and solved questions.      </div>
    <div class="clrflt"><!--&nbsp;--></div>
  </div>
</div>
</body>
</html>
