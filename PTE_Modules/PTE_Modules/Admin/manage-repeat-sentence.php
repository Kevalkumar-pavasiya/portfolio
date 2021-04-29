
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


            if(isset($_GET['da_id'])){
    $id=$_GET['da_id'];
    $del="delete from audio where Aud_Id='$id'";
    echo $del;
    mysqli_query($cn,$del);
}
?>

      
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
                                    <h4 class="mb-0 font-size-18">Repeat-Sentence</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Repeat-Sentence</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                    
                                       


                                        
                                        <div class="table-responsive">
                                            <table class="table mb-8">
        
                                                <thead>
                                                    <tr>
                                            
                                                       <th>Name</th>
                                                        <th>Audio</th>
                                                        <th>Answer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php $sel1="select * from audio";
        $result1=mysqli_query($cn,$sel1);
         while ($row1=mysqli_fetch_assoc($result1)) {
         ?>
                                        <tr class="odd gradeX">
                                            

                                               <td><?php echo $row1['name']; ?></td>
        <td><audio controls >
        <source src="<?php echo $row1['Aud_path']; ?>">
         
      </audio></td>
      <td> <?php echo $row1['answer']; ?></td>      
    
        <td class="center">
                                          <a href="?da_id= <?php echo $row1['Aud_Id']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                    Delete
                  </button></a>

                   </td>
        
        <?php } ?>

                                          
                                        </tr>
                                    
                                    </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                            
                           
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:38 GMT -->
</html>
<?php } ?>
