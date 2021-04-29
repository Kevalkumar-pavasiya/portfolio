
<?php
session_start();
error_reporting(0);
include 'login_config.php';
if(strlen($_SESSION['login'])==0){   
    header('location:index.php');
}else{ 

include('includes/config.php');


$status = "";

if(isset($_POST['Submit'])){
    
    $name=$_POST['name'];
    $paragraph=$_POST['paragraph'];
    $answer=$_POST['answer'];
    $sql="INSERT INTO swt(name,paragraph,answer) VALUES(:name,:paragraph,:answer)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':paragraph',$paragraph,PDO::PARAM_STR);
    $query->bindParam(':answer',$answer,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
        
    $status = "New Record Inserted Successfully.</br></br><a href='manage-swt.php'>View Inserted Record</a>";        

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
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Form Layouts</h4>

                                    <p style="color:#FF0000;"><?php echo $status; ?></p>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Layouts</li>
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

                                        <form role="form" method="post">

                                        	  <div class="form-group">
                                                <label for="formrow-firstname-input">Name</label>
                                                <textarea type="text" id="textarea" class="form-control" name="name" required="required" rows="3" ></textarea> 
                                            </div>


                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Paragraph</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="paragraph" required="required" rows="8" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Answer</label>
                                                <textarea type="text" id="textarea" class="form-control" name="answer" required="required" rows="3"></textarea> 
                                            </div>

                                           
                                               
                                                
                                               
                                            </div>

                                           
                                            <div>
                                                <button type="Submit" name="Submit" id="Submit"class="btn btn-primary w-md">Submit</button>
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
