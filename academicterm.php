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
	
if(!activeacademicyear()){redirect_to("academicyear.php");}
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
                        <h3 class="text-themecolor">Dashboard 1</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ACADEMIC TERM</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
					<?php if(!activeacademicterm()){?>
                        <a href="" data-toggle="modal" data-target="#atermmodal"><button type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</button></a>
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
                                                <th>Academic Year</th>
                                                <th>Term</th>
												<th>Year</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Times Open</th>
												<th>Next Term Begins</th>
												<th>Status</th>
                                                <th>Actions</th>
												
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No.#</th>
                                                <th>Academic Year</th>
                                                <th>Term</th>
												 <th>Year</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Times Open</th>
												<th>Next Term Begins</th>
												<th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
										 <?php $atlist = academictermlist(); $i=1;?>
										 <?php while($at = mysqli_fetch_assoc($atlist)){ ?>
												<tr>
													<td><?php echo $i;?></td>
													<td><?php echo getacademicyeardesc($at["termayid"]);?></td>
													<td><?php echo $at["termtype"];?></td>
													<td><?php echo $at["termyear"];?></td>
													<td><?php echo $at["termstartdate"];?></td>
													<td><?php echo $at["termenddate"];?></td>
													<td><?php echo $at["termtimeopen"];?></td>
													<td><?php echo $at["termnexttermbegin"];?></td>
													<td><?php if($at["termstatus"] == 0){echo "INACTIVE";}else{echo "ACTIVE";}?></td>
													<td><a href="" data-toggle="modal" class="eat" data-target="#eayearmodal" name="<?php echo $at["termid"];?>"><span class="icon-Pen" title="Edit"></span></a></td>
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
                                <div id="atermmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">New Academic Term</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="frmacademicterm">
													<input type="hidden" name="ayid" id="ayid" value="<?php echo getactiveacademicyear();?>">
													 <div class="form-group">
														<label for="exampleInputEmail1">Academic Year</label>
														<input type="text" class="form-control" name="description" value="<?php echo getactiveacademicyeardesc();?>" readonly>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Term Type</label>
														<select class="form-control" id="type" name="type" required>
															<option value="">Select Term Type</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
														</select>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Term Description</label>
														<input type="text" class="form-control" id="ndescription" name="ndescription" maxlength="30" autocomplete="off" placeholder="Enter Term Description" readonly>
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
													<div class="form-group">
														<label for="exampleInputEmail1">Next Term Begins</label>
														<input type="text" class="form-control mydatepicker" id="nxtb" name="nxtb" autocomplete="off" placeholder="mm/dd/yyyy" required>
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
                                                <h4 class="modal-title">Update Academic Term</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="frmeacademicterm">
													<input type="hidden" name="atid" id="atid" value="">
													<input type="hidden" name="termayid" id="termayid" value="">
													<input type="hidden" name="atterm" id="atterm" value="">
													 <div class="form-group">
														<label for="exampleInputEmail1">Academic Year</label>
														<input type="text" class="form-control" id="edescription" name="edescription" value="" readonly>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Term Type</label>
														<select class="form-control" id="etype" name="etype" required>
															<option value="">Select Term Type</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
														</select>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Term Description</label>
														<input type="text" class="form-control" id="tdescription" name="tdescription" maxlength="30" placeholder="Enter Term Description" readonly>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Year</label>
														<input type="text" class="form-control" id="eyear" name="eyear" maxlength="4" placeholder="Example: 2018" required>
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
														<label for="exampleInputEmail1">Term Times Open</label>
														<select class="form-control" id="etimeopen" name="etimeopen" required>
															<option value="">Select Times Open</option>
															<?php for($c = 40; $c<70; $c++){?>
															<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
															<?php }?>
														</select>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Next Term Begins</label>
														<input type="text" class="form-control mydatepicker" id="enxtb" name="enxtb" placeholder="mm/dd/yyyy" required>
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
            <footer class="footer"> © 2018 Liberate I.T Solutions. All Right Reserved </footer>
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

$('#type').change(function(){
	var ttype = $(this).val();
	$('#ndescription').empty();
	 switch(Number(ttype)){
		case 1:
		$('#ndescription').val("FIRST TERM");
		break;
		case 2:
		$('#ndescription').val("SECOND TERM");
		break;
		case 3:
		$('#ndescription').val("THIRD TERM");
		break;
		default:
		$('#ndescription').val("");
	 }
});

$('#etype').change(function(){
	var ettype = $(this).val();
	$('#tdescription').empty();
	 switch(Number(ettype)){
		case 1:
		$('#tdescription').val("FIRST TERM");
		break;
		case 2:
		$('#tdescription').val("SECOND TERM");
		break;
		case 3:
		$('#tdescription').val("THIRD TERM");
		break;
		default:
		$('#tdescription').val("");
	 }
});

$('.eat').click(function(){
	var atid = $(this).attr('name');

	$('#atid').empty();
	$('#estartdate').empty();
	$('#eenddate').empty();
	$('#etype').prop("checked","");
	$('#atterm').empty();
	$('#enxtb').empty();
	$('#eyear').empty();
	$('#termayid').empty();
	$.ajax({
		url : 'php/configuration/atdetailprocess.php',
		type : 'POST',
		data : {atid : atid},
		success : function(data){
			$('#atid').val(data[0].termid);
			$('#termayid').val(data[0].ayid);
			$('#estartdate').val(data[0].startdate);
			$('#eenddate').val(data[0].enddate);
			$('#etype').val(data[0].term);
			$('#tdescription').val(data[0].description);
			$('#atterm').val(data[0].term);
			$('#enxtb').val(data[0].nxtb);
			$('#eyear').val(data[0].year);
			setaydescription(data[0].ayid);
		}
	});
});

function setaydescription(ayid){
	$.ajax({
		url : 'php/configuration/aydescprocess.php',
		type : 'POST',
		data : {ayid : ayid},
		success : function(data){
		$('#edescription').val(data);
		}
	});
}

$('#frmacademicterm').submit(function(){
$('#btnsave').hide();
  $.ajax({
		url : 'php/configuration/newtermprocess.php',
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
				alert("Sorry, New Academic Term Saving Failed.");
				$('#btnsave').show();
				break;
				case 3:
				alert("Acadmic Term Saving Successfull.");
				window.location = "academicterm.php";
				break;
				case 4:
				alert("Sorry, Term Already Exist.");
				$('#btnsave').show();
				break;
				case 5:
				alert("Close the Current and Active Academic Term.");
				$('#btnsave').show();
				break;
				default:
				alert("Sorry, Fatal error occured, report to your Admin.");
			}
		}
	});
  
  return false;
});

$('#frmeacademicterm').submit(function(){
  $.ajax({
		url : 'php/configuration/updateacademictermprocess.php',
		type : 'POST',
		data : new FormData(this),
		contentType : false,
		processData : false,
		success : function(data){
			switch(Number(data)){
				case 1:
				alert("Sorry There are Form Errors.");
				break ;
				case 2:
				alert("Sorry, Academic Term Updating Failed.");
				break;
				case 3:
				alert("Acadmic Term Updating Successfull.");
				window.location = "academicterm.php";
				break;
				case 4:
				alert("Close Current and Active Academic Term.");
				window.location = "academicterm.php";
				break;
				case 5:
				alert("Academic Term Already Exist.");
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