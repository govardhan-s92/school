<?php
	require_once('login/auth.php');
	//Include database connection details
	require_once('login/config.php');
	error_reporting(0);
	
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Create Class</title>
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
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['firstname'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							
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
							<h1>Create Classes</h1>
						</div><!-- /.page-header -->
						
					<div class="col-sm-9">
				<div class="row">
							       
								<!-- PAGE CONTENT BEGINS -->
							  <div class="row">
								<div class="col-xs-4">
                                <table id="simple-table" class="table table-bordered table-hover">
											<thead>
												<tr>
													<th class="detail-col">Sno</th>
													<th>Fee Heads</th>
													<th>Fee Heads</th>
													<th>Delete</th>
																							  </tr>
											</thead>
									<tbody>
											<tr ng-repeat="x in heads">
													<td>{{$index +1}}</td>
													<td>{{ x.feehead }}</td>
													<td>{{ x.feehead }}</td>
													<td><a href="#{{ x.feeheadId }}" role="button" class="btn-sm btn-primary " data-toggle="modal">
													
									Delete
								</a>
                               <div style="display:none;" id="{{ x.feeheadId }}" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 class="smaller lighter blue no-margin">Confirm Delete?</h3>
											</div>

											
											<div class="modal-footer">
												<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>&nbsp;&nbsp;&nbsp;
                                                
											</div>
										</div>
									</div>
								</div>
								
                            </td>
							</tr></tbody></table>
                           

 <div class="form-group col-sm-12" >
 <label class="col-sm-9 control-label no-padding-right" for="form-field-select-1">Create Fee Heads:</label>
 <div class="col-sm-12">
 <input type="text" id="adno" placeholder="create Fee Heads" class="col-xs-12 col-sm-8" ng-model="user.head"/>
 <span class="input-group-btn">
																		<button type="submit" ng-click="creatfee();loadData()" class="btn btn-purple btn-sm">
																			<span class="ace-icon fa fa-plus icon-on-right bigger-110"></span>
																			
																		</button>
																	</span>
 </div>
 </div> 
								
									</div><!-- /.span -->
								<div class="col-xs-4">
                                <table id="simple-table" class="table table-bordered table-hover">
											<thead>
												<tr>
													<th class="detail-col">Sno</th>
													<th>Group Name</th>
													<th>Delete</th>
																							  </tr>
											</thead>
									<tbody>
											<tr ng-repeat="x in groups">
													<td>{{$index +1}}</td>
													<td>{{ x.feeGroup }}</td>
													<td><a href="#a" role="button" class="btn-sm btn-primary " data-toggle="modal">
									Delete
								</a> <div style="display:none;" id="a" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 class="smaller lighter blue no-margin">Confirm Delete?</h3>
											</div>

											
											<div class="modal-footer">
												<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>&nbsp;&nbsp;&nbsp;
                                                
											</div>
										</div>
									</div>
								</div>
                              
								
                            </td>
							</tr></tbody></table>
                           

 <div class="form-group col-sm-12" >
 <label class="col-sm-9 control-label no-padding-right" for="form-field-select-1">Create Fee Groups:</label>
 <div class="col-sm-12">
 <input type="text" id="adno" placeholder="create Fee Groups" class="col-xs-12 col-sm-8" ng-model="user.group"/>
 <span class="input-group-btn">
																		<button type="submit" ng-click="creatgroup();loadDatas()" class="btn btn-purple btn-sm">
																			<span class="ace-icon fa fa-plus icon-on-right bigger-110"></span>
																			
																		</button>
																	</span>
 </div>
 </div> 
                            
								
									</div><!-- /.span -->
								
								</div><!-- /.row -->

									

								<!-- PAGE CONTENT ENDS -->
							<!-- /.col -->
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
			
			
			$scope.loadData = function() {
			 $http.get("xxxxx.php")
                .success(function(classsec){
                    $scope.heads = classsec;
					 })
                .error(function() {
                    $scope.heads = "error in fetching data";
                }); 
			}
		$scope.loadData();

		//$scope.user = {};
			$scope.creatfee = function() {
				
				$http({
          method  : 'POST',
          url     : 'xxxxx.php',
          data    : $scope.user, //forms user object
		  cache: false,
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
		 .success(function(data){
                   $scope.user.head = "";	
					 })
				}
	/////Angular for group/////////////////////////			
				$scope.loadDatas = function() {
			 $http.get("xxxxxx.php")
                .success(function(classsec){
                    $scope.groups = classsec;
					 })
                .error(function() {
                    $scope.groups = "error in fetching data";
                }); 
			}
		$scope.loadDatas();
			$scope.creatgroup = function() {
				$http({
          method  : 'POST',
          url     : 'ajax/insertData/creatfeegroup.php',
          data    : $scope.user, //forms user object
		  cache: false,
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
		 .success(function(data){
                   $scope.user.group = "";	
					 })
				}
        }]);
				// Angular code ends here
        </script>
	</body>
</html>
