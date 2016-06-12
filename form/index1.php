<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><style type="text/css">
<!--
#modalPage1        {
	position: absolute;
	width: 100%;
	top: 0px;
	left: 0px;
	height: 1500px;
	font-size: 12px;
	line-height: 18px;
}

.modalBackground {
	filter: Alpha(Opacity=70);
	-moz-opacity:0.9;
	opacity: 0.7;
	width: 100%;
	height: 100%;
	background-color: #2D2D2D;
	position: absolute;
	z-index: 500;
	top: 0px;
	left: 0px;
}
.modalContainer {
	position: absolute;
	left: 22%;
	top: 5%;
	z-index: 750;
	background-color: #333333;
}
*.html.modalContainer{
	top: 200px;
	background-color: #ffffff;
}
.modal {
	border: 1px solid #999999;
	position: relative;
	z-index: 1000;
	font-family: Arial, Helvetica, sans-serif;
	color: #999999;
	width: 640px;
}
.modal a {
	color: #FDE104;
	text-decoration: none;
	font-weight: bold;
}
.modalTop {
	background-color: #000000;
	padding: 4px;
	color: #ffffff;
	text-align: right;
}
.modalTop a, .modalTop a:visited {
	color: #FCDB00;
	font-weight: normal;
}
.modalBody {
	text-align: justify;
	padding: 10px;
}
.style1 {
	color: #FF9900;
	font-weight: bold;
	font-size: 12px;
	line-height: 20px;
}
.style2 {
	color: #01A0DA;
	font-weight: normal;
	font-size: 12px;
	line-height: 60px;
}
-->
</style>
<script type="text/javascript">

function hideModal(divID)
{
    document.getElementById(divID).style.display = "none";
}
</script>
<title>Rosary Matriculation School</title>
<meta charset="utf-8">
<link href="images/favicon.png" rel="shortcut icon">
<link href="images/favicon.png" rel="bookmark icon">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="grey">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min-latest.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/custom.js"></script>
 
        <script src="aslider.js"></script>
        <style>
            .aslide {
                display: none;
            }
            .aslide img {
                max-width: 100%;     
                margin-top: 114px;
                width:601px;           
            }
            #slider {
                width: 100%;
              
            }
            .aslide .text {
                width: 200px;
                margin: 0 auto;
                color: #f8f8f8;
                text-shadow: 0 0 2px #000;
                font-weight: bold;
                font-size: 36px;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 30px;
                font-family: sans-serif;
            }
        </style>
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
<script charset="utf-8">
$(document)
    .ready(function () {
    $("a[rel^='prettyPhoto']")
        .prettyPhoto();
});
</script>
</head>

<body>
<div id="wrap">
  <div id="header">
    <!-- Start navigation area -->
     <?php include("includes/menu.php"); ?>
    <!-- End navigation area -->
    <div class="clear"></div>
    <!-- Start Social & Logo area -->
    <div id="header_small">
      <!-- Start Social area -->
      
      <!-- End Socialarea -->
      <!-- Start Logo area -->
      <div id="logo"> <a href="index.html"><img src="images/logo.png"></a> </div>
      <!-- End Logo area -->
    </div>
    <!-- End Social & Logo area -->
  </div>
  <div class="clrflt"> <!-- XXX --></div>
  <div id="sliderwrap">
       <div id="slider" class="nivoSlider">
     <img src="images/slider-banners/slider01.jpg" alt=""> 
      <img src="images/slider-banners/slider02.jpg" alt="">
     <img src="images/slider-banners/slider03.jpg" alt=""> 


  <img src="images/slider-banners/slider04.jpg" alt=""> 
      <img src="images/slider-banners/slider05.jpg" alt="">
     <img src="images/slider-banners/slider06.jpg" alt="">
 <img src="images/slider-banners/slider07.jpg" alt="">
  <img src="images/slider-banners/slider08.jpg" alt="">
   <img src="images/slider-banners/slider10.jpg" alt="">
 </div>
    <div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
  </div>
  <div class="clrflt"> <!-- XXX --></div>
    <div class="titles" style="background:#303e6f;">
      <h1 style="margin-top:0px;"><a href="http://rosarychennai.com/old/admissions.html" target="_blank">Welcome to Rosary Matriculation School</a></h1>
  </div>
    <div class="clrflt"><!--XXXX--></div>
  <div id="main-wrap">
    <div class="boxes-third boxes-first" style="margin-left: ">
        <div class="boxes-padding">
          <div class="bti1" style="text-align:left;">
            <div class="featured-titles" style="width:100%;">Foundress of<br>
            Franciscan Missionaries of Mary</div><div class="clrflt"><!--XXXX--></div>
            <p><img src="images/mary.png" alt="" width="120" height="144" class="fltlft">The Institute of the Franciscan Missionaries Mary was founded by 1877 Mother Mary of the Passion at Ootacamund, Tamilnadu - an International Religious Congretion of women comprising 78 Nationalities spread over 76 countries in the five Continents of the world.<a href="#" class="fltrgt"><br>
            Read More &gt;&gt; </a></p>
          </div>
          <div class="clrflt">  <!-- End Featured Boxes -->
          </div><div>Blessed Mary of the Passion
              </div>
        </div>
        <span class="box-arrow"></span>  <div class="sam"></div></div>
    <div class="boxes-third">
        <div class="boxes-padding">
          <div class="bti1">
            <div class="featured-images"><img src="images/cleansleek-icon.png" width="66" height="53" alt=""></div>
            <div class="featured-titles">News and Events</div>
          </div>
          <div class="featured-text">
  <marquee direction="up" scrollamount="3" style="height:240px; position:relative;top:12px;" scrolldelay="70 class=" sidelink="" onmousedown="this.stop()" onmousemove="this.stop()" onmouseout="this.start()">
    <p><img src="images/new5.gif" alt="new" width="50" height="20">LKG Admission 2015-2016<br>
      Preliminary Application Forms can be downloaded on 1st and 2nd April 2015
      </p>
  <p><img src="images/new5.gif" alt="new" width="50" height="20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ipsum nunc, nec sagittis tellus.</p>
  <p><img src="images/new5.gif" alt="new" width="50" height="20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ipsum nunc, nec sagittis tellus.</p>
  </marquee> 
            <a href="site/index.html"></a>
            
            
 
          </div>
        </div>
        
        <span class="box-arrow"></span> <div class="sam"></div> </div>
  <div class="clrflt"> <!-- xxxxxx --></div>
      <!-- End Featured Boxes -->
      <!-- Start Latest Project titles 
    <div class="boxes-full" style="background:#ebe301;">
      <div class="boxes-padding fullpadding">
       <marquee direction="left" scrollamount="3" style="height:37px;" scrolldelay="70 class=" sidelink="" onmousedown="this.stop()" onmousemove="this.stop()" onmouseout="this.start()">
    <h1>100% Results</h1>
  </marquee>
      </div>
      <span class="box-arrow"></span> </div>-->
      <!-- End Latest Project titles -->
      <!-- Start Latest 3 Projects -->
    <div class="boxes-third1 boxes-first">
        <div class="latestthree">
          <div class="title">School Toppers In XII STD<span class="titlearrow"></span> </div>
          
          <div class="tit">  
            
            <marquee direction="left" scrollamount="3" style="height:267px;margin-top:22px;" scrolldelay="70 class=" sidelink="" onmousedown="this.stop()" onmousemove="this.stop()" onmouseout="this.start()">
            <img src="images/m11.jpg" alt="new" width="200" height="166">
  <img src="images/m12.jpg" alt="new" width="200" height="166">
              
            </marquee> 
            
  <div class="sam2"></div>
  </div>
        </div>
        
        
      </div>
    <div class="boxes-third1 boxes-first">
        <div class="latestthree">
          <div class="title"> Toppers<span class="titlearrow"></span> </div>
          <div class="tit">   
  <marquee direction="up" scrollamount="3" style="height:289px;" scrolldelay="70" sidelink="" onmousedown="this.stop()" onmousemove="this.stop()" onmouseout="this.start()">
    
    <p style="font-style:italic;font-family: cursive;">
      IRENE ROY JOJO - XII STD
      200/200 Mathematics
  </p>
  <p style="font-style:italic;font-family: cursive;">
    RESHMITHA R - XII STD
    200/200 Mathematics
  </p>
  <p style="font-style:italic;font-family: cursive;">
    SARASWATHI.S - XII STD
    200/200 Mathematics
  </p>
  <p style="font-style:italic;font-family: cursive;">
    VAISHALEE.S - XII STD
    200/200 Mathematics
  </p>
  <p style="font-style:italic;font-family: cursive;">
    RAISA.A - XII STD
    200/200 Biology
  </p>
  <p style="font-style:italic;font-family: cursive;">
    DIVYA.S - XII STD
    200/200 Economics
  </p>
  <p style="font-style:italic;font-family: cursive;">
    9 Centums in Commerce,17 Centums in Accountancy,4
  </p>
  <p style="font-style:italic;font-family: cursive;">
    ASHAA VIGASHINI.M - XII STD
    200/200 IN Physics
  </p>
  <p style="font-style:italic;font-family: cursive;">
    
    ANISHA PAULINE - XII STD
    200/200 Chemistry
  </p>
  <p style="font-style:italic;font-family: cursive;">
    MEENAKSHI.M - XII STD
    200/200 Chemistry
  </p>
  <p style="font-style:italic;font-family: cursive;">
    SHARON JACOB - XII STD
    200/200 Computer Science
  </p>
    
  </marquee>
            <div class="sam2"></div>
  </div> 
          
        </div>
        
      </div>
    <div class="boxes-third1 boxes-first">
        <div class="latestthree">
          <div class="title">
            Virtual Tour<span class="titlearrow"></span> </div>
            
          <div class="tit">  
  <a href="site/index.html" target="_blank"><img src="images/tour.jpg" width="275" height="290"></a>
  <div class="sam2"></div>
  </div>
        </div>
          
          
        </div>
    <div class="clrflt"><!--XXXX--></div>
  <div class="boxes-fourth boxes-first" style="width:630px;">
    <div class="latestthree">
      <div class="title">
        Blessed Mary Of the Passion
        <br>Maxims<span class="titlearrow"></span> </div>
      
      <div class="tit">  
        <div id="slider" class="aslider" data-duration="10" data-hide-controls>
          
  <div class="aslide" data-duration="4" data-audio="assets/audio/Acoustic-Josh-10248_hifi.mp3" data-audio-loop>
    <img src="assets/images/5.jpg" height="400" width="500" />
    
    </div>  
          
          <div class="aslide" data-duration="4" data-audio="assets/audio/Acoustic-Josh-10248_hifi.mp3" data-audio-loop>
            <img src="assets/images/1.jpg" height="400" width="500" />
            
            </div>   
          <div class="aslide" data-duration="5" data-audio="assets/audio/Country_-Adrien_G-8614_hifi.mp3">
            <img src="assets/images/2.jpg" height="400" width="500"/>
            
            </div>  
          <div class="aslide" data-duration="7" data-audio="assets/audio/I_Wouldn-duh-8326_hifi.mp3">
            <img src="assets/images/6.jpg"  height="400" width="500"  />
            
            </div>    
          <div class="aslide" data-duration="6" data-audio="assets/audio/Driving_-SpoonZ-9705_hifi.mp3">
            <img src="assets/images/3.jpg" height="400" width="500" />
            
            </div>    
          <div class="aslide" data-duration="7" data-audio="assets/audio/I_Wouldn-duh-8326_hifi.mp3">
            <img src="assets/images/4.jpg"  height="400" width="500"  />
            
            </div>            
          </div> 
 
  </div> <div class="sam3"></div>
      </div>
    
    
    </div>
      
      
      <div class="boxes-third1 boxes-first">
        <div class="latestthree">
          <div class="title">
            Events<span class="titlearrow"></span> </div>
          
          <div class="tit1">  
  <a href="events/index.html"><img src="images/event.jpg" width="289" height="300"></a>
  <div class="sam3"></div>
  </div>
        </div>
        
        
      </div>
      <!-- End Latest 3 Projects -->
  </div>
  <div class="clrflt"><!--XXXX--></div>
  <div id="footer">
    <!-- Start Footer Top -->
    
    <!-- End Footer Top -->
    
    <!-- Start Footer Bottom -->
    <div id="footerbottom">
      <div class="footerwrap">
        <!-- Start Copyright Div -->
        <div id="copyright">Copyright@2014</div>
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
  
</div><div id="scrolltab"></div>
<!-- End Scroll To Top Div -->
<div id="modalPage1" >
  <div class="modalBackground"></div>
  <div class="modalContainer">
    <div class="modal">
      <div class="modalTop"><span class="fltlft">Admission Announcement</span><a href="#a" onfocus="this,blur();" onclick="hideModal('modalPage1')"><strong>Close X</strong></a></div>
      <div class="modalBody"><strong><img src="images/admis.jpg" width="619" height="237" /><br />
        <br />
        </strong>
        <h1 class="style1" style="font-size:16px;"><a href="old/admissions.html" target="_blank">Click Here to Download LKG Preliminary Application </a></h1>
        <br />
        <br />
        <span class="style1">Download the Preliminary application using the application number sent by SMS</span><br />
        <br />
<form action="old/form/downloaded.php" method="post" name="form1" id="form1" >
          Enter Application Number:
              <input name="app" type="text" />
              <br />
<br />
              Date: <select name="date" class="txtflds" id="date" style="width:100px;">
  <option>Select Date</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
               
          Month: 
          <select name="month" class="txtflds" id="month">
    <option selected="selected">Select Month-Year</option>
    <option value="JUN-2011" >JUNE-2011</option>
    <option value="JUL-2011">JULY-2011</option>
    <option value="AUG-2011">AUGUST-2011</option>
    <option value="SEP-2011">SEPTEMBER-2011</option>
    <option value="OCT-2011">OCTOBER-2011</option>
    <option value="NOV-2011">NOVEMBER-2011</option>
    <option value="DEC-2011">DECEMBER-2011</option>
    <option value="JAN-2012">JANUARY-2012</option>
    <option value="FEB-2012">FEBRUARY-2012</option>
    <option value="MAR-2012">MARCH-2012</option>
    <option value="APR-2012">APRIL-2012</option>
    <option value="MAY-2012">MAY-2012</option>
    </select>
          <br />
          <br />
<input name="aaa" type="submit" value="Download the Preliminary Application" />
        </form></p>
        <!--<span class="style1"><strong>The child must complete 3 Years on or before 31st May 2015</strong></span><strong><br />
        <br />
        The following must be attached to the preliminary Application Form at the time of submission:<br />
        <span class="style1">1. Photstat copy of Corporation Birth Certificate/ Baptism certificate. (Christians only)<br />
        2. Copy of the Ration card for Address proof
        </span></strong><span class="style1"><br />
      3. 
      One Passport size photograph of the child to be attached to the form<br />
      4. Self addressed stamp cover with Rs. 5/- stamp affixed  (Long size) </span>--></div>
  </div></div>
</div>
</body>
</html>
