
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

<head>
		<?php include('includes/header.php'); ?>
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
	$ins="insert into drop_down (words,w_title) values('$txt','$title')";
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
header("location:demo1.php?w_id=$wid&no=$no");
}
if(isset($_GET['d_id'])){
$id=$_GET['d_id'];
$del="delete  from drop_down where w_id='$id'";
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

			</div>
			<!-- end main content-->

		</div>
		<!-- END layout-wrapper -->

		<!-- Right Sidebar -->
		<?php include('includes/footer.php'); ?>
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

<?php } ?>
