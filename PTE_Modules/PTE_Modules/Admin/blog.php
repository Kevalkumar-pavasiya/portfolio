
<?php
session_start();
error_reporting(0);
include 'login_config.php';
if(strlen($_SESSION['login'])==0){   
    header('location:index.php');
}else{ 

include('includes/config.php');

?>
<?php 

        include 'config.php';
        $GLOBALS['data1'] = "0";
        if(isset($_POST['blogSubmit'])){
        if(isset($_FILES['file_image']['name'])){
        $tmp_path=$_FILES['file_image']['tmp_name'];
        $our_path="../upload/image/".$_FILES['file_image']['name'];
        move_uploaded_file($tmp_path , $our_path);
        $data1=$our_path;
    }
}


$status = "";
if(isset($_POST['blogSubmit'])){  
       date_default_timezone_set("Asia/Kolkata");
        $bname=$_POST['bname'];
        $btitle=$_POST['btitle'];
        $bdetail=$_POST['bdetail'];
        $bdate=date('Y-m-d H:i:s');
        

        $ins="insert into blog (B_NAME,B_TITLE,B_DATE,B_IAMGE,B_DETAIL) values('$bname','$btitle','$bdate','$data1','$bdetail')";
        $sel=mysqli_query($cn,$ins);
        if($sel){
            
            $status = "New Record Inserted Successfully.</br>"; 
        }
        else{
            $status = "New Record Not Inserted.</br>"; 
        }

       

    }


?>

<?php include('includes/header.php'); ?>
    
    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'header.php'; ?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
                            <div class=">
                            
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">BLOG FORM</h4>
                                    <div style="margin:0px auto; padding:0px auto;">
                                  <p style="color:#FF0000;"><?php echo $status; ?></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row"  >
                            <div class="col-lg-8" style="margin:0px auto; padding:0px auto;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Record Add From</h4>

                                       <form method="post" enctype="multipart/form-data">
                                           <div class="form-group">
                                                <label for="formrow-firstname-input"> Blog Image (Image Path) :-</label>
                                                 <input type="file"  class="form-control" name="file_image" required="required"> 
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Bloger Name (Author) :-</label>
                                                 <input type="text" id="textarea" class="form-control" name="bname" required="required" rows="2" >  
                                               
                                            </div>
                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Blog Title :- </label>
                                                 <input type="text" id="textarea" class="form-control" name="btitle" required="required" rows="2" >  
                                               
                                            </div>
                                            

                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Blog Detail :-</label>
                                                 <textarea type="text" id="textarea" class="form-control " name="bdetail" required="required" rows="3"></textarea> 
                                            </div>

                                               
                                            
                                           
                                            <div style="margin:0px auto; padding:0px auto;">
                                                <button type="submit"  name="blogSubmit"  id="Submit" class="btn btn-primary w-md">Upload</button>                                            
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                           
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include('includes/footer.php'); ?>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
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
</html>

<?php } ?>
