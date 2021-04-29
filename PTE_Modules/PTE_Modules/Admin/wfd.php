<?php include('includes/header.php'); ?>
    <?php 
$cn=mysqli_connect("localhost","thevisio_visionoverseas","UeZuxw#q-_&j","thevisio_eduction");
     
      
        $GLOBALS['data3'] = "0";
        if(isset($_POST['up_audio']) or isset($_POST['update']) ){
        if(isset($_FILES['file_audio']['name'])){
        $tmp_path=$_FILES['file_audio']['tmp_name'];
        $our_path="../upload/audio/".$_FILES['file_audio']['name'];
        move_uploaded_file($tmp_path , $our_path);
        $data3=$our_path;
    }
}
   

if(isset($_POST['up_audio'])){      

         $name=$_POST['name'];
     
        $answer=$_POST['answer'];


        $ins="insert into single_user (name,Aud_Path,answer) values('$name','$data3','$answer')";
        echo $ins;
        mysqli_query($cn,$ins);
      
}


if(isset($_GET['da_id'])){
    $id=$_GET['da_id'];
    $del="delete from single_user where id='$id'";
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
