

<?php
session_start();
error_reporting(0);
include 'login_config.php';
if(strlen($_SESSION['login'])==0){   
    header('location:index.php');
}else{ 
?>
<?php include('includes/header.php'); ?>
    <?php 
include 'config.php';
     
      
        $GLOBALS['data3'] = "0";
        if(isset($_POST['up_audio']) or isset($_POST['update']) ){
        if(isset($_FILES['file_audio']['name'])){
        $tmp_path=$_FILES['file_audio']['tmp_name'];
        $our_path="../upload/audio/".$_FILES['file_audio']['name'];
        move_uploaded_file($tmp_path , $our_path);
        $data3=$our_path;
    }
}
   
    $status = "";

if(isset($_POST['up_audio'])){      

         $name=$_POST['name'];
        $question=$_POST['question'];
         $checkbox1=$_POST['checkbox1'];
         $checkbox2=$_POST['checkbox2'];
         $checkbox3=$_POST['checkbox3'];
         $checkbox4=$_POST['checkbox4'];
         $checkbox5=$_POST['checkbox5'];
         $checkbox6=$_POST['checkbox6'];
        $answer=$_POST['answer'];


        $ins="insert into listening_multiple (name,Aud_Path,question,checkbox1,checkbox2,checkbox3,checkbox4,checkbox5,checkbox6,answer) values('$name','$data3','$question','$checkbox1','$checkbox2','$checkbox3','$checkbox4','$checkbox5','$checkbox6','$answer')";
        
        mysqli_query($cn,$ins);

        $status = "New Record Inserted Successfully.</br></br><a href='manage_listening-multiple-choice-choose-multiple-answers.php'>View Inserted Record</a>";

      
}


if(isset($_GET['da_id'])){
    $id=$_GET['da_id'];
    $del="delete from listening_multiple where id='$id'";
    echo $del;
    mysqli_query($cn,$del);
}
?>


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

                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Name</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="name" required="required" rows="2" ></textarea>    
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Audio</label>
                                                 <input type="file" id="textarea" class="form-control" name="file_audio" required="required">
                                            </div>


                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Question</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="question" required="required" ></textarea> 
                                            </div>

                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Checkbox 1 Details</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox1" required="required" rows="3"></textarea> 
                                            </div>

                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Checkbox 2 Details</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox2" required="required" rows="3"></textarea> 
                                            </div>

                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Checkbox 3 Details</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox3" required="required" rows="3"></textarea> 
                                            </div>


                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Checkbox 4 Details</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox4" required="required" rows="3"></textarea> 
                                            </div>


                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Checkbox 5 Details</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox5" required="required" rows="3"></textarea> 
                                            </div>


                                             <div class="form-group">
                                                <label for="formrow-firstname-input">Checkbox 6 Details</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="checkbox6" required="required" rows="3"></textarea> 
                                            </div>


                                              <div class="form-group">
                                                <label for="formrow-firstname-input">Answer</label>
                                                 <textarea type="text" id="textarea" class="form-control" name="answer" required="required" rows="3"></textarea> 
                                            </div>

                                               
                                                
                                               
                                            </div>

                                           
                                            <div>
                                                <button type="submit"  name="up_audio"  id="Submit" class="btn btn-primary w-md">Upload</button>                                            
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