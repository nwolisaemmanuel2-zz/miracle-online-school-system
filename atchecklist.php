<?php include("include/session.php");?>
<?php include("include/function.php");?>
<?php include("include/dbconnection.php");?>
<?php
	if($_SESSION["sid"] == ""){
		redirect_to("login.html");
	}else{
	 $sid = $_SESSION["sid"];
	 $image = userimage($sid);
	}
?>
<?php 
	$ayid = getactiveacademicyear();
	$termid = getactivetermid();
	$examid = getactiveexamid();
	if(empty($ayid)){
	  redirect_to("checklist.php");
	}else{
		if(empty($termid)){
			redirect_to("checklist.php");
		}
	}
	
	if(empty($examid)){
	 // redirect_to("checklist.php");
	 $examid = 0;
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
    <title>THE MIRACLE</title>
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
                        <h3 class="text-themecolor">ACADEMIC TERM CHECK LIST</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">CHECK LIST</li>
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
                     <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">END OF <?php echo getactivetermdesc();?> CHECK LIST</h4>
                                <h6 class="card-subtitle"> CHECK LIST</h6>
                                <table class="display nowrap table table-hover table-striped table-bordered" data-click-to-select="true" data-height="295">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>ACTIVITY</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
									<tbody>
									<tr>
										<?php $complete = 0; ?>
										<td>1</td><td>STUDENT REGISTRATION</td>
										<td>
										<?php if(thereisstudentin()){?>
										 
											<i class="fa fa-check text-success"></i>
										<?php }else{?>
										<i class="fa fa-close text-danger"></i>
										<?php $complete += 1; ?>
										<?php }?>
										</td>
									</tr>
									<tr>
										<td>2</td><td>EXAMS REGISTRATION</td>
										<td>
										<?php if(activeexam()){?>
											<i class="fa fa-check text-success"></i>
											
										 <?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										</td>
									</tr>
									<?php if(istermone($termid)){?>
									<tr>
										<td>2</td><td>CHANGE CLASSES</td>
										<td>
										<?php if(!changeclassdue()){?>
											<i class="fa fa-check text-success"></i>
											
										 <?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										</td>
									</tr>
									<?php }?>
									<tr>
										<td>3</td><td>GENERATE EXAMS SHEET</td>
										<td>
										<?php $activeclass = countactiveclasstwo();?>
										<?php if($activeclass > 0){ ?>
										
										<?php if(therearesheet()){?>
										<?php if(countexamsheet($termid) >= countactiveclasstwo()){?>
											<i class="fa fa-check text-success"></i>
										 <?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										<?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										<?php }else{?>
										<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
								
										</td>
									</tr>
									<tr>
										<td>4</td><td>UPLOAD EXAMS SHEET</td><td>
										<?php $expectedupresult =  countleveltsubject() * countexamsheetclass($termid); $extra = 3 * countexamsheetclass($termid); ?>
										<?php $uploadedresult = countuploadedresult($examid)?>
										<?php if($uploadedresult > 0){?>
										<?php if(countuploadedresultclass($termid) == countactiveclasstwo()){?>
										
										<?php if($uploadedresult >= $expectedupresult - $extra){?>
											<i class="fa fa-check text-success"></i>
											
										 <?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										<?php }else{?>
										<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										<?php }else{?>
										<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										</td>
									</tr>
									<tr>
										<td>5</td><td>PUBLISH EXAMS</td><td>
										
										<?php if(isexampublished()){?>
											<i class="fa fa-check text-success"></i>
											
										 <?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										</td>
									</tr>
									
									<?php if(istermthree($termid)){?>
										
										<tr><td>7</td><th>PROMOTIONS AND REPETITIONS</th><td>
									<?php if(promotionandrepeat()){?>
										<i class="fa fa-close text-danger"></i>
										<?php $complete += 1; ?>
									<?php }else{ ?>
									<i class="fa fa-check text-success"></i>
									<?php }?>
										</td></tr>
									<?php }?>
									<tr>
										<td>10</td><td>APPROVE REPORT PRINTING</td><td>
										
										<?php if(reportapproved()){?>
											<i class="fa fa-check text-success"></i>
											
										 <?php }else{?>
											<i class="fa fa-close text-danger"></i>
											<?php $complete += 1; ?>
										<?php }?>
										</td>
									</tr>
									</tbody>
                                </table>
								<?php if($complete == 0){?>
								<?php if(istermthree($termid)){?>
								<a href="" class="btn btn-success" id="endyear" name="<?php echo $termid; ?>" value="<?php echo $ayid; ?>">	END ACADEMIC YEAR</a>
								<?php }else{?>
								<a href="" class="btn btn-success" id="endterm" value="<?php echo $termid; ?>">	END TERM</a>
								<?php }?>
								<?php }?>
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
	
	$('#endterm').click(function(){
			var termid = $(this).attr('value');
			if(confirm("You are about to End Current Academic Term!")){
					$.ajax({
				url : 'php/configuration/endtermprocess.php',
				type : 'POST',
				data : {termid : termid},
				success : function(data){
					switch(Number(data)){
						case 1:
						alert("Academic Term not Found.");
						break ;
						case 2:
						alert("Academic Term Ending Failed.");
						break;
						case 3:
						alert("Academic Term Ending Successfull.");
						 window.location = "atchecklist.php";
						break;
						default:
						alert("Sorry, Fatal error occured, report to your Admin.");
					}
				}
			});
			}
		
		return false;
	});
	
	$('#endyear').click(function(){
			var ayid = $(this).attr('value');
			var termid = $(this).attr('name');
			if(confirm("You are about to End Current Academic Year!")){
				$.ajax({
				url : 'php/configuration/endyearprocess.php',
				type : 'POST',
				data : {termid : termid, ayid : ayid},
				success : function(data){
					switch(Number(data)){
						case 1:
						alert("Academic Year not Found.");
						break ;
						case 2:
						alert("Academic Year Ending Failed.");
						break;
						case 3:
						alert("Academic Year Ending Successfull.");
						 window.location = "atchecklist.php";
						break;
						default:
						alert("Sorry, Fatal error occured, report to your Admin.");
					}
				}
			});
			}
		
		return false;
	});
	
		$('.aylremove').click(function(){
			var aylid = $(this).attr("value");
			$.ajax({
				url : 'php/configuration/removeayletterprocess.php',
				type : 'POST',
				data : {aylid : aylid},
				success : function(data){
					switch(Number(data)){
						case 1:
						alert("Class Letter Deletion Failed.");
						break ;
						case 2:
						alert("Sorry, Database Failed.");
						break;
						case 3:
						alert("Class Letter Deletion Successfull.");
						 window.location = "academicyearletter.php";
						break;
						default:
						alert("Sorry, Fatal error occured, report to your Admin.");
					}
				}
			});
			
			return false;
		});
		
		$('#frmayletter').submit(function(){
		  $.ajax({
				url : 'php/configuration/ayletterprocess.php',
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
						alert("Sorry, New Class Letter Saving Failed.");
						break;
						case 3:
						alert("Class Letter Saving Successfull.");
						 window.location = "academicyearletter.php";
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