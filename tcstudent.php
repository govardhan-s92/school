<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sndja';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);


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
           <link rel="stylesheet" href="dist/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="dist/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
		
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="dist/css/chosen.min.css" />
		<link rel="stylesheet" href="dist/css/dropzone.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="dist/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="dist/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="dist/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="dist/js/html5shiv.min.js"></script>
		<script src="dist/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin" ng-controller="myCtrl">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
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
								 Pay Fees
								
							</h1>
						</div><!-- /.page-header -->
						
					<div class="col-sm-9">
										

										<div id="accordion" class="accordion-style1 panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a aria-expanded="true" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															&nbsp;Search student
														</a>
													</h4>
												</div>

												<div style="" aria-expanded="true" class="panel-collapse collapse in" id="collapseOne">
													<div class="panel-body">
														<form class="form-horizontal" role="form">
														
														
									
									                   
														<div class="form-group col-sm-6">
															<label for="form-field-select-2" class="col-sm-4 control-label no-padding-right">Name</label>
															<div class="col-sm-8">
															<input type="text" id="form-field-select-2" class="col-xs-10 col-sm-12" ng-model="test2">
																
														</div>
														</div>

														<div class="form-group col-sm-6">
															<label for="form-field-select-2" class="col-sm-4 control-label no-padding-right">Admission No</label>
															<div class="col-sm-8">
															<input type="text" id="form-field-select-2" class="col-xs-10 col-sm-12" ng-model="test3">
																
														</div>
														</div>
														
										

									<div class="hr hr-24"></div>

									<div class="row"><!-- /.span --><!-- /.span --><!-- /.span -->
									</div><!-- /.row -->
									


									

                                    
									
								</form>
	                             </div>
												</div>
											</div>
											
											
											
											
											
										</div>
																			
					
				<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								
								<div class="row">
								
									<div class="col-xs-12">
									<div class="pull-right tableTools-container">
									<div class="dt-buttons btn-overlap btn-group">
											<div class="col-md-offset-3 col-md-9">
											<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								

								

								
		

								

							

								<!-- PAGE CONTENT ENDS -->
							</div>

											
											
										</div>
									
									</div> </div>
										
										
                  <?php
				$abslist = "SELECT * FROM tc";			
				$abslistexe = mysql_query($abslist);
				echo "<table border='1' cellspacing='0' cellpadding='3' width='700px' align='center'>";
				
				echo"<form name'absform' method='POST' action='download.php'>
				<tr>
				<td><b>Receipt No</b></td>
				<td><b>ADMISSION_ID</b></td>
				<td><b>Class & Sec</b></td>
				<td><b>AI</b></td>
				
				</tr>";
				
						while($row = mysql_fetch_array($abslistexe)){
						$SNo = $row['SNo'];
						$AdmissionNumber = $row['AdmissionNumber'];
						$RegNo = $row['RegNo'];
						$TMR = $row['TMR'];
						$MLno = $row['MLno'];
						$TCno = $row['TCno'];
						$NameofCandidates = $row['NameofCandidates'];
						$NameofFather = $row['NameofFather'];
						$NationRelCaste = $row['NationRelCaste'];
						echo "<tr>";
						echo "<td>$SNo</td>";
						echo "<td>$AdmissionNumber</td>";
						echo "<td>$NameofCandidates</td>";
						echo "<td><a href='form/yes.php?send=$AdmissionNumber'</a>Generate TC</a></td>";
						
					}
					echo "</form></table>";
					
		
				
			?>
          
            <div style="display: none;" id="my-modal" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 class="smaller lighter blue no-margin">Confirm Pay?</h3>
											</div>

											
											<div class="modal-footer">
												<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>&nbsp;&nbsp;&nbsp;
												<a href="#" type="button" class="btn btn-sm btn-primary pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-check"></i>
													Confirm
												</a>
											</div>
										</div>
									</div>
								</div>
									</div><!-- /.span -->
								
								</div><!-- /.row -->

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
						
							
			
			<!-- scrool Up starts Here -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a></div>
			</div>
			</div>
            <!-- scrool Up ends Here -->
			

		</div><!-- /.main-container -->
		</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="dist/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="dist/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="dist/js/jquery-ui.custom.min.js"></script>
		<script src="dist/js/chosen.jquery.min.js"></script>
		<script src="dist/js/autosize.min.js"></script>
		<script src="dist/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="dist/js/jquery.maskedinput.min.js"></script>
		<script src="dist/js/bootstrap-tag.min.js"></script>
		<script src="dist/js/angular.min.js"></script>

		<!-- ace scripts -->
		<script src="dist/js/ace-elements.min.js"></script>
		<script src="dist/js/ace.min.js"></script>
		<script src="dist/js/date-time/moment.min.js"></script> 
		<script src="dist/js/date-time/daterangepicker.min.js"></script> 
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				
			
			
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
				})
				
				
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
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
					
					
					/**
					file_input
					.off('file.preview.ace')
					.on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
					*/
				
				});
			
							
			});

		// Angular code goes here

			var m = [
						{ "sNo":"1", "class": "IIC", "fname": "vincet", "lname": "L", "adm": "S1301", "roll": "R101", "mobile": 990265326, "payFees" : "pay "},
						{ "sNo":"2", "class": "VIB", "fname": "john", "lname": "D", "adm": "S1302", "roll": "R102", "mobile": 990265326, "payFees" : "pay "},
						{ "sNo":"3", "class": "IA", "fname": "michael", "lname": "T", "adm": "S1303", "roll": "R103", "mobile": 990265326, "payFees" : "pay "},
						{ "sNo":"4", "class": "IIIA", "fname": "david", "lname": "J", "adm": "S1304", "roll": "R104", "mobile": 990265326, "payFees" : " pay"},
						{ "sNo":"5", "class": "IVC", "fname": "joel", "lname": "L", "adm": "S1305", "roll": "R105", "mobile": 990265326, "payFees" : " pay"},
						{ "sNo":"6", "class": "IC", "fname": "stephen", "lname": "D", "adm": "S1306", "roll": "R106", "mobile": 990265326, "payFees" : "Pay "},
 					]


			//var app = angular.module('myApp', []);
			//app.controller('myCtrl', function($scope) {
				//$scope.items = m;
			//});

			var app = angular.module('myApp', []);
			app.controller('myCtrl', function($scope, $http) {
				$http.get("http://182.18.152.54:7070/schooltreeapi/studentrest/all")
    			.then(function (response) {$scope.items = response.data;});
			});
			$(document).ready(function(){

				$("#gen_bill").click(function(){

					window.open("http://182.18.152.54:7070/schooltreeapi/studentrest/pdf/1617", "_blank");
				})
			})



		// Angular code ends here
		</script>
	</body>
</html>
