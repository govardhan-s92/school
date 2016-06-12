<?php
	require_once('login/auth.php');
	//Include database connection details
	require_once('login/config.php');
	error_reporting(0);
	
if (isset($_POST['sub']))
	{
$ADMISSION_ID=$_POST['ADMISSION_ID'];
$period="1";
$cur_date = date("Y-m-d h:i:sa");
$selabs = "SELECT ADMISSION_ID from feesreceipt where ADMISSION_ID='$ADMISSION_ID'";
		$selabsexe = mysql_query($selabs) or die (mysql_error());
		$numabs = mysql_num_rows($selabsexe);
		if($numabs >0)
			{
				echo "Already Entered";
			}
			else
			{
$query = "INSERT INTO feesreceipt(ADMISSION_ID, rec_date, period) values ('$ADMISSION_ID', '$cur_date', '$period')"; //Insert Query
$result = mysql_query($query) or die(mysql_error());
}
	}
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - infoMgmt</title>
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<script src="dist/js/ace-extra.min.js"></script>
</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default  ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							School Tree
						</small>
					</a>
				</div>

				
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="dist/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['STUDENTNAME'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li><a href="logout.php"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div ng-controller="dbCtrl" class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<?php include("menu.php"); ?>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Student Management</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								 	Student Invoice 
								
							</h1>
						</div><!-- /.page-header -->
						
					<div class="col-sm-12">
										

			<div ><!--class="container"-->
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img style="padding-bottom:20px;" src="dist/images/logo.jpg"> 
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong>   OxyRed  Technologies  LLC.</strong>
              <br>
                  <i>Address :</i> 245/908 , New York Lane,
              <br>
                  Forth Street , Deumark,
              <br>
                  United States.
              
         </div>
     </div>
     <div class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr>
             <span>
                 <strong>Email : </strong>  info@yourdomain.com 
             </span>
             <span>
                 <strong>Call : </strong>  +95 - 890- 789- 9087 
             </span>
              <span>
                 <strong>Fax : </strong>  +012340-908- 890 
             </span>
             <hr>
         </div>
     </div>
     <div class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>Student Information</strong></h4>
           <strong>  Jhon Deo Chuixae</strong>
             <br>
                  <b>Address :</b> 145/908 , New York Lane,
              <br>
                 United States.
             <br>
             <b>Call :</b> +90-908-567-0987
              <br>
             <b>E-mail :</b> info@clientdomain.com
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Payment Details </strong></h4>
            <b>Bill Amount :  990  </b>
              <br>
               Bill Date :  01th August 2016
              <br>
               <b>Payment Status :  Paid </b>
               <br>
               Delivery Date :  10th August 2016
              <br>
               Purchase Date :  30th July 2016
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Perticulars</th>
                                    <th>Quantity.</th>
                                    <th>Unit Price</th>
                                     <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Website Design</td>
                                    <td>1</td>
                                    <td>300 <i class="fa fa-inr" aria-hidden="true"></i>
</td>
                                    <td>300 <i class="fa fa-inr" aria-hidden="true"></i>
</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Plugin Dev.</td>
                                    <td>2</td>
                                    <td>200 <i class="fa fa-inr" aria-hidden="true"></i>
</td>
                                    <td>400 <i class="fa fa-inr" aria-hidden="true"></i>
</td>
                                </tr>
                                <tr>
                                     <td>3</td>
                                    <td>Hosting Domains</td>
                                    <td>2</td>
                                    <td>100 <i class="fa fa-inr" aria-hidden="true"></i>
</td>
                                    <td>200 <i class="fa fa-inr" aria-hidden="true"></i>
</td>
                                </tr>
                                
                            </tbody>
                        </table>
               </div>
             <hr>
             <div class="ttl-amts">
               <h5>  Total Amount : <i class="fa fa-inr" aria-hidden="true"></i>
 900 </h5>
             </div>
             <hr>
              <div class="ttl-amts">
                  <h5>  Tax : <i class="fa fa-inr" aria-hidden="true"></i>
 90  by 10 % on bill ) </h5>
             </div>
             <hr>
              <div class="ttl-amts">
                  <h4> <strong>Bill Amount : <i class="fa fa-inr" aria-hidden="true"></i>
  990 </strong> </h4>
             </div>
         </div>
     </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <strong> Important: </strong>
             <ol>
                  <li>
                    This is an electronic generated invoice so doesn't require any signature.

                 </li>
                 <li>
                     Please read all terms and polices on  www.yourdomaon.com for returns, replacement and other issues.

                 </li>
             </ol>
             </div>
         </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr>
             <a class="btn btn-primary btn-lg" href="#">Print Invoice</a>
             &nbsp;&nbsp;&nbsp;
              <a class="btn btn-success btn-lg" href="#">Download In Pdf</a>

             </div>
         </div>
 </div>
			<!-- scrool Up starts Here -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a></div>
			</div>
			</div>
            <!-- scrool Up ends Here -->
		</div><!-- /.main-container -->
        <div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">School Tree</span>
							 &copy; 2016-2017
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
		  </div>
		</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		 
		<!-- page specific plugin scripts -->
		<!--[if lte IE 8]>
		  <script src="dist/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="dist/js/bootstrap-tag.min.js"></script>
		<script src="dist/js/angular.min.js"></script>
		<!-- ace scripts -->
		<script src="dist/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
var fetch = angular.module('myApp', []);

        fetch.controller('dbCtrl', ['$scope', '$http', function ($scope, $http) {
			
			 $http.get("ajax/selectData/selclass.php")
                .success(function(classsec){
                    $scope.class = classsec;
                })
                .error(function() {
                    $scope.class = "error in fetching data";
                });
			
			
			
			
			
			 //$scope.user = {};
			$scope.selStudent = function() {
				$http({
          method  : 'POST',
          url     : 'payFees.php',
          data    : $scope.user, //forms user object
		  cache: false,
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
                .success(function(data){
                    $scope.data = data;
                })
                .error(function() {
                    $scope.data = "error in fetching data";
                });
				}
        }]);
				// Angular code ends here
        </script>
	</body>
</html>
