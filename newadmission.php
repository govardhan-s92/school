﻿<?php
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
       <link rel="stylesheet" href="dist/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
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
								
								<span class="user-info"><small>Welcome,</small><?php echo $_SESSION['firstname'];?>
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
							<h1>Add new Student</h1>
						</div><!-- /.page-header -->
						
					<div class="col-sm-9">
										

										
																			
					
				<div class="row">
							 <form id="myForm" name="myForm" class="form-horizontal" ng-submit="addAdmission()">
                             <div class="col-xs-12">
                           
 <div class="form-group col-sm-6" >
 <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Class:</label>
 <div class="col-sm-8">
 <select id="form-field-select-1" name="CLASS_ID" ng-model="user.CLASS_ID" class="col-sm-12">
 <option value="">Select Class</option>
 <option ng-repeat="x in class" value="{{x.CLASS_ID}}">{{x.Standard}} - {{x.Section}}</option></select>
 </div>
 </div><div class="form-group col-sm-6" ng-show = "user.CLASS_ID == '48' || user.CLASS_ID == '47' || user.CLASS_ID == '46' || user.CLASS_ID == '45' || user.CLASS_ID == '44' || user.CLASS_ID == '43' || user.CLASS_ID == '42' || user.CLASS_ID == '41'">
 <label class="col-sm-4 control-label no-padding-right" for="form-field-select-2">Group:</label>
 <div class="col-sm-8">
  <select id="form-field-select-2" name="grp" ng-model="user.grp" class="col-sm-12">
 <option value="">Select Class</option>
  <option ng-repeat="x in group" value="{{x.groupName}}">{{ x.groupName }}</option></select>
                           
 </div>
 </div>
 <div class="form-group col-sm-6">
                      <label class="col-sm-4 control-label no-padding-right" for="studentName">Name</label>
                      <div class="col-sm-8">
                        <input type="text" id="StudentName" required value="" placeholder="Student Name" name="sname" ng-model="user.sname" class="col-xs-10 col-sm-12">
                     <span ng-show="myForm.sname.$touched && myForm.sname.$invalid">The name is required.</span> </div>
                    </div>
    				<div class="form-group col-sm-6">
                      <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Father Name</label>
                      <div class="col-sm-8">
                        <input type="text" id="Father Name" required value="" placeholder="Last Name" class="col-xs-10 col-sm-12" name="fname" ng-model="user.fname"  >
                         <span ng-show="myForm.fname.$touched && myForm.fname.$invalid">The name is required.</span>
                      </div>
                    </div>
					
					<div class="form-group col-sm-6">
                      <label class="col-sm-4 control-label no-padding-right" for="form-field-1">DOB:</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <input class="form-control date-picker" name="DOB" id="date_picker" data-date-format="dd-mm-yyyy" type="text" ng-model="user.DOB">
                          <span class="input-group-addon"> <i class="fa fa-calendar bigger-110"></i> </span> </div>
                      </div>
                    </div>
					 <div class="form-group col-sm-6">
					
                      <label class="col-sm-4 control-label no-padding-right" for="form-field-select-4">Type</label> <div class="col-sm-8">
                      <select id="form-field-select-4" name="stuType" ng-model="user.Type" class="col-sm-12">
					 <option value="">Select Class</option>
					 <option ng-repeat="x in type" value="{{x.stuType}}">{{x.stuType}}</option></select>
                    </div></div>
					  <div class="form-group col-sm-6" >
 <label class="col-sm-4 control-label no-padding-right" for="form-field-select-3">2nd Language:</label>
 <div class="col-sm-8">
<select id="form-field-select-3" name="IILanguage" ng-model="user.IILanguage" class="col-sm-12">
 <option value="">Select Class</option>
 <option ng-repeat="x in lang" value="{{x.langName}}">{{x.langName}}</option></select>
 </div>
 </div>
                    
                  
 <!--<div class="form-group col-sm-6">
                      <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Phone</label>
                      <div class="col-sm-8">
                        <input type="text" id="phone" placeholder="Mobile Number" class="col-xs-10 col-sm-12" name="ecMobile">
                      </div>
                    </div>-->
                   
                  <!-- <div class="form-group col-sm-6">
                      <label for="anglo-indian" class="col-sm-4 control-label no-padding-right">Boarder</label>
                      <div class="col-sm-8" style="padding-top:4px" >
                        <label class="col-sm-4"><span class="lbl ">Yes </span>
                          <input ng-model="user.Boarder" name="Boarder" type="radio" value="Yes" />
                        </label>
                        <label class="col-sm-4"><span class="lbl"> No</span>
                          <input ng-model="user.Boarder" name="Boarder" type="radio" value="No"  />
                        </label>
                      </div>
                    </div>-->
                    
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog"> 
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="smaller lighter blue no-margin">Add New Admission?</h3>
                          </div>Successfully Admission Number Generated<br>
Admission Number is : {{data.ADNO}}
                          <div class="modal-footer">
                          <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>&nbsp;&nbsp;&nbsp;
                           <input class="btn btn-primary pull-left" name="proceed" type="Submit" value="Submit" ng-show="data.ADNO !== ''">
                           </div>
                        </div>
                      </div>
                    </div>
                     
    </div>          
								<!-- PAGE CONTENT BEGINS -->
							  <div class="row">
								<div class="form-group col-sm-6 pull-right"" >
								
								
<button id="generate_admi" class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal" > <i class="ace-icon fa fa-check bigger-110"></i> Generate Admission No: </button></div></div><!-- /.span -->
								
								<!-- /.row -->

								 </form>   

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
        <script src="dist/js/date-time/bootstrap-datepicker.min.js"></script> 

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
		 jQuery(function($) {
         	     	
         	//datepicker plugin
         	//link
         	$('.date-picker').datepicker({
         		autoclose: true,
         		todayHighlight: true
         	})
         	//show datepicker when clicking on the icon
         	.next().on(ace.click_event, function(){
         		$(this).prev().focus();
         	});
         
         	//or change it into a date range picker
         	$('.input-daterange').datepicker({autoclose:true});
         	
         	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
         		no_file:'No File ...',
         		btn_choose:'Choose',
         		btn_change:'Change',
         		droppable:false,
         		onchange:null,
         		thumbnail:false //| true | large
         		//whitelist:'gif|png|jpg|jpeg'
         		//blacklist:'exe|php'
         		//onchange:''
         		//
         	});
         	//pre-show a file name, for example a previously selected file
         	//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
         
         
         	$('#id-input-file-3').ace_file_input({
         		style: 'well',
         		btn_choose: 'Drop files here or click to choose',
         		btn_change: null,
         		no_icon: 'ace-icon fa fa-cloud-upload',
         		droppable: true,
         		thumbnail: 'small'//large | fit
         		//,icon_remove:null//set null, to hide remove/reset button
         		/**,before_change:function(files, dropped) {
         			//Check an example below
         			//or examples/file-upload.html
         			return true;
         		}*/
         		/**,before_remove : function() {
         			return true;
         		}*/
         		,
         		preview_error : function(filename, error_code) {
         			//name of the file that failed
         			//error_code values
         			//1 = 'FILE_LOAD_FAILED',
         			//2 = 'IMAGE_LOAD_FAILED',
         			//3 = 'THUMBNAIL_FAILED'
         			//alert(error_code);
         		}
         	}).on('change', function(){
         		//console.log($(this).data('ace_input_files'));
         		//console.log($(this).data('ace_input_method'));
         	});
         	//$('#id-input-file-3')
         	//.ace_file_input('show_file_list', [
         		//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
         		//{type: 'file', name: 'hello.txt'}
         	//]);
         	//dynamically change allowed formats by changing allowExt && allowMime function
         	$('#id-file-format').removeAttr('checked').on('change', function() {
         		var whitelist_ext, whitelist_mime;
         		var btn_choose
         		var no_icon
         		if(this.checked) {
         			btn_choose = "Drop images here or click to choose";
         			no_icon = "ace-icon fa fa-picture-o";
         
         			whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
         			whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
         		}
         		else {
         			btn_choose = "Drop files here or click to choose";
         			no_icon = "ace-icon fa fa-cloud-upload";
         			whitelist_ext = null;//all extensions are acceptable
         			whitelist_mime = null;//all mimes are acceptable
         		}
         		var file_input = $('#id-input-file-3');
         		file_input
         		.ace_file_input('update_settings',
         		{
         			'btn_choose': btn_choose,
         			'no_icon': no_icon,
         			'allowExt': whitelist_ext,
         			'allowMime': whitelist_mime
         		})
         		file_input.ace_file_input('reset_input');
         		file_input
         		.off('file.error.ace')
         		.on('file.error.ace', function(e, info) {
         			//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
         		});
         		
         	});
         });
		
var fetch = angular.module('myApp', []);

        fetch.controller('dbCtrl', ['$scope', '$http', function ($scope, $http) {
			$scope.originalUser = angular.copy($scope.user);
			 
			 // Start Sel Class
			 $http.get("ajax/selectData/selclass.php")
                .success(function(classsec){
                    $scope.class = classsec;
                })
                .error(function() {
                    $scope.data = "error in fetching data";
                });
			 // Start Sel 2ndLanguage
				 $http.get("ajax/selectData/sellang.php")
                .success(function(lang){
                    $scope.lang = lang;
                })
                .error(function() {
                    $scope.lang = "error in fetching data";
                });
				 // Start Sel group
				 $http.get("ajax/selectData/selgroup.php")
                .success(function(group){
                    $scope.group = group;
                })
                .error(function() {
                    $scope.group = "error in fetching data";
                });
				
				// Start Sel Typr
				 $http.get("ajax/selectData/selType.php")
                .success(function(stuType){
                    $scope.type = stuType;
                })
                .error(function() {
                    $scope.type = "error in fetching data";
                });
				
				
				
				
			 //$scope.user = {};
			$scope.addAdmission = function() {
				$http({
          method  : 'POST',
          url     : 'ajax/insertData/admission.php',
          data    : $scope.user, //forms user object
		  cache: false,
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
                .success(function(data){
                    $scope.data = data;
					$scope.user = angular.copy($scope.originalUser);
					$scope.editUserForm.$setPristine();
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
