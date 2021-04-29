<?php ob_start(); ?>
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
           
           if(isset($_GET['block_id'])){
    $id=$_GET['block_id'];
    $da="NO";
    $data="update user_info set STATUS='$da'where U_ID='$id'";
    mysqli_query($cn,$data);
      header( 'Location:student_detail.php');
    
}
elseif(isset($_GET['unblock_id'])){
    $id=$_GET['unblock_id'];
    $da="YES";
    $data="update user_info set STATUS='$da'where U_ID='$id'";
    mysqli_query($cn,$data);
      header( 'Location:student_detail.php');
    
}
?>

      
        ?>
        <html>
<head>
   <style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color:#4CAF50;
  border-radius: 5px;
}
</style>


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

                     <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }?>
       
         <?php
         $no_of_records_per_page =5;
        $offset = ($pageno-1) * $no_of_records_per_page;

        
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        if(isset($_GET['submit'])){
         $search=$_GET['search'];
         $total_pages_sql = "SELECT COUNT(*) FROM user_info where U_NAME LIKE '%$search%' OR STATUS LIKE '%$search%'";
        }else{
        $total_pages_sql = "SELECT COUNT(*) FROM user_info";
        }
        $result = mysqli_query($cn,$total_pages_sql);
        $row = mysqli_fetch_array($result);
         $total_rows = $row[0];  
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="col-lg-6" >
                                        
                                        <form class="app-search d-none d-lg-block" method="GET">
                                         <table width="100%">
                                             <tr>
                                                 <td><input type="text" class="form-control" placeholder="Search User Name and Status ...."  name="search"></td>
                                                 <td><button type="submit" class="btn btn-success btn-sm btn-icon-text mr-3" style="height:40px;border-radius: 20px;  width:150px;" name="submit">
                                              Search 
                                            <i   class="bx bx-search-alt "></i>                        
                                            </button></td>
                                             </tr>
                                         </table>
                                            
                                       
                                            
                                        
                                    </form>
                                    </div>
                                    
                                    <div class="card-body">
                                    <div class="col-lg-12" align="right">
                                    <nav>
                                     <div class="pagination" style="margin: 0px auto; padding: 0px auto; " >
                                      <a  href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">&laquo;</a>
                                      <?php for ($i=1; $i <=$total_pages ; $i++) {  ?>
                                      <a href="?pageno=<?php echo $i; ?>"><?php echo $i ?></a></li>
                                          <?php } ?></a>
                                      <a href="?pageno=<?php echo $total_pages; ?>" >&raquo;</a>
                                    </div>
                                    </nav>
                                    </div>
                                      
                                        <div class="table-responsive">
                                            <table class="table mb-8">
        
                                                <thead>
                                                    <tr>
                                            
                                                       <th>NAME</th>
                                                        <th>IMAGE</th>
                                                        <th>MOBILE</th>
                                                        <th>EMAIL</th>
                                                        <th>DOB</th>
                                                        <th>GENDER</th>
                                                        <th>USER_REG_DATE</th>
                                                        <th>ADDRESS</th>
                                                        <th>Action</th>
                                                        
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php 
                                                 if(isset($_GET['submit'])){
                                                     $search=$_GET['search'];
                                                    
                                            $sel1="select * from user_info where U_NAME LIKE '%$search%'  OR STATUS LIKE '%$search%' LIMIT $offset, $no_of_records_per_page";
                                                 }else{
                                              $sel1="select * from user_info LIMIT $offset, $no_of_records_per_page";
                                            }
                                     $result1=mysqli_query($cn,$sel1);
                                     while ($row1=mysqli_fetch_assoc($result1)) {
                                     ?>
                                        <tr class="odd gradeX">
                                            

                                               <td><?php echo $row1['U_NAME']; ?></td>
        <td><img src="<?php echo $row1['U_IMAGE']; ?>" width="100px" height="100px"></td>
      <td><?php echo $row1['U_MOBILE']; ?></td>
      <td><?php echo $row1['U_EMAIL']; ?></td>
      <td><?php echo $row1['U_DOB']; ?></td>
      <td><?php echo $row1['U_GENDER']; ?></td>
      <td><?php echo $row1['U_DATE']; ?></td>
      <?php  
      $add=$row1['HOUSE_NO'];
      $add.=",";
      $add.=$row1['U_TOWN'];
      $add.="-";
      $add.=$row1['U_PINCODE'];
    
        
   
      ?>
      <td><?php echo $add; ?></td>
      <td class="center">
          <?php
                    if($row1['STATUS']=="YES"){?>
                        <a href="?block_id= <?php echo $row1['U_ID']; ?>"><button type="button" class="btn btn-danger">Block</button></a>
                    <?php }elseif ($row1['STATUS']=="NO"){ ?>
                    <a href="?unblock_id= <?php echo $row1['U_ID']; ?>"><button type="button" class="btn btn-success">UnBlock</button></a>
                    <?php } ?>
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
<?php ob_flush(); ?>
