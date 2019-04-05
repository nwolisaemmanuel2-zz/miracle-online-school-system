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
?>
<?php 
	if(!activeexam()){
		echo "<script> alert('No Registered Examination'); window.location='examlist.php';</script>";
	}else{
	 $ayid = getactiveacademicyear();
	 $atid = getactivetermid();
	 $examid = getactiveexamid();
	}
?>
<?php include('superlog.php'); ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/dark/table-bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 04 Mar 2018 23:56:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>THE MIRACLE </title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
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
               <?php include("nav.php"); ?>
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
                        <h3 class="text-themecolor">ACADEMIC YEAR REPORT PRINTING APPROVAL</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">END REPORT PRINTING</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                <div class="row">
                  
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">APPROVE <?php echo getactiveacademicyeardesc();?> ACADEMIC YEAR EXAMINATION REPORT PRINTING</h4>
                                <h6 class="card-subtitle">Exams List</h6>
                                <table class="display nowrap table table-hover table-striped table-bordered" data-click-to-select="true" data-height="295">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>DESCRIPTION</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Report Status</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
									<tbody>
										<?php $examresult = ayexamlist($ayid); $i=1;?>
										 <?php while($exam = mysqli_fetch_assoc($examresult)){ ?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $exam["examname"];?></td>
												<td><?php echo $exam["examstartdate"];?></td>
												<td><?php echo $exam["examenddate"];?></td>
												<td><?php if($exam["examareport"] == 0){echo "Pending";}else{echo "APPROVED";}?></td>
										 <td>
											<?php if($exam["examareport"] == 1){?>
												<i class="fa fa-check text-success"></i>
											<?php }else{?>
												<a href="" data-toggle="modal" data-target="#exammodal" class="approve" title="Approve Report" value="<?php echo $exam["examid"];?>"> Approve</a>
											<?php }?>
										  </td>
											</tr>
										 <?php  $i++; ?>
										 <?php } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
				
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
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
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="assets/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="assets/node_modules/bootstrap-table/dist/bootstrap-table.ints.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
	<?php include('timeout.php'); ?>
	<script>
	 $('#exampercentage').keyup(function(){
		var percent = $(this).val();
		if(!$.isNumeric(percent)){
			$('#eperr').html('Enter valid Value');
			$('#exampercentage').val('');
		}else{
			$('#eperr').empty();
		}
	});
	
	 $('#assesspercentage').keyup(function(){
		var percent = $(this).val();
		if(!$.isNumeric(percent)){
			$('#aperr').html('Enter valid Value');
			$('#assesspercentage').val('');
		}else{
			$('#aperr').empty();
		}
	});
	
	$('#examyear').keyup(function(){
		var eyear = $(this).val();
		if(!$.isNumeric(eyear)){
			$('#yerr').html('Enter valid Value');
			$('#examyear').val('');
		}else{
			$('#yerr').empty();
		}
	});
	
	$('#eexampercentage').keyup(function(){
		var percent = $(this).val();
		if(!$.isNumeric(percent)){
			$('#eeperr').html('Enter valid Value');
			$('#eexampercentage').val('');
		}else{
			$('#eeperr').empty();
		}
	});
	
	 $('#eassesspercentage').keyup(function(){
		var percent = $(this).val();
		if(!$.isNumeric(percent)){
			$('#eaperr').html('Enter valid Value');
			$('#eassesspercentage').val('');
		}else{
			$('#eaperr').empty();
		}
	});
	
	$('#eexamyear').keyup(function(){
		var eyear = $(this).val();
		if(!$.isNumeric(eyear)){
			$('#eyerr').html('Enter valid Value');
			$('#eexamyear').val('');
		}else{
			$('#eyerr').empty();
		}
	});
	
	$('.approve').click(function(){
				
		var examid = $(this).attr("value");
		if(confirm("You are About to End REPORT PRINTING for the Term! This ACTION is IRREVERSIBLE for the Cuurent Term.")){
			$.ajax({
			url : 'php/configuration/approvereportprocess.php',
			type : 'POST',
			data : {examid : examid},
			success : function(data){
				switch(Number(data)){
					case 1:
					alert("Sorry, Exams ID Not Found.");
					break ;
					case 2:
					alert("Sorry, Report Printing Approval Failed.");
					break;
					case 3:
					alert("Exam Report Printing Approval Successfull.");
					window.location = "approvereport.php";
					break;
					case 4:
					alert("Promotions are not Complete and Report Printing is not allowed.");
					break;
					case 5:
					alert("Report Printing can only be Approved When the Exams Results are Published and All Reports are Printed.");
					break;
					default:
					alert("Sorry, Fatal error occured, report to your Admin.");
				}
			}
		});
		}
		
		return false;
	});
		
		$('#frmeexamination').submit(function(){
		  $.ajax({
				url : 'php/configuration/updateexamprocess.php',
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
						alert("Sorry, Examination Updating Failed.");
						break;
						case 3:
						alert("Examination Updating Successfull.");
						 window.location = "examlist.php";
						break;
						case 4:
						alert("Invalid Percentage Values");
						break;
						default:
						alert("Sorry, Fatal error occured, report to your Admin.");
					}
				}
			});
		  
		  return false;
		});
		
		$('#frmexamination').submit(function(){
		  $.ajax({
				url : 'php/configuration/newexamprocess.php',
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
						alert("Sorry, New Examination Creation Failed.");
						break;
						case 3:
						alert("New Examination Creation Successfull.");
						 window.location = "examlist.php";
						break;
						case 4:
						alert("Examination Already Exist");
						window.location = "examlist.php";
						break;
						case 5:
						alert("Academic Term Not Detected.");
						break;
						case 6:
						alert("Invalid Percentage Values.");
						break;
						default:
						alert("Sorry, Fatal error occured, report to your Admin.");
					}
				}
			});
		  
		  return false;
		});
	</script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/dark/table-bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 04 Mar 2018 23:56:15 GMT -->
</html>