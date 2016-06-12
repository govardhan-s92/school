

<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.5/tables.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 08 Jan 2016 06:42:01 GMT -->
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Tables - Ace Admin</title>

        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        
        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="dist/css/daterangepicker.min.css" />
        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!-- ace styles -->
        <link rel="stylesheet" href="dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        

        <!-- ace settings handler -->
        <script src="dist/js/ace-extra.min.js"></script>
        
    </head>

    <body class="no-skin" ng-controller="myCtrl">
        <div id="navbar" class="navbar navbar-default ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

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

                                            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
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
                
            <!-- /.navbar-container -->
        <!-- /.nav-list -->

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

                            <li>
                                <a href="#">Forms</a>
                            </li>
                            <li class="active">Form Elements</li>
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


                        <div class="page-header" >
                            <h1>
                                Form Elements
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Edit student details
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-8 col-md-12 col-lg-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form">
                                    

                                  

                                                      <div id="accordion" class="accordion-style1 panel-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            <i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp;Search Student Details
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse in" id="collapseOne">
                                                    <div class="panel-body">
                                                        <form class="form-horizontal" role="form">
                                    
                                    
                                                
            <div class="form-group col-sm-6" >
                <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Name:</label>
                <div class="col-sm-8">
                    <input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-12" ng-model="test1"/>
                </div>
            </div>

            <div class="form-group col-sm-6" >
                <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Roll_No:</label>
                <div class="col-sm-8">
                    <input type="text" id="form-field-1" placeholder="Roll_No" class="col-xs-10 col-sm-12" ng-model="test2"/>
                </div>
            </div>

            <div class="form-group col-sm-6" >
                <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Admission_No:</label>
                <div class="col-sm-8">
                    <input type="text" id="form-field-1" placeholder="Admission_No" class="col-xs-10 col-sm-12" ng-model="test3"/>
                </div>
            </div>
                                    

                                    <div class="row"><!-- /.span --><!-- /.span --><!-- /.span -->
                                    </div><!-- /.row -->
                                    


                                    

                                    
                                    
                                </form>
    </div>
                                                </div>
                                            </div>
                                            </div>

                                </form>

                            </div>
                                </div>  

                               
                                
                            <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                

                                
                                <div class="row">
                                
                                    <div class="col-xs-12 ">
                                    <div class="pull-right tableTools-container"></div>
                                        <table id="simple-table" class="table  table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="detail-col">S.No</th>
                                                    <th class="detail-col">Class & Section</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Admission No</th>
                                                    <th>Roll No</th>
                                                    <th>Mobile No</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr ng-repeat="x in items | filter:test1 | filter:test2 | filter:test3">
                                                    <td> 
                                                        <div ng-hide="editingData[x.id]" ng-cloak>{{ x.sNo }}</div> 
                                                        <div ng-show="editingData[x.id]" ><input type="text" style="width:100%;" ng-model="x.sNo" /></div>
                                                    </td>
                                                    <td>
                                                        <div ng-hide="editingData[x.id]" ng-cloak>{{ x.class }}</div> 
                                                        <div ng-show="editingData[x.id]"><input type="text" ng-model="x.class" style="width:100%;"/></div>
                                                    </td>
                                                    <td>
                                                        <div ng-hide="editingData[x.id]" ng-cloak>{{ x.fname }}</div> 
                                                        <div ng-show="editingData[x.id]"><input type="text" ng-model="x.fname" style="width:100%;"/></div>
                                                    </td>
                                                    <td>
                                                        <div ng-hide="editingData[x.id]" ng-cloak>{{ x.lname }}</div> 
                                                        <div ng-show="editingData[x.id]"><input type="text" ng-model="x.lname" style="width:100%;"/></div>
                                                    </td>
                                                    <td>
                                                        <div ng-hide="editingData[x.id]" ng-cloak>{{ x.adm }}</div> 
                                                        <div ng-show="editingData[x.id]"><input type="text" ng-model="x.adm" style="width:100%;" disabled/></div>
                                                    </td>
                                                    <td>
                                                         <div ng-hide="editingData[x.id]" ng-cloak>{{ x.roll }}</div> 
                                                        <div ng-show="editingData[x.id]"><input type="text" ng-model="x.roll" style="width:100%;"/></div>
                                                    </td>
                                                    <td>
                                                        <div ng-hide="editingData[x.id]" ng-cloak>{{ x.mobile }}</div> 
                                                        <div ng-show="editingData[x.id]"><input type="text" ng-model="x.mobile" style="width:100%;"/></div>
                                                    </td>
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">

                                                            <button class="btn btn-xs btn-info" ng-click="modify(x)" ng-hide="editingData[x.id]">
                                                                <i class="ace-icon fa fa-pencil bigger-120"> Edit</i>
                                                            </button>

                                                            <button class="btn btn-xs btn-danger" ng-click="deleteit(x.fname)" ng-hide="editingData[x.id]">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"> Deletesss</i>
                                                            </button>

                                                            <button class="btn btn-xs btn-primary" ng-click="update(x)" ng-show="editingData[x.id]">
                                                                <i class="ace-icon fa fa-check bigger-120"> update</i>
                                                            </button>

                                                            <button class="btn btn-xs btn-warning" ng-click="cancel(x)" ng-show="editingData[x.id]">
                                                                <i class="ace-icon fa fa-remove bigger-120"> Cancel</i>
                                                            </button>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
    

    
    </tbody>
                                        </table>
                                    </div><!-- /.span -->
                                </div><!-- /.row -->

                                

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div>
                        </div><!-- /.page-header -->

                        
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                        
                        
                        <!-- /.page-content -->
                       
        

                            
                                <div id="modal-form" class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="blue bigger">Please fill the following form fields</h4>
                                            </div>

                                            

                                            <div class="modal-footer">
                                                <button class="btn btn-sm" data-dismiss="modal">
                                                    <i class="ace-icon fa fa-times"></i>
                                                    Cancel
                                                </button>

                                                <button class="btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- PAGE CONTENT ENDS -->
                            
                            </div>
                </div>
            </div><!-- /.main-content -->

            

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

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
        <script src="dist/js/date-time/bootstrap-datepicker.min.js"></script>
        <script src="dist/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="dist/js/dataTables/jquery.dataTables.bootstrap.min.js"></script>
        <script src="dist/js/dataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
        <script src="dist/js/dataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
        <script src="dist/js/dataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
        <script src="dist/js/dataTables/extensions/Buttons/js/buttons.print.min.js"></script>
        <script src="dist/js/dataTables/extensions/Buttons/js/buttons.colVis.min.js"></script>
        <script src="dist/js/dataTables/extensions/Select/js/dataTables.select.min.js"></script>
        <script src="dist/js/angular.min.js"></script>

        <script src="dist/js/date-time/moment.min.js"></script> 
        <script src="dist/js/date-time/daterangepicker.min.js"></script> 
        <!-- ace scripts -->
        <script src="dist/js/ace-elements.min.js"></script>
        <script src="dist/js/ace.min.js"></script>

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


                //initiate dataTables plugin
                var myTable = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                      { "bSortable": false },
                      null, null,null, null, null,
                      { "bSortable": false }
                    ],
                    "aaSorting": [],
                    
                    
                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"   ,
            
                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,
            
                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element
            
                    //"iDisplayLength": 50
            
            
                    select: {
                        style: 'multi'
                    }
                } );
            
                
                
                $.fn.dataTable.Buttons.swfPath = "dist/js/dataTables/extensions/Buttons/swf/flashExport.swf"; //in Ace demo dist will be replaced by correct assets path
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                
                new $.fn.dataTable.Buttons( myTable, {
                    buttons: [
                      {
                        "extend": "colvis",
                        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        columns: ':not(:first):not(:last)'
                      },
                      {
                        "extend": "copy",
                        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "csv",
                        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "excel",
                        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "pdf",
                        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "print",
                        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                      }       
                    ]
                } );
                myTable.buttons().container().appendTo( $('.tableTools-container') );
                
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                
                
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {
                    
                    defaultColvisAction(e, dt, button, config);
                    
                    
                    if($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                });
            
                ////
            
                setTimeout(function() {
                    $($('.tableTools-container')).find('a.dt-button').each(function() {
                        var div = $(this).find(' > div').first();
                        if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                        else $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                
                
                
                
                
                myTable.on( 'select', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                    }
                } );
                myTable.on( 'deselect', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                    }
                } );
            
            
            
            
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $('#dynamic-table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) myTable.row(row).select();
                        else  myTable.row(row).deselect();
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(!this.checked) myTable.row(row).deselect();
                    else myTable.row(row).select();
                });
            
            
            
                $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                
                
                
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                    var $row = $(this).closest('tr');
                    if($row.is('.detail-row ')) return;
                    if(this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });
            
                
            
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
                
                
                
                
                /***************/
                $('.show-details-btn').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/
                
                
                
                
                
                /**
                //add horizontal scrollbars to a simple table
                $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                  {
                    horizontal: true,
                    styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                    size: 2000,
                    mouseWheelLock: true
                  }
                ).css('padding-top', '12px');
                */
            
            
            })

            var m = {contants:[
                        { "sNo":"1", "class": "IIC", "fname": "vincet", "lname": "L", "adm": "S1301", "roll": "R101", "mobile": 990265326, "payFees" : "pay ", "id":0},
                        { "sNo":"2", "class": "VIB", "fname": "john", "lname": "D", "adm": "S1302", "roll": "R102", "mobile": 990265326, "payFees" : "pay ", "id":1},
                        { "sNo":"3", "class": "IA", "fname": "michael", "lname": "T", "adm": "S1303", "roll": "R103", "mobile": 990265326, "payFees" : "pay ", "id":2},
                        { "sNo":"4", "class": "IIIA", "fname": "david", "lname": "J", "adm": "S1304", "roll": "R104", "mobile": 990265326, "payFees" : " Paid", "id":3},
                        { "sNo":"5", "class": "IVC", "fname": "joel", "lname": "L", "adm": "S1305", "roll": "R105", "mobile": 990265326, "payFees" : " Paid", "id":4},
                        { "sNo":"6", "class": "IC", "fname": "stephen", "lname": "D", "adm": "S1306", "roll": "R106", "mobile": 990265326, "payFees" : "Pay ", "id":5},
                    ],
                    selected:{}
                }

            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope) {
                $scope.items = m.contants;
                $scope.items1 = m.selected;

                $scope.editingData = {};

                    for (var i = 0, length = $scope.items.length; i < length; i++) {
                    $scope.editingData[$scope.items[i].id] = false;
                }
                    $scope.modify = function(x){
                        $scope.items1 = angular.copy($scope.items);
                        $scope.editingData[x.id] = true;
                    };

                    $scope.update = function(x){
                        $scope.editingData[x.id] = false;
                    };
                    $scope.cancel = function(x){
                         $scope.items = angular.copy($scope.items1);
                          $scope.editingData[x.id] = false;
                    };

                $scope.deleteit = function(fname){              
                var index = -1;     
                var comArr = eval( $scope.items );
                for( var i = 0; i < comArr.length; i++ ) {
                if( comArr[i].fname === fname ) {
                index = i;
                break;
                }
                }
                if( index === -1 ) {
                alert( "Something gone wrong" );
                }
                $scope.items.splice( index, 1 );        
                };
    });

        </script>
    </body>

<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.5/tables.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 08 Jan 2016 06:42:05 GMT -->
</html>
