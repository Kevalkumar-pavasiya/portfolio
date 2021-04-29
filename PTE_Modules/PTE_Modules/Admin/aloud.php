
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
    $question=$_POST['question'];
    $sql="INSERT INTO aloud(name,question) VALUES(:name,:question)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':question',$question,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
        
    $status = "New Record Inserted Successfully.</br></br><a href='manage-read-aolud.php'>View Inserted Record</a>";        

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
                                                 <textarea type="text" id="textarea" class="form-control" name="question" required="required" rows="8" ></textarea>    
                                               
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
