<?php
session_start();
error_reporting(0);
include('includes/config.php');


if(isset($_POST['update']))
{
$id=intval($_GET['id']);
$name=$_POST['name'];
$paragraph=$_POST['paragraph'];
$answer=$_POST['answer'];
$sql="update swt set name=:name, paragraph=:paragraph, answer=:answer where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':paragraph',$paragraph,PDO::PARAM_STR);
$query->bindParam(':answer',$answer,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$_SESSION['updatemsg']=" updated successfully";
header('location:manage-swt.php');

}
?>
<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>Edit SWT | The Vison Overseas</title>
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
$sql = "SELECT * from  swt where id=:id";
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
                                                <label for="formrow-firstname-input">Upadate_Name</label>
                                                 <textarea type="text" id="textarea" class="form-control"  value="<?php echo htmlentities($result->name);?>" name="name" required="required" maxlength="225" rows="8" placeholder="This textarea has a limit of 225 chars."></textarea>    
                                               
                                            </div>


                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Upadate_Paragraph</label>
                                                 <textarea type="text" id="textarea" class="form-control"  value="<?php echo htmlentities($result->paragraph);?>" name="paragraph" required="required" rows="8"></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Update_Answer</label>
                                                <textarea type="text" id="textarea" class="form-control"   value="<?php echo htmlentities($result->answer);?>"  name="answer" required="required" rows="3"></textarea> 
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
</html>
