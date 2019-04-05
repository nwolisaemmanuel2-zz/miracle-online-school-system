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
	$ayid = getactiveacademicyear();
	if(empty($ayid)){
	 redirect_to("admin.php");
	}
	
	if(notregistered($ayid)){
		redirect_to("registrationlist.php");
	}
?>
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
                        <h3 class="text-themecolor">SET ACADEMIC YEAR LETTERS</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Class Letters</li>
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
                                <h4 class="card-title">SET <?php echo getactiveacademicyeardesc();?> ACADEMIC YEAR CLASS LETTERS</h4>
                                <h6 class="card-subtitle">Classes & Letters</h6>
								 <form id="frmayletter">
									 <div class="controls">
										<select  class="form-control"  id="classesid" name="classesid" required>
											<option value="">Select Class</option>
											<?php $classlistresult = levelclasslist();?>
											<?php while($clist = mysqli_fetch_assoc($classlistresult)){?>
												<?php if(!aylclassesexist($clist["classesid"],$ayid)){?>
												<?php if(levlhasclass($clist["classeslevel"])){?>
												<?php echo "<option value='".$clist["classesid"]."'>".$clist["classesname"]."</option>";?>
												<?php }?>
												<?php }?>
											<?php } ?>
										</select>
									</div><br />
									<div class="controls">
										<select  class="form-control"  id="letter" name="letter" required>
											<option value="">Select Letter</option>
											<?php $letterresult = ayletterlist(); ?>
											<?php while($letter = mysqli_fetch_assoc($letterresult)){?>
												<?php if(!aylletterexist($letter["letter"],$ayid)){?>
												<?php echo "<option value='".$letter["letter"]."'>".$letter["letter"]."</option>";?>
												<?php }?>
											<?php } ?>
										</select>
									</div><br />
									 <button type="submit" class="btn btn-success waves-effect waves-light">SET</button>
								 </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo getactiveacademicyeardesc();?> ACADEMIC YEAR CLASS LETTERS</h4>
                                <h6 class="card-subtitle">Class Letter List</h6>
                                <table class="display nowrap table table-hover table-striped table-bordered" data-click-to-select="true" data-height="295">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>CLASS LEVEL</th>
                                            <th>LETTER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
									<tbody>
										<?php $ayletterresult = aylevellettlist($ayid); $i=1;?>
										 <?php while($ayletter = mysqli_fetch_assoc($ayletterresult)){ ?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo classnamebyid($ayletter["aylclassesid"]);?></td>
												<td><?php echo $ayletter["aylletter"];?></td>
										 <td>
										 <?php if($ayletter["aylinuse"] == 0){?>
												<a href="" class="aylremove" title="Remove" value="<?php echo $ayletter["aylid"];?>"><i class="fa fa-close text-danger"></i></a>
										 <?php }else{ ?>
												<a href="#" title="LOCKED" value=""><i class="fa fa-lock text-info"></i></a>
										 <?php } ?>
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
            <footer class="footer"> © 2018 Liberate I.T Solutions. All Rigth Reserved </footer>
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
	<script>
	
		$('.aylremove').click(function(){
			var aylid = $(this).attr("value");
			if(confirm("You are about Remove a Record from Class Letter!")){
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
			}
			
			
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