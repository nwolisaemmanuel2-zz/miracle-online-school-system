<?php include("include/session.php");?>
<?php include("include/function.php");?>
<?php include("include/dbconnection.php");?>
<?php
	if($_SESSION["sid"] == ""){
		redirect_to("login.php");
	}else{
	 $sid = $_SESSION["sid"];
	 $image = userimage($sid);
	}
	
if(!schoolexist()){redirect_to("registerschool.php");}
?>
<?php include('superlog.php'); ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/dark/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 04 Mar 2018 23:42:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>THE MIRACLE</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
	<!-- Date picker plugins css -->
    <link href="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">LIBERATE</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('headerone.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include("nav.php"); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">ACADEMIC YEAR</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ACADEMIC YEAR LIST</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
					<?php if(!activeacademicyear()){?>
                        <a href="" data-toggle="modal" data-target="#ayearmodal"><button type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</button></a>
						<?php }?>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8" style="display:none;">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h5 class="card-title m-b-0">Sales Chart</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline text-center font-12">
                                            <li><i class="fa fa-circle text-success"></i> SITE A</li>
                                            <li><i class="fa fa-circle text-info"></i> SITE B</li>
                                            <li><i class="fa fa-circle text-primary"></i> SITE C</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Comment - chats -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
				<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.#</th>
												<th>Date</th>
                                                <th>Description</th>
                                                <th>Year</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Status</th>
                                                <th>Actions</th>
												
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No.#</th>
												<th>Date</th>
                                                <th>Description</th>
                                                <th>Year</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
										 <?php $aylist = academicyearlist(); $i=1;?>
										 <?php while($ay = mysqli_fetch_assoc($aylist)){ ?>
												<tr>
													<td><?php echo $i;?></td>
													<td><?php echo $ay["aydateadded"];?></td>
													<td><?php echo $ay["aydescription"];?></td>
													<td><?php echo $ay["ayear"];?></td>
													<td><?php echo $ay["aystartdate"];?></td>
													<td><?php echo $ay["ayenddate"];?></td>
													<td><?php if($ay["aystatus"] == 0){echo "INACTIVE";}else{echo "ACTIVE";}?></td>
													<td><a href="" data-toggle="modal" class="eay" data-target="#eayearmodal" name="<?php echo $ay["ayid"];?>"><span class="icon-Pen" title="Edit"></span></a></td>
												</tr>
										 <?php  $i++; ?>
										 <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				
				<!-- MODALS -->
				<div class="col-md-4">
                        
                                <!-- sample modal content -->
                                <div id="ayearmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">New Academic Year</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="frmacademicyear">
													<input type="hidden" name="acadsid" id="acadsid">
                                                <div class="form-group">
												<label for="exampleInputEmail1">Description</label>
												<input type="text" class="form-control" id="description" maxlength="9" autocomplete="off" name="description" placeholder="Example: 2018/2019" required>
											</div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Year</label>
                                            <input type="text" class="form-control" id="year" name="year" maxlength="4" autocomplete="off" placeholder="Example: 2018" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Start Date</label>
                                            <input type="text" class="form-control mydatepicker" id="startdate" name="startdate" autocomplete="off" placeholder="mm/dd/yyyy" required>
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">End Date</label>
                                            <input type="text" class="form-control mydatepicker" id="enddate" name="enddate" autocomplete="off" placeholder="mm/dd/yyyy" required>
                                        </div>
										
										<div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" id="btnsave" class="btn btn-danger waves-effect waves-light">Save</button>
                                            </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
								
								<div id="eayearmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Academic Year</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="frmeacademicyear">
													<input type="hidden" name="ayid" id="ayid">
													<input type="hidden" name="aydescription" id="aydescription">
                                                <div class="form-group">
												<label for="exampleInputEmail1">Description</label>
												<input type="text" class="form-control" id="edescription" name="edescription" placeholder="Enter Academic Year Description" required>
											</div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Year</label>
                                            <input type="text" class="form-control" id="eyear" name="eyear" placeholder="yyyy" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Start Date</label>
                                            <input type="text" class="form-control mydatepicker" id="estartdate" name="estartdate" placeholder="mm/dd/yyyy" required>
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">End Date</label>
                                            <input type="text" class="form-control mydatepicker" id="eenddate" name="eenddate" placeholder="mm/dd/yyyy" required>
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <input type="text" class="form-control" id="status" name="status" readonly>
                                        </div>
										
										<div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
                           
                    </div>
				<!-- END MODALS -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Liberate I.T Solutions. All Right Reserved  </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/node_modules/d3/d3.min.js"></script>
    <script src="assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
	<!-- This is data table -->
    <script src="assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
	<!-- Date Picker Plugin JavaScript -->
    <script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
   <?php include('timeout.php'); ?>
</body>
    <script>
$('#userlogout').click(function(){
	if(confirm("You are about to logout of the SYSTEM!")){
		$.ajax({
		url : 'php/login/userlogoutprocess.php',
		success : function(data){
			window.location = "login.html";
		}
	});
	}
	return false;
});

$('.eay').click(function(){
	 var ayid = $(this).attr('name');
		
	});
	
$('.eay').click(function(){
	var ayid = $(this).attr('name');
			$('#ayid').empty();
			$('#estartdate').empty();
			$('#eenddate').empty();
			$('#edescription').empty();
			$('#eyear').empty();
	$.ajax({
		url : 'php/configuration/aydetailprocess.php',
		type : 'POST',
		data : {ayid : ayid},
		success : function(data){
			$('#ayid').val(data[0].ayid);
			$('#estartdate').val(data[0].startdate);
			$('#eenddate').val(data[0].enddate);
			$('#edescription').val(data[0].description);
			$('#aydescription').val(data[0].description);
			$('#eyear').val(data[0].year);
			if(data[0].status == 1){
				$('#status').val("ACTIVE");
			}else{
				$('#status').val("IN-ACTIVE");
			}
			
		}
	});
});

$('#frmacademicyear').submit(function(){
$('#btnsave').hide();
  $.ajax({
		url : 'php/configuration/newacademicprocess.php',
		type : 'POST',
		data : new FormData(this),
		contentType : false,
		processData : false,
		success : function(data){
			switch(Number(data)){
				case 1:
				alert("Sorry There are Form Errors.");
				$('#btnsave').show();
				break ;
				case 2:
				alert("Sorry, New Academic Year Saving Failed.");
				$('#btnsave').show();
				break;
				case 3:
				alert("Acadmic Year Saving Successfull.");
				window.location = "academicyear.php";
				break;
				case 4:
				alert("Academic Year Description Already Exist.");
				$('#btnsave').show();
				break;
				case 5:
				alert("Close the Current and Active Academic Year.");
				$('#btnsave').show();
				break;
				default:
				alert("Sorry, Fatal error occured, report to your Admin.");
			}
		}
	});
  
  return false;
});

$('#frmeacademicyear').submit(function(){
  $.ajax({
		url : 'php/configuration/updateacademicprocess.php',
		type : 'POST',
		data : new FormData(this),
		contentType : false,
		processData : false,
		success : function(data){
		//alert(data);
			switch(Number(data)){
				case 1:
				alert("Sorry There are Form Errors.");
				break ;
				case 2:
				alert("Sorry, Academic Year Updating Failed.");
				break;
				case 3:
				alert("Acadmic Year Updating Successfull.");
				window.location = "academicyear.php";
				break;
				case 5:
				alert("Academic Year Description Already Exist.");
				break;
				default:
				alert("Sorry, Fatal error occured, report to your Admin.");
			}
		}
	});
  return false;
});
	
    $(function() {
        $('#myTable').DataTable();

        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });

    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
	
	jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    </script>
 <script src="assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/dark/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 04 Mar 2018 23:48:48 GMT -->
</html>