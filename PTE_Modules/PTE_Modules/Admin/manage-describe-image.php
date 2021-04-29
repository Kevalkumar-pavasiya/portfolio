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
            
            $cn=mysqli_connect("localhost","thevisio_visionoverseas","UeZuxw#q-_&j","thevisio_eduction");


 if(isset($_GET['di_id'])){
    $id=$_GET['di_id'];
    $del="delete from images where Img_Id='$id'";
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
            
                <!-- End Page-content -->






                     <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Describe Image</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Describe-Image</li>
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
                                                        <th>Image</th>
                                                        <th>Answer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php $sel1="select * from images";
        $result1=mysqli_query($cn,$sel1);
         while ($row1=mysqli_fetch_assoc($result1)) {
         ?>
                                        <tr class="odd gradeX">
                                            

                                               <td><?php echo $row1['name']; ?></td>
        <td> <img src="<?php echo $row1['Img_Path']; ?>" width="100px" height="100px;"></td>
      <td> <?php echo $row1['answer']; ?></td>      
    
        <td class="center">
                                          <a href="?di_id= <?php echo $row1['Img_Id']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i>
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
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
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

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:38 GMT -->
</html>

<?php } ?>