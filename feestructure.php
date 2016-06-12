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
<title>Dashboard - infoMgmt</title>
<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
<!-- ace styles -->
<link rel="stylesheet" href="dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="dist/css/xeditable.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="dist/css/select2.min.css" />
<link rel="stylesheet" href="dist/css/bootstrap-datepicker3.min.css" />
<!-- page specific plugin styles -->
<!-- text fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<!-- ace styles -->
<script src="dist/js/ace-extra.min.js"></script>
</head>
<body ng-controller="dbCtrl" class="no-skin">
<div id="navbar" class="navbar navbar-default  ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar"> <span class="sr-only">Toggle sidebar</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="navbar-header pull-left"> <a href="#" class="navbar-brand"> <small> <i class="fa fa-leaf"></i> School Tree </small> </a> </div>
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
        <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle">  <span class="user-info"> <small>Welcome,</small> <?php echo $_SESSION['firstname'];?> </span> <i class="ace-icon fa fa-caret-down"></i> </a>
          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li> <a href="#"> <i class="ace-icon fa fa-cog"></i> Settings </a> </li>
            <li> <a href="profile.html"> <i class="ace-icon fa fa-user"></i> Profile </a> </li>
            <li class="divider"></li>
            <li> <a href="logout.php"> <i class="ace-icon fa fa-power-off"></i> Logout </a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /.navbar-container --> 
</div>
<div class="main-container ace-save-state" id="main-container"> 
  <script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
  <div id="sidebar" class="sidebar responsive ace-save-state"> 
    <script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
      <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success"> <i class="ace-icon fa fa-signal"></i> </button>
        <button class="btn btn-info"> <i class="ace-icon fa fa-pencil"></i> </button>
        <button class="btn btn-warning"> <i class="ace-icon fa fa-users"></i> </button>
        <button class="btn btn-danger"> <i class="ace-icon fa fa-cogs"></i> </button>
      </div>
      <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini"> <span class="btn btn-success"></span> <span class="btn btn-info"></span> <span class="btn btn-warning"></span> <span class="btn btn-danger"></span> </div>
    </div>
    <!-- /.sidebar-shortcuts -->
    
    <?php include("menu.php"); ?>
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> </div>
  </div>
  
  <div class="main-content">
    <div class="main-content-inner">
      <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
          <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="#">Home</a> </li>
          <li class="active">Student Management</li>
        </ul>
        <!-- /.breadcrumb -->
        
        <div class="nav-search" id="nav-search">
          <form class="form-search">
            <span class="input-icon">
            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
            <i class="ace-icon fa fa-search nav-search-icon"></i> </span>
          </form>
        </div>
        <!-- /.nav-search --> 
      </div>
      <div class="page-content">
        <div class="page-header">
          <h1> Pay Fees </h1>
        </div>
        <!-- /.page-header -->
        
        <div class="row">
            <form ng-submit="selStudent()">
              <div class="col-xs-12">
                <div class="form-group col-sm-6" >
                  <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Admission_No:</label>
                  <div class="col-sm-8">
<select id="form-field-select-2" ng-model="feegrp.feeGroup" class="col-sm-8">
 <option value="">Select Class</option>
 <option ng-repeat="a in class" value="{{a.feeGroup}}">{{a.feeGroup}}</option></select>
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-purple btn-sm"> <span class="ace-icon fa fa-search icon-on-right bigger-110"></span> </button>
                    </span> </div>
                </div>
              </div>
            </form>
         
          
          <!-- PAGE CONTENT BEGINS -->
         
         <div id="user-profile-1" class="user-profile row">
            <div class="col-xs-12">
              <div id="user-profile-1" class="user-profile row">
                <div class="col-sm-5">
				
				<div class="table-header table-header profile-user-info">Student Details</div>  
											<table id="simple-table" class="table table-bordered table-hover">
											<thead>
												<tr>
													<th class="detail-col">Sno</th>
													<th>{{$index +1}}</th>
													<th>Delete</th>
													<th>  <form editable-form name="groupform" onaftersave="saveColumn('group')" ng-show="groupform.$visible">
          <button type="submit" ng-disabled="groupform.$waiting" class="btn btn-primary">
            save
          </button>
          <button type="button" ng-disabled="groupform.$waiting" ng-click="groupform.$cancel()" class="btn btn-default">
            cancel
          </button>
        </form>  
        <button class="btn btn-default" ng-show="!groupform.$visible" ng-click="groupform.$show()">
          edit
        </button></th>
																							  </tr>
											</thead>
											<tbody>
											<tr ng-repeat="user in data">
													<td>{{ user.feehead }}</td>
													<td>{{ user.ID }}</td>
													<td>{{ user.feeGroup }}</td>
													<td><span editable-text="user.feeamount" e-name="group" e-form="groupform">{{ user.feeamount || 'empty' }}
        </span></td></tr>
													
											</tbody>
											</table>
                                
				</div>
			 	</div>
          </div>
        </div>
        <!-- scrool Up starts Here --> 
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a>
		</div>
    </div>
    <!-- scrool Up ends Here --> 
  </div>
  <!-- /.main-container -->
  
  <div class="footer">
    <div class="footer-inner">
      <div class="footer-content"> <span class="bigger-120"> <span class="blue bolder">School Tree</span> &copy; 2016-2017 </span> &nbsp; &nbsp; <span class="action-buttons"> <a href="#"> <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i> </a> <a href="#"> <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i> </a> <a href="#"> <i class="ace-icon fa fa-rss-square orange bigger-150"></i> </a> </span> </div>
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
<script src="dist/js/date-time/bootstrap-datepicker.min.js"></script> 
<script src="dist/js/bootstrap-tag.min.js"></script> 
<script src="dist/js/angular.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-xeditable/0.1.12/js/xeditable.min.js"></script> 
<!-- ace scripts --> 
<script src="dist/js/ace.min.js"></script> 
<!-- inline scripts related to this page --> 
<script type="text/javascript">
		//var fetch = angular.module('myApp', []);
		var fetch = angular.module('myApp', ["xeditable"]);
		
		fetch.run(function(editableOptions) {
  		editableOptions.theme = 'bs3';
		});
	
	fetch.controller('dbCtrl', function($scope, $filter, $http, $q) {
		
		 $scope.selStudent = function() {
			 $http({
          method  : 'POST',
          url     : 'ajax/selectData/loadfeeMap.php',
          data    : $scope.feegrp, //forms user object
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
		 
		  $http.get("ajax/selectData/viewfeegroup.php")
                .success(function(classsec){
                    $scope.class = classsec;
                })
                .error(function() {
                    $scope.class = "error in fetching data";
                });
		 
		 
});	
				</script>
				
		
</body>
</html>
