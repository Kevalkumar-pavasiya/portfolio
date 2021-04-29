
<?php
session_start();
error_reporting(0);
include 'login_config.php';
if(strlen($_SESSION['login'])==0){   
    header('location:index.php');
}else{
?> 

<!doctype html>
<html lang="en">

	
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:32 GMT -->
<head>
		
		<meta charset="utf-8" />
		<title>Form Layouts | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
		<meta content="Themesbrand" name="author" />
		<!-- App favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap Css -->
		<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
		<!-- Icons Css -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- App Css-->
		<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

		<script  src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

      <?php if(isset($_GET['s_id'])) { ?>
        $("#table_data").fadeIn();
         $("#hide").fadeOut();
      <?php } ?>
      
    });
  </script>

	  


	</head>
<?php 
session_start();

include 'config.php';
	
	$status = "";

if(isset($_POST['submit'])){
	$txt=addslashes($_POST['txtwords']);
	$title=$_POST['title'];
	$ins="insert into words_blank_line (words,w_title) values('$txt','$title')";
	
	$sel=mysqli_query($cn,$ins);
	if($sel){
	     $status = "New Record Inserted Successfully.</br></br>";   
	}else{
	    $status = "New Record Not Inserted Successfully.</br></br>"; 
	}
	            

}
if(isset($_GET['click'])){
$wid=$_SESSION['data1'];
$no=$_GET['no'];
header("location:manage_fib-fill-in-the-blanks-drag-n-drop.php?w_id=$wid&no=$no");
}
if(isset($_GET['d_id'])){
$id=$_GET['d_id'];
$del="delete  from words_blank_line where w_id='$id'";
mysqli_query($cn,$del);
}
?>


	<body data-sidebar="dark">

	

	 <?php include 'header.php'; ?>

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
		
						   
						
					    <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Form Layouts</h4>

  										 <p style="color:#FF0000;"><?php echo $status; ?></p>


                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Retell-Lecture</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Instet</h4>

                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Enter the Title</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="title" required="required" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Enter the Pargraph</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="txtwords" required="required" rows="8"></textarea>
                                            </div>

                                            

                                               



                                                
                                               
                                            </div>

                                           
                                            <div>
                                                <button type="submit"  name="submit"  id="Submit" class="btn btn-primary w-md">Submit</button>                                            
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                           
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


				
				<footer class="footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<script>document.write(new Date().getFullYear())</script> © Skote.
							</div>
							<div class="col-sm-6">
								<div class="text-sm-right d-none d-sm-block">
									Design & Develop by Themesbrand
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<!-- end main content-->

		</div>
		<!-- END layout-wrapper -->

		<!-- Right Sidebar -->
		<div class="right-bar">
			<div data-simplebar class="h-100">
				<div class="rightbar-title px-3 py-4">
					<a href="javascript:void(0);" class="right-bar-toggle float-right">
						<i class="mdi mdi-close noti-icon"></i>
					</a>
					<h5 class="m-0">Settings</h5>
				</div>

				<!-- Settings -->
				<hr class="mt-0" />
				<h6 class="text-center mb-0">Choose Layouts</h6>

				<div class="p-4">
					<div class="mb-2">
						<img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
					</div>
					<div class="custom-control custom-switch mb-3">
						<input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
						<label class="custom-control-label" for="light-mode-switch">Light Mode</label>
					</div>
	
					<div class="mb-2">
						<img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
					</div>
					<div class="custom-control custom-switch mb-3">
						<input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
						<label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
					</div>
	
					<div class="mb-2">
						<img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
					</div>
					<div class="custom-control custom-switch mb-5">
						<input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
						<label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
					</div>

			
				</div>

			</div> <!-- end slimscroll-menu-->
		</div>
		<!-- /Right-bar -->
</div>
		<!-- Right bar overlay-->
		<div class="rightbar-overlay"></div>

		<!-- JAVASCRIPT -->
		<script src="assets/libs/jquery/jquery.min.js"></script>
		<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/libs/metismenu/metisMenu.min.js"></script>
		<script src="assets/libs/simplebar/simplebar.min.js"></script>
		<script src="assets/libs/node-waves/waves.min.js"></script>

		<script src="assets/js/app.js"></script>

	</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:32 GMT -->
</html>
<?php }?>