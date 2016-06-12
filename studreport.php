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
		<title>Schooltree - View Student Details</title>
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
		<link rel="stylesheet" href="css/customFilter.css" />
		 <link rel="stylesheet" href="http://ui-grid.info/release/ui-grid.css" type="text/css">
		<!-- ace styles -->

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

					<div id="customFilter" ng-controller="testCtrl"><div class="m20">
						<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        FILTERS</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">{{gridOptions.columnDefs}}</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        COLUMN FILTERS</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      	<!-- <div class="col-md-2" ng-repeat="colFilter in gridOptions.columnDefs"><input type="checkbox" ng-init="col[$index]=true" ng-model="col[$index]" ng-change="{{gridOptions.columnDefs[$index].visible=col[$index];$scope.apply()}}" ng-checked="true">{{colFilter.name}}</div> -->
      </div>
    </div>
  </div>
</div>
<div ng-if="!refresh" ui-grid="gridOptions" ui-grid-pagination ui-grid-exporter class="grid"></div>
					</div></div>
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
		<script src="http://ui-grid.info/docs/grunt-scripts/csv.js"></script>
		<script src="http://ui-grid.info/docs/grunt-scripts/vfs_fonts.js"></script>
    <script src="js/angular-pdfmake.js"></script>
    <script src="http://ui-grid.info/release/ui-grid.js"></script>
		<!-- ace scripts -->
		<script src="dist/js/ace.min.js"></script>
		<!-- <script src="js/angular-pagination.js" type="text/javascript"></script> -->
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
var fetch = angular.module('myApp', ['ui.grid', 'ui.grid.pagination', 'ui.grid.exporter']);
		fetch.controller('testCtrl',['$scope', '$http',function($scope, $http){
			$http.get('ajax/selectData/test.php').success(function(response){
				  $scope.gridOptions.data  = angular.copy(response);
				  angular.forEach($scope.gridOptions.data[0], function(value,key){
				   	$scope.gridOptions.columnDefs.push({'name':key,'visible':true})
  })
			}).error(function(err){
				alert(err)
			});
			$scope.gridOptions = {
    paginationPageSizes: [15,25, 50, 75],
    paginationPageSize: 15,
    columnDefs: [],
    enableGridMenu: true,
    enableSelectAll: true,
    exporterCsvFilename: 'customReport.csv',
    exporterPdfDefaultStyle: {fontSize: 9},
    exporterPdfTableStyle: {margin: [30, 30, 30, 30]},
    exporterPdfTableHeaderStyle: {fontSize: 10, bold: true, italics: true, color: 'red'},
    exporterPdfHeader: { text: "My Header", style: 'headerStyle' },
    exporterPdfFooter: function ( currentPage, pageCount ) {
      return { text: currentPage.toString() + ' of ' + pageCount.toString(), style: 'footerStyle' };
    },
    exporterPdfCustomFormatter: function ( docDefinition ) {
      docDefinition.styles.headerStyle = { fontSize: 22, bold: true };
      docDefinition.styles.footerStyle = { fontSize: 10, bold: true };
      return docDefinition;
    },
    exporterPdfOrientation: 'portrait',
    exporterPdfPageSize: 'LETTER',
    exporterPdfMaxGridWidth: 500,
    exporterCsvLinkElement: angular.element(document.querySelectorAll(".custom-csv-link-location")),
    onRegisterApi: function(gridApi){
      $scope.gridApi = gridApi;
    }
  };
  	$scope.selectColumn = function(pos){
        $scope.gridOptions.columnDefs[pos].visible = false;
   
    }
  	 var refresh = function() {
    $scope.refresh = true;
    $timeout(function() {
      $scope.refresh = false;
    }, 0);
  };

		}])
		// fetch.directive('hideCol',function(){
		// 	restrict:'A',
		// 	link: function(scope,elem,attr){
		// 		elem.bind('click',function(){
		// 			console.log('triggered')
		// 		})
		// 	}
		// })
        fetch.controller('dbCtrl', ['$scope', '$http', function ($scope, $http) {
			
					
				 $http.get("ajax/selectData/p_stuList.php")
                .success(function(SectionCount){
                    $scope.data = SectionCount;
					$scope.StCount = StandardCount;
					$scope.parseInt = parseInt;
                })
                .error(function() {
                    $scope.data = "error in fetching data";
                });
				
				 $http.get("ajax/selectData/countstudent.php")
                .success(function(classsec){
                    $scope.count = classsec;
					
                })
                .error(function() {
                    $scope.count = "error in fetching data";
                });
			
			$http.get("ajax/selectData/group.php")
                .success(function(classsec){
                    $scope.group = classsec;
                })
                .error(function() {
                    $scope.group = "error in fetching data";
                });
				
				$http.get("ajax/selectData/totalstudent.php")
                .success(function(data){
                    $scope.total = data;
                })
                .error(function() {
                    $scope.total = "error in fetching data";
                });
				
		 }]);
				// Angular code ends here
        </script>
	</body>
</html>
