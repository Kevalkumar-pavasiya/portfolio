
<?php
session_start();
error_reporting(0);
include 'login_config.php';
if(strlen($_SESSION['login'])==0){   
    header('location:login.php');
}else{ 
include('includes/config.php');

$status = "";

if(isset($_POST['Submit'])){

    $name=$_POST['name'];
   $paragraph=addslashes($_POST['txtparagraphwords']);
    $question=addslashes($_POST['question']);
    $checkbox1=$_POST['checkbox1'];
    $checkbox2=$_POST['checkbox2'];
    $checkbox3=$_POST['checkbox3'];
    $checkbox4=$_POST['checkbox4'];
    $checkbox5=$_POST['checkbox5'];
    $checkbox6=$_POST['checkbox6'];
    $checkbox7=$_POST['checkbox7'];
    $answer=$_POST['answer'];
    $sql="INSERT INTO multipleselect(name,paragraph,question,checkbox1,checkbox2,checkbox3,checkbox4,checkbox5,checkbox6,checkbox7,answer) VALUES(:name,:paragraph,:question,:checkbox1,:checkbox2,:checkbox3,:checkbox4,:checkbox5,:checkbox6,:checkbox7,:answer)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':paragraph',$paragraph,PDO::PARAM_STR);
    $query->bindParam(':question',$question,PDO::PARAM_STR);
    $query->bindParam(':checkbox1',$checkbox1,PDO::PARAM_STR);
    $query->bindParam(':checkbox2',$checkbox2,PDO::PARAM_STR);
    $query->bindParam(':checkbox3',$checkbox3,PDO::PARAM_STR);
    $query->bindParam(':checkbox4',$checkbox4,PDO::PARAM_STR);
    $query->bindParam(':checkbox5',$checkbox5,PDO::PARAM_STR);
    $query->bindParam(':checkbox6',$checkbox6,PDO::PARAM_STR);
    $query->bindParam(':checkbox7',$checkbox7,PDO::PARAM_STR);
    $query->bindParam(':answer',$answer,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
        
$status = "New Record Inserted Successfully.</br></br><a href='manage-multipleselect.php'>View Inserted Record</a>";

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
                                                <label for="formrow-firstname-input">Check Box 1</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox1" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Check Box 2</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox2" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Check Box 3</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox3" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Check Box 4</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox4" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Check Box 5</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox5" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Check Box 6</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox6" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Check Box 7</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox7"  rows="2" ></textarea>    
                                               
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