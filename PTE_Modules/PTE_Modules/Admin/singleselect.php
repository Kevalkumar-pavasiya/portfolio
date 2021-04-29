
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
    $question=$_POST['question'];
    $radiobutton1=$_POST['radiobutton1'];
    $radiobutton2=$_POST['radiobutton2'];
    $radiobutton3=$_POST['radiobutton3'];
    $radiobutton4=$_POST['radiobutton4'];
    $radiobutton5=$_POST['radiobutton5'];
    $radiobutton6=$_POST['radiobutton6'];
    $radiobutton7=$_POST['radiobutton7'];
    $answer=$_POST['answer'];
    $sql="INSERT INTO singleselect(name,paragraph,question,radiobutton1,radiobutton2,radiobutton3,radiobutton4,radiobutton5,radiobutton6,radiobutton7,answer) VALUES(:name,:paragraph,:question,:radiobutton1,:radiobutton2,:radiobutton3,:radiobutton4,:radiobutton5,:radiobutton6,:radiobutton7,:answer)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':paragraph',$paragraph,PDO::PARAM_STR);
    $query->bindParam(':question',$question,PDO::PARAM_STR);
    $query->bindParam(':radiobutton1',$radiobutton1,PDO::PARAM_STR);
    $query->bindParam(':radiobutton2',$radiobutton2,PDO::PARAM_STR);
    $query->bindParam(':radiobutton3',$radiobutton3,PDO::PARAM_STR);
    $query->bindParam(':radiobutton4',$radiobutton4,PDO::PARAM_STR);
    $query->bindParam(':radiobutton5',$radiobutton5,PDO::PARAM_STR);
    $query->bindParam(':radiobutton6',$radiobutton6,PDO::PARAM_STR);
    $query->bindParam(':radiobutton7',$radiobutton7,PDO::PARAM_STR);
    $query->bindParam(':answer',$answer,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
        
       $status = "New Record Inserted Successfully.</br></br><a href='manage-singleselect.php'>View Inserted Record</a>";

}
?>
<?php include('includes/header.php'); ?>
    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

         <?php include 'header.php'; ?>
            <!-- ========== Left Sidebar Start ========== -->
           
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
                                                <label for="formrow-firstname-input">Question</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question" rows="8" ></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 1</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton1" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 2</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton2" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 3</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton3" rows="2" ></textarea>    
                                               
                                            </div>  
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 4</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton4" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 5</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton5" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 6</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton6" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Radio button Details 7</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="radiobutton7"  rows="2" ></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Answer</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="answer" required="required" rows="3"></textarea> 
                                            </div>

                                           
                                               
                                                
                                               
                                            </div>

                                           
                                            <div>
                                                <button type="Submit" name="Submit" id="Submit"class="btn btn-primary w-md">Submit</button>
                                            </dCheck Box 1iv>
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