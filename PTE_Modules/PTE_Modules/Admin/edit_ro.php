<?php
session_start();
error_reporting(0);
include('includes/config.php');


if(isset($_POST['update']))
{
$id=intval($_GET['id']);
$name=$_POST['name'];

$question1=$_POST['question1'];
$question2=$_POST['question2'];
$question3=$_POST['question3'];
$question4=$_POST['question4'];
$question5=$_POST['question5'];
$question6=$_POST['question6'];
$question7=$_POST['question7'];
$question8=$_POST['question8'];

$sql="update recorder set name=:name, question1=:question1, question2=:question2, question3=:question3, question4=:question4, question5=:question5, question6=:question6, question7=:question7, question8=:question8  where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':question1',$question1,PDO::PARAM_STR);
$query->bindParam(':question2',$question2,PDO::PARAM_STR);
$query->bindParam(':question3',$question3,PDO::PARAM_STR);
$query->bindParam(':question4',$question4,PDO::PARAM_STR);
$query->bindParam(':question5',$question5,PDO::PARAM_STR);
$query->bindParam(':question6',$question6,PDO::PARAM_STR);
$query->bindParam(':question7',$question7,PDO::PARAM_STR);
$query->bindParam(':question8',$question8,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$_SESSION['updatemsg']=" updated successfully";
header('location:manage-ro.php');

}
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:32 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Edit Re-Order | The Vision Overseas </title>
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

    </head>

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


                                            <?php 
$id=intval($_GET['id']);
$sql = "SELECT * from  recorder where id=:id";
$query = $dbh -> prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>   
<?php }}?>

                
                                         <div class="form-group">
                                                <label for="formrow-firstname-input">Name</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="name" value="<?php echo htmlentities($result->name);?>" required="required" ></textarea>    
                                               
                                            </div>


                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question1</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question1" value="<?php echo htmlentities($result->question1);?>" required="required" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question2</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question2" value="<?php echo htmlentities($result->question2);?>" required="required" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question3</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question3" value="<?php echo htmlentities($result->question3);?>" required="required" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question4</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question4" value="<?php echo htmlentities($result->question4);?>" required="required" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question5</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question5" value="<?php echo htmlentities($result->question5);?>" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question6</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question6" value="<?php echo htmlentities($result->question6);?>" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question7</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question7" value="<?php echo htmlentities($result->question7);?>" rows="8"></textarea>    
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Question8</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question8" value="<?php echo htmlentities($result->question8);?>" rows="8"></textarea>    
                                               
                                            </div>
                                           
                                               
                                                
                                               
                                            </div>

                                           
                                            <div>
                                                <button type="submit" name="update" id="Submit"class="btn btn-primary w-md">Submit</button>
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
  <?php include('includes/footer.php'); ?>
        </div>
        <!-- END layout-wrapper -->

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
