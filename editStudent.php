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
        <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="dist/avatars/user.jpg" alt="Jason's Photo" /> <span class="user-info"> <small>Welcome,</small> <?php echo $_SESSION['STUDENTNAME'];?> </span> <i class="ace-icon fa fa-caret-down"></i> </a>
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
                  <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Admission_No:</label>
                  <div class="col-sm-6">
                    <input type="text" id="adno" placeholder="" value="" class="col-xs-10 col-sm-8" ng-model="user.adno"/>
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
			 <div class="col-sm-12" >
				 <div class="col-xs-12 col-sm-2 center">
				 <div>
					<span class="profile-picture">
						<img id="avatar" class="img-responsive" src="{{ user.photo || 'dist/avatars/profile-pic.jpg' }}" />
					</span>
					</div>
				 </div>
			 <div class="col-sm-6">
			 <div class="space-6"></div>
			 <div class="profile-user-info profile-user-info-striped ">
					  <div  class="profile-info-row">
                      <div class="profile-info-name">Student Name</div>
                      <div class="profile-info-value"> <span editable-text="user.NAME" onaftersave="updateUser($data, key='NAME')" e-name="NAME"  e-required>{{ user.NAME || 'dfdf' | uppercase}}</span> </div>
					  </div>
                    <div class="profile-info-row">
                    <div class="profile-info-name">Initial</div>
					 <div class="profile-info-value"><span class="editable"  editable-text="user.FATHER_NAME" onbeforesave="updateUser($data, key='FATHER_NAME')" e-name="FATHER_NAME" e-required>{{ user.FATHER_NAME || 'Empty' }}</span></div>
					</div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> Admission No</div>
                      <div class="profile-info-value "> <span ng-model="user.NAME" class="label label-bg label-warning" >{{ user.ADMISSION_ID || 'Empty' }}</span></div>
					  
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> CLass </div>
                      <div class="profile-info-value"><span editable-select="user.CLASS_ID" onbeforesave="updateUser($data,key='CLASS_ID')" e-name="CLASS_ID" onshow="loadclass()" e-ng-options="g.id as g.text for g in classes" > {{ user.classec || user.classec1 || 'Select Class' }} </span> </div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> DOB </div>
                      <div class="profile-info-value"> <span editable-bsdate="user.DOB" onbeforesave="updateUser($data, key='DOB')" e-show-meridian="false" e-is-open="opened.$data" e-ng-click="open($event,'$data')" e-datepicker-popup="dd-MM-yyyy">{{ (user.DOB | date:"dd/MM/yyyy") || 'Empty' }}</span></div>
                    </div>
                     </div>
				</div></div>
				
				</div>
				<div class="user-profile row">
			   <div class="col-sm-5">
				<div class="table-header table-header profile-user-info">Other Details</div>                
                  <div class="profile-user-info profile-user-info-striped ">
					
                    <div class="profile-info-row">
                      <div class="profile-info-name">Group</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='grp')"  editable-text="user.grp" e-name="grp" e-required>{{ user.grp || 'Empty' }}</span> </div>
                    </div>
					<div class="profile-info-row">
                      <div class="profile-info-name">Gender</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='Gender')" editable-text="user.Gender" e-name="Gender" >{{ user.Gender || 'Empty' }}</span> </div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Roll Number</div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='IILanguage')" editable-text="user.IILanguage" e-name="IILanguage" e-required>{{ user.IILanguage || 'Empty' }}</span>  </div>
                    </div>
                  <div class="profile-info-row">
					<div class="profile-info-name">DoorNoStreet</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='DoorNoStreet')" editable-text="user.DoorNoStreet" e-name="DoorNoStreet" e-required>{{ user.DoorNoStreet || 'Empty' }}</span>  </div>
                    </div>
					
					 <div class="profile-info-row">
                      <div class="profile-info-name"> Area</div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='Area')" editable-text="user.Area"  e-name="Area" e-required>{{ user.Area || 'Empty' }}</span></div>
					  </div>
                    <div class="profile-info-row">
                    <div class="profile-info-name"> City</div>
					 <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='City')"  editable-text="user.City" e-name="City" e-required>{{ user.City || 'Empty' }}</span> </div>
					</div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">State</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='State')" editable-text="user.State" e-name="State" e-required>{{ user.State || 'Empty' }}</span></div>
                    </div>
                   <div class="profile-info-row">
                      <div class="profile-info-name">Pincode</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='Pincode')" editable-text="user.Pincode" e-name="Pincode" e-required>{{ user.Pincode || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> ModeofTransport </div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='ModeofTransport')" editable-text="user.ModeofTransport" e-name="ModeofTransport" e-required>{{ user.ModeofTransport || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Height</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='Height')" editable-text="user.Height" e-name="Height" e-required>{{ user.Height || 'Empty' }}</span> </div>
                    </div>
					<div class="profile-info-row">
                      <div class="profile-info-name">Weight</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='Weight')" editable-text="user.Weight" e-name="Weight" e-required>{{ user.Weight || 'Empty' }}</span> </div>
                    </div>
                     </div>
                
				</div>
			 <div class="col-sm-5">
				<div class="table-header table-header profile-user-info">Other Details</div>                
                  <div class="profile-user-info profile-user-info-striped ">
					
                    <div class="profile-info-row">
                      <div class="profile-info-name">Group</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='grp')"  editable-text="user.grp" e-name="grp" e-required>{{ user.grp || 'Empty' }}</span> </div>
                    </div>
					<div class="profile-info-row">
                      <div class="profile-info-name">Gender</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='Gender')" editable-text="user.Gender" e-name="Gender" >{{ user.Gender || 'Empty' }}</span> </div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Roll Number</div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='IILanguage')" editable-text="user.IILanguage" e-name="IILanguage" e-required>{{ user.IILanguage || 'Empty' }}</span>  </div>
                    </div>
                  <div class="profile-info-row">
					<div class="profile-info-name">DoorNoStreet</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='DoorNoStreet')" editable-text="user.DoorNoStreet" e-name="DoorNoStreet" e-required>{{ user.DoorNoStreet || 'Empty' }}</span>  </div>
                    </div>
					
					 <div class="profile-info-row">
                      <div class="profile-info-name"> Area</div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='Area')" editable-text="user.Area"  e-name="Area" e-required>{{ user.Area || 'Empty' }}</span></div>
					  </div>
                    <div class="profile-info-row">
                    <div class="profile-info-name"> City</div>
					 <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='City')"  editable-text="user.City" e-name="City" e-required>{{ user.City || 'Empty' }}</span> </div>
					</div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">State</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='State')" editable-text="user.State" e-name="State" e-required>{{ user.State || 'Empty' }}</span></div>
                    </div>
                   <div class="profile-info-row">
                      <div class="profile-info-name">Pincode</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='Pincode')" editable-text="user.Pincode" e-name="Pincode" e-required>{{ user.Pincode || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> ModeofTransport </div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='ModeofTransport')" editable-text="user.ModeofTransport" e-name="ModeofTransport" e-required>{{ user.ModeofTransport || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Height</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='Height')" editable-text="user.Height" e-name="Height" e-required>{{ user.Height || 'Empty' }}</span> </div>
                    </div>
					<div class="profile-info-row">
                      <div class="profile-info-name">Weight</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='Weight')" editable-text="user.Weight" e-name="Weight" e-required>{{ user.Weight || 'Empty' }}</span> </div>
                    </div>
                     </div>
                
				</div>
			</div>
			<div class="space-4"></div>
			<div class="user-profile row">
			<div class="col-sm-5">
			<div class="table-header table-header profile-user-info"> Father Details</div>                
                  <div class="profile-user-info profile-user-info-striped ">
					  <div class="profile-info-row">
                      <div class="profile-info-name"> Father Name</div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='FatherName')" editable-text="user.FatherName" e-name="FatherName" e-required>{{ user.FatherName || 'Empty' }}</span></div>
					  </div>
                    <div class="profile-info-row">
                    <div class="profile-info-name"> Father Qualificationxas</div>
					 <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='fatherQualification')"  editable-text="user.fatherQualification" e-name="fatherQualification" e-required>{{ user.fatherQualification || 'Empty' }}</span> </div>
					</div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Father Work</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='fatherWork')"  editable-text="user.fatherWork" e-name="fatherWork" e-required>{{ user.fatherWork || 'Empty' }}</span></div>
                    </div>
                   <div class="profile-info-row">
                      <div class="profile-info-name">Father Occupation</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='fatherOccupation')"  editable-text="user.fatherOccupation" e-name="fatherOccupation" e-required>{{ user.fatherOccupation || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> Father Annual Income </div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='fatherAnnualIncome')"  editable-text="user.fatherAnnualIncome" e-name="fatherAnnualIncome" e-required>{{ user.fatherAnnualIncome || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name"> Father Off Address</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='fatherOfficeAddress')"  editable-text="user.fatherOfficeAddress" e-name="fatherOfficeAddress" e-required>{{ user.fatherOfficeAddress || 'Empty' }}</span> </div>
                    </div>
					<div class="profile-info-row">
                      <div class="profile-info-name">Father Office Phone</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='fatherOfficePhone')"  editable-text="user.fatherOfficePhone" e-name="fatherOfficePhone" e-required>{{ user.fatherOfficePhone || 'Empty' }}</span> </div>
                    </div>
                    <div class="profile-info-row">
					<div class="profile-info-name">Father Mobile</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='fatherMobile')"  editable-text="user.fatherMobile" e-name="fatherMobile" e-required>{{ user.fatherMobile || 'Empty' }}</span>  </div>
                    </div>
                  <div class="profile-info-row">
					<div class="profile-info-name"> Father Email</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='fatherEmailfatherEmail')"  editable-text="user.fatherEmail" e-name="fatherEmail" e-required>{{ user.fatherEmail || 'Empty' }}</span>  </div>
                    </div>

                  <div class="profile-info-row">
					<div class="profile-info-name">Is Father Past Pupil</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='PastPupil')"  editable-text="user.PastPupil" e-name="PastPupil" e-required>{{ user.PastPupil || 'Empty' }}</span>  </div>
                    </div>
					  </div>
				</div>
			<div class="col-sm-5">
		<div class="table-header table-header profile-user-info"> Mother Details</div>                
                  <div class="profile-user-info profile-user-info-striped ">
					 <div class="profile-info-row">
                      <div class="profile-info-name"> Mother Name</div>
                      <div class="profile-info-value"> <span class="editable" editable-text="user.MotherName" onbeforesave="updateUser($data, key='MotherName')" e-name="MotherName" e-required>{{ user.MotherName || 'Empty' }}</span></div>
					  </div>
                    <div class="profile-info-row">
                    <div class="profile-info-name"> Mother Qualification</div>
					 <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='motherQualification')"  editable-text="user.motherQualification" e-name="motherQualification" e-required>{{ user.motherQualification || 'Empty' }}</span> </div>
					</div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Mother Occupation</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='motherOccupation')"  editable-text="user.motherOccupation" e-name="motherOccupation" e-required>{{ user.motherOccupation || 'Empty' }}</span></div>
                    </div>
                   <div class="profile-info-row">
                      <div class="profile-info-name">Mother Annual Income</div>
                      <div class="profile-info-value "><span class="editable" onbeforesave="updateUser($data, key='motherAnnualIncome')"  editable-text="user.motherAnnualIncome" e-name="motherAnnualIncome" e-required>{{ user.motherAnnualIncome || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Mother Off Address </div>
                      <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='motherOfficeAddress')"  editable-text="user.motherOfficeAddress" e-name="motherOfficeAddress" e-required>{{ user.motherOfficeAddress || 'Empty' }}</span></div>
                    </div>
                    <div class="profile-info-row">
                      <div class="profile-info-name">Mother Off Phone</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='motherOfficePhone')"  editable-text="user.motherOfficePhone" e-name="motherOfficePhone" e-required>{{ user.motherOfficePhone || 'Empty' }}</span> </div>
                    </div>
					<div class="profile-info-row">
                      <div class="profile-info-name">Mother Mobile</div>
                      <div class="profile-info-value"><span class="editable" onbeforesave="updateUser($data, key='motherMobile')"  editable-text="user.motherMobile" e-name="motherMobile" e-required>{{ user.motherMobile || 'Empty' }}</span> </div>
                    </div>
                    <div class="profile-info-row">
					<div class="profile-info-name">Mother Email</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='motherEmailAddress')"  editable-text="user.motherEmailAddress" e-name="motherEmailAddress" e-required>{{ user.motherEmailAddress || 'Empty' }}</span>  </div>
                    </div>
                    <div class="profile-info-row">
					<div class="profile-info-name">Mother Past Pupil</div>
                    <div class="profile-info-value"> <span class="editable" onbeforesave="updateUser($data, key='mpastPupil')"  editable-text="user.mpastPupil" e-name="mpastPupil" e-required>{{ user.mpastPupil || 'Not Set' }}</span>  </div>
                    </div>
                     </div>
				</div>
			</div>
          </div><div class="space-4"></div><div class="hr hr-16 hr-dotted"></div><div class="space-4"></div>
        </div>
        <!-- scrool Up starts Here --> 
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a>
		</div>
    </div>
    <!-- scrool Up ends Here --> <div class="footer">
    <div class="footer-inner">
      <div class="footer-content"> <span class="bigger-120"> <span class="blue bolder">School Tree</span> &copy; 2016-2017 </span> &nbsp; &nbsp; <span class="action-buttons"> <a href="#"> <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i> </a> <a href="#"> <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i> </a> <a href="#"> <i class="ace-icon fa fa-rss-square orange bigger-150"></i> </a> </span> </div>
    </div>
  </div>
  </div>
  <!-- /.main-container -->
 
  
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.2.4/ui-bootstrap-tpls.min.js"></script> 
<!-- ace scripts --> 
<script src="dist/js/ace.min.js"></script> 
<!-- inline scripts related to this page --> 
<script type="text/javascript">
		var fetch = angular.module('myApp', ["xeditable"]);
		
		fetch.run(function(editableOptions) {
  		editableOptions.theme = 'bs3';
		});
	fetch.controller('dbCtrl', function($scope, $filter, $http) {
		 $scope.selStudent = function() {
		$http({
          method  : 'POST',
          url     : 'ajax/selectData/selStudent.php',
          data    : $scope.user, //forms user object
		  cache: false,
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
                .success(function(data){
                    $scope.user = data;
					$scope.user.classec1 = data.classec;
					$scope.user.DOB = new date(user.DOB);
					
                })
                .error(function() {
                    $scope.user = "error in fetching data";
                }); 
		 }
		//  datepicker start 
		$scope.qwe = {
		DOB: 12-12-2005
	};
		
		$scope.opened = {};
		$scope.open = function($event, elementOpened) {
		$event.preventDefault();
		$event.stopPropagation();
		$scope.opened[elementOpened] = !$scope.opened[elementOpened];
	};
	//  datepicker end
	//select Class and Section
  $scope.classes = [];
  $scope.loadclass = function() {
    return $scope.classes.length ? null : $http.get('ajax/selectData/selclass.php').success(function(data) {
      $scope.classes = data;
    });
  };
  
  $scope.$watch('user.CLASS_ID', function(newVal, oldVal) {
	if (newVal !== oldVal) {
      var selected = $filter('filter')($scope.classes, {id: $scope.user.CLASS_ID});
      $scope.user.classec = selected.length ? selected[0].text : null;
    }
  });
  
  //Update User
 $scope.updateUser = function(data, key) {
		var myobj = {};
		myobj[arguments[1]] = arguments[0];
		$scope.abc = angular.extend({ADMISSION_ID: $scope.user.ADMISSION_ID},myobj);
	    return $http.post('ajax/updateData/updateStudent.php',$scope.abc);
  }; 
  
   /* $scope.updateparent = function(data, key) {
		var myobj = {};
		myobj[arguments[1]] = arguments[0];
		$scope.abc = angular.extend({ADMISSION_ID: $scope.user.ADMISSION_ID},myobj);
	    return $http.post('ajax/updateData/updateStudent.php',$scope.abc);
  }; 
  
    $scope.updateaddress = function(data, key) {
		var myobj = {};
		myobj[arguments[1]] = arguments[0];
		$scope.abc = angular.extend({ADMISSION_ID: $scope.user.ADMISSION_ID},myobj);
	    return $http.post('ajax/updateData/updateStudent.php',$scope.abc);
  }; 
  
    $scope.updateothers = function(data, key) {
		var myobj = {};
		myobj[arguments[1]] = arguments[0];
		$scope.abc = angular.extend({ADMISSION_ID: $scope.user.ADMISSION_ID},myobj);
	    return $http.post('ajax/updateData/updateStudent.php',$scope.abc);
  };  */
});	
				// Angular code ends here
				</script>
</body>
</html>
