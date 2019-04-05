<?php include("include/session.php");?>
<?php include("include/function.php");?>
<?php include("include/dbconnection.php");?>
<?php //include("check.php");?>
<?php 

	if($_SESSION["sid"] == ""){
		redirect_to("login.html");
	}else{
	 $sid = $_SESSION["sid"];
	 $image = userimage($sid);
	}
?>
<!DOCTYPE html>
<html lang="en">
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
	 <link href='css/uploadify.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
	<!-- Date picker plugins css -->
    <link href="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	 <link rel="stylesheet" href="assets/node_modules/dropify/dist/css/dropify.min.css">
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
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index-2.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="icon-Magnifi-Glass2"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        
						
							
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
						<li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php if($image == ""){echo "assets/images/icon/default.png";}else{ echo $image; } ?>" alt="user" class="" /> <span class="hidden-md-down"><?php echo setusername($sid);?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                        </li>
                        <!-- ============================================================== -->
                      
                    </ul>
                </div>
            </nav>
        </header>
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
                            <li class="breadcrumb-item active">ACTIVE STUDENTS LIST</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <a href="registerstudent.php"><button type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</button></a>
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
                                                <th>#</th>
												<th>No.</th>
                                                <th>Name</th>
                                                <th>Image</th>
												<th>Gender</th>
												<th>D.O.B</th>
                                                <th>Class</th>
												<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
												<th>No.</th>
                                                <th>Name</th>
                                                <th>Image</th>
												<th>Gender</th>
												<th>D.O.B</th>
                                                <th>Class</th>
												<th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php $studentresult = allfromstudentclass(); $i = 1;?>
											 <?php while($student = mysqli_fetch_assoc($studentresult)){?>
											 <tr>
											<td><?php echo $i; ?></td>
											<td><?php echo getstudentnobyid($student["stcstid"]); ?></td>
											<td><?php echo getstudentnamebyid($student["stcstid"]); ?></td>
											<?php $image = getstudentimagebyid($student["stcstid"]);?>
											<td><?php if($image == ""){echo "<img height='30px' src='assets/images/icon/default.png'>";}else{echo "<img height='30px' src='".$image."'>";}; ?></td>
											<td class="center"><?php echo getstudentgenderbyid($student["stcstid"]); ?></td>
											<td class="center"><?php echo getstudentdobbyid($student["stcstid"]); ?></td>
											<td class="center"><?php echo classnamebyid($student["stcclassid"]); ?></td>
											<td class="center"><a href="" data-toggle="modal" class="estudent" data-target="#studenteditmodal" estid="<?php echo $student["stcstid"];?>"><span class="icon-Pen-4" title="Student Personal Details"></span></a> &nbsp; &nbsp;<a href="" data-toggle="modal" class="guardian" data-target="#guardianmodal"  stid="<?php echo $student["stcstid"];?>" name="<?php echo setstudentname($student["stcstid"])." [".setstudentno($student["stcstid"])."]";?>"><span class="icon-Administrator" title="Guardian Details"></span></a>&nbsp; &nbsp; <a href="" data-toggle="modal" class="studentimage" data-target="#photomodal" stid="<?php echo $student["stcstid"];?>" name="<?php echo setstudentname($student["stcstid"])." [".setstudentno($student["stcstid"])."]";?>" value="<?php echo $student["stcstid"];?>"><span class="icon-Camera-5" title="Student Photo"></span></a>&nbsp; &nbsp;<a href="studentdetail.php?stid=<?php echo $student["stcstid"];?>"><span class="icon-Printer" title="Print"></span></a> </td>
											</tr>
											<?php $i++; ?>
											<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                <!-- ============================================================== -->
				<!--MODALS-->
<div class="col-md-4">
                        
                                <!-- sample modal content -->
                                <div id="photomodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">STUDENT PHOTO</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                   
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
						<form id="frmimage">
                            <div class="card-body">
                                <h4 class="card-title">Image Upload</h4>
								 <div class="form-group">
									<label for="exampleInputEmail1">Student Name</label>
									<input type="text" class="form-control" name="stname" id="stname" maxlength="30"  autofocus readonly>
									<input type="hidden" class="form-control" name="picstid" id="picstid">
									<img id='img-upload' style="height:30%;width:30%"/>
								</div>
                                <label for="input-file-now-custom-1">You can add a default value</label>
                                <input type="file" id="input-file-now-custom-1" name="stphoto" class="dropify" data-default-file="" required multipart-form="jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
                                            </div>
						</form> 
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
                            
                    </div>			
	
<div class="col-md-4">
		
				<!-- sample modal content -->
				<div id="studenteditmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Edit Student Personal Details</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<form role="form" id="frmupdatestudent">
										<input type="hidden" name="stid" id="stid">
										<div class="form-group">
                                            <label for="exampleInputEmail1">Student Number</label>
                                            <input type="text" class="form-control" id="stno" name="stno" maxlength="10" placeholder="Enter Admissionno" readonly>
                                        </div>
										
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Surname</label>
                                            <input type="text" class="form-control" id="surname" name="surname" maxlength="30" placeholder="Enter Surname" required autocomplete="off">
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Other Name(s)</label>
                                            <input type="text" class="form-control" id="othername" name="othername" maxlength="40" placeholder="Enter Other Names" required autocomplete="off">
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <input type="text" class="form-control mydatepicker" id="dob" name="dob" placeholder="mm/dd/yyyy" maxlength="10" required autocomplete="off">
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Disability</label>
                                            <input type="text" class="form-control" id="disability" name="disability" maxlength="20" placeholder="Enter Disability" value="NONE" autocomplete="off">
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Gender:</label>
                                            <select class="form-control" id="gender" name="gender" required>
												<option value="">Select Gender</option>
												<option value="FEMALE">Female</option>
												<option value="MALE">Male</option>
											</select>
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Nationality:</label>
                                            <input type="text" class="form-control" id="nationality" name="nationality" maxlength="40" placeholder="Enter Nationality" required autocomplete="off">
                                        </div>
										  <div class="form-group">
                                            <label for="exampleInputEmail1">Home Town:</label>
                                            <input type="text" class="form-control" id="hometown" name="hometown" maxlength="40" placeholder="Enter Home Town" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Residence:</label>
                                            <input type="text" class="form-control" id="residence" name="residence" maxlength="40" placeholder="Enter Residence" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Religion:</label>
                                            <select class="form-control" id="religion" name="religion" required>
												<option value="">Select Religion</option>
												<option value="CHRISTIAN">CHRISTIAN</option>
												<option value="MUSLIM">MUSLIM</option>
												<option value="TRADITIONALIST">TRADITIONALIST</option>
												<option value="BUDHIST">BUDHIST</option>
												<option value="NONE">NONE</option>
											</select>
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
 </div>
 
 <div class="col-md-4">
                        
                                <!-- sample modal content -->
                                <div id="guardianmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Student Guardian</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="updateguardian">
												<input type="hidden" name="gid" id="gid" >
										<div class="form-group">
                                            <label for="exampleInputEmail1">Student Number : </label>
                                            <input type="text" class="form-control" id="gstno" name="gstno" placeholder="Enter Guardian Surname" required autocomplete="off" maxlength="30">
                                        </div>
											<div class="form-group">
                                            <label for="exampleInputEmail1">Title:</label>
                                            <select class="form-control" id="gtitle" name="gtitle" required>
												<option value="">Select Title</option>
												<option value="MR">Mr</option>
												<option value="MRS">Mrs</option>
												<option value="SIR">Sir</option>
												<option value="MADAM">Madam</option>
												<option value="DR">Dr</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Guardian Surname:</label>
                                            <input type="text" class="form-control" id="gsurname" name="gsurname" placeholder="Enter Guardian Surname" required autocomplete="off" maxlength="30">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Guardian Othernames:</label>
                                            <input type="text" class="form-control" id="gothername" name="gothername" placeholder="Enter Guardian Other Names" required autocomplete="off" maxlength="40">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Relationship:</label>
                                            <input type="text" class="form-control" id="grelationship" name="grelationship" placeholder="Enter Relationship" required autocomplete="off" maxlength="40">
                                        </div>
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Occupation:</label>
                                            <input type="text" class="form-control" id="goccupation" name="goccupation" placeholder="Enter Occupation" required autocomplete="off" maxlength="40">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Nationality:</label>
                                            <input type="text" class="form-control" id="gnationality" name="gnationality" placeholder="Enter Nationality" required autocomplete="off" maxlength="30">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Residence:</label>
                                            <input type="text" class="form-control" id="gresidence" name="gresidence" placeholder="Enter Residence" required autocomplete="off" maxlength="40">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Contact 1 [For SMS]:</label>
                                              <input type="text" class="form-control" id="gcontactone" name="gcontactone" placeholder="Enter Contact 1" required autocomplete="off" maxlength="10"> <span id="gcerrone"></span>
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Contact 2:</label>
                                              <input type="text" class="form-control" id="gcontacttwo" name="gcontacttwo" placeholder="Enter Contact 2" autocomplete="off" maxlength="10"><span id="gcerrtwo"></span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="gemail" name="gemail" placeholder="Enter Email Address" autocomplete="off" maxlength="45">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Guardian Address:</label>
                                            <textarea class="form-control" id="gaddress" name="gaddress" placeholder="Enter Guardian Address" maxlength="100">
											</textarea>
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
					
<!--/MODALS-->
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
            <footer class="footer"> © 2018 Liberate I.T Solutions. All Right Reserved</footer>
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
    <script src="cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	<!-- Date Picker Plugin JavaScript -->
    <script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- end - This is for export functionality only -->
	 <script src="assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
   
</body>
    <script>
$("#logout").click(function(){
		if(confirm("You are about to Exit the System")){
		  $.ajax({
			 url : 'php/login/userlogoutprocess.php',
			 success : function(data){
				window.location = "login.php";
			 }
		  });
		}
	return false;
});
	
$('.estudent').click(function(){
	var stid = $(this).attr('estid');
	$.ajax({
		url : 'php/student/studentdetailprocess.php',
		type : 'POST',
		data : {stid : stid},
		success : function(data){
			$('#stid').val(data[0].stid);
			$('#admissionno').val(data[0].admissionno);
			$('#surname').val(data[0].surname);
			$('#othername').val(data[0].othername);
			$('#surname').val(data[0].surname);
			$('#othermame').val(data[0].othername);
			$('#dob').val(data[0].dob);
			$('#gender').val(data[0].gender);
			$('#nationality').val(data[0].nationality);
			$('#hometown').val(data[0].hometown);
			$('#residence').val(data[0].residence);
			$('#disability').val(data[0].disability);
			$('#religion').val(data[0].religion);
		}
	});
});

$('.guardian').click(function(){
	var stid = $(this).attr('stid');
	var sname = $(this).attr('name');
	$.ajax({
		url : 'php/student/guardiandetailprocess.php',
		type : 'POST',
		data : {stid : stid},
		success : function(data){
			$('#gstno').val(sname);
			$('#gid').val(data[0].gid);
			$('#gtitle').val(data[0].title);
			$('#gsurname').val(data[0].surname);
			$('#gothername').val(data[0].othername);
			$('#grelationship').val(data[0].relationship);
			$('#goccupation').val(data[0].occupation);
			$('#gnationality').val(data[0].nationality);
			$('#gresidence').val(data[0].residence);
			$('#gcontactone').val(data[0].contactone);
			$('#gcontacttwo').val(data[0].contacttwo);
			$('#gemail').val(data[0].email);
			$('#gaddress').html(data[0].address);
		}
	});
});

$('#frmimage').submit(function(){
  $.ajax({
		url : 'php/student/studentphotoprocess.php',
		type : 'POST',
		data : new FormData(this),
		contentType : false,
		processData : false,
		success : function(data){
			switch(Number(data)){
				case 1:
				alert("Student ID cannot be found.");
				break ;
				case 2:
				alert("Sorry, There are form errors.");
				break;
				case 3:
				alert("Sorry, File moving error.");
				break;
				case 4:
				alert("Sorry, Student Image Uploading Failed.");
				break;
				case 5:
				alert("Student Image Uploading Successful.");
				window.location = "index.php";
				break;
				default:
				alert("Sorry, Fatal error occured, report to your admin.");
			}
		}
	});
  
  return false;
});

$('#frmupdatestudent').submit(function(){
		$.ajax({
			url : 'php/student/updatestudent.php',
			type : 'POST',
			data : new FormData(this),
			contentType: false,
			processData : false,
			success : function(data){
				switch(Number(data)){
				case 1:
				alert("Sorry, There are Form Errors.");
				break ;
				case 2:
				alert("Sorry, Student Personal Details Updating Failed.");
				break;
				case 3:
				alert("Student Updating Successful.");
				window.location = "index.php";
				break;
				default:
				alert("Sorry, Fatal error occured, report to your Admin.");
				}
			}
		});
		return false;
	});
	
$('#updateguardian').submit(function(){
		$.ajax({
			url : 'php/student/updateguardianprocess.php',
			type : 'POST',
			data : new FormData(this),
			contentType: false,
			processData : false,
			success : function(data){
				switch(Number(data)){
					case 1:
					alert("Sorry, there are form errors.");
					break;
					case 2:
					alert("Guardian Updating Failed.");
					break;
					case 3:
					alert("Gurdian Updating Successful.");
					window.location = "index.php";
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
	
	
	 // Date Picker
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
	
//PICTURE UPLOAD
    	$(function() {
		
		 $('.studentimage').click(function(){
		 $('#picstid').empty();
	var stid = $(this).attr('stid');
	var stname = $(this).attr('name');

	var immm = $('#input-file-now-custom-1').attr('data-default-file');
		$.ajax({
		url : 'php/student/studentdetailprocess.php',
		type : 'POST',
		data : {stid : stid},
		success : function(data){
			if(data[0].image == ""){
					$('#img-upload').attr('src','assets/images/default.png');
				}else{
				 $('#img-upload').attr('src',data[0].image);
				}
			
			$('#stname').val(stname);
			$('#picstid').val(stid);
		}
	});
});
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
 <script src="assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/dark/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 04 Mar 2018 23:48:48 GMT -->
</html>