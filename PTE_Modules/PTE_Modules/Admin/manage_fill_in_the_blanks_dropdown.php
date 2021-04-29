<?php ob_start(); ?>
<?php
session_start();
error_reporting(0);
include 'login_config.php';
if(strlen($_SESSION['login'])==0){   
    header('location:index.php');
}else{ 
?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:37 GMT -->
<head>
        
    <?php include('includes/header.php'); ?>
        <script  src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

      <?php if(isset($_GET['s_id'])) { ?>
        $("#table_data").fadeIn();
         $("#hide").fadeOut();
      <?php } ?>
      
    });
  </script>
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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>

       <?php 

include 'config.php';
if(isset($_GET['click'])){
$wid=$_SESSION['data1'];

$no=$_GET['no'];


header("location:select_fill_in_the_blanks_dropdown.php?w_id=$wid&no=$no");
}
if(isset($_GET['d_id'])){
$id=$_GET['d_id'];
$del="delete  from drop_down where w_id='$id'";
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
          
                </div>
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

<div id="table_data" style="display: none;">
<?php

$id=$_GET['s_id'];
$_SESSION['data1'] = $id; 
echo $_SESSION['data1'];
$sel="select * from drop_down where w_id=$id";
$res1=mysqli_query($cn,$sel);
$rows=mysqli_fetch_assoc($res1);
?>
<table class="table table-hover" >
	
		<tr>
			<td><p><?php echo $rows['words'];?></p> </td>	
		</tr>
		
		<tr>
			<td><form><p>How many blank lines to put in the pragraph..?</p>&nbsp;&nbsp;&nbsp;<input type="number" name="no" style="width: 150px; height: 50px;"> &nbsp;&nbsp;&nbsp;<button type="submit" name="click" class="btn btn-info"  >click</button></form></td>
		</tr>
	</table>
</div>
<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }?>
       
         <?php
         $no_of_records_per_page =2;
        $offset = ($pageno-1) * $no_of_records_per_page;

        
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM drop_down";
        $result = mysqli_query($cn,$total_pages_sql);
        $row = mysqli_fetch_array($result);
         $total_rows = $row[0];  
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        ?>
<div id=hide style="background-color:white; width: 0px auto; height: 0px auto;">


<table class="table table-hover" width="100%">
    <tr>
			<th>NO.</th>
			<th>Title</th>
			<th colspan="2" width="50px">Opration</th>
		</tr>
		<?php 
$sel="select * from drop_down LIMIT $offset, $no_of_records_per_page";
$res=mysqli_query($cn,$sel);
$count=1;
while ($rows=mysqli_fetch_assoc($res)) {
 ?>
		
		
		<tr >
			<td width="30px"><?php echo $count++; ?></td>
			<td><p><?php echo $rows['w_title'];?></p> </td>
			<td style="border: none;" width="30px"><a href="manage_fill_in_the_blanks_dropdown.php?s_id=<?php echo $rows['w_id']; ?>"><button class="btn btn-primary" id="btn_select">Select</button></a></td>
			<td style="border: none;" width="30px"><a href="manage_fill_in_the_blanks_dropdown.php?d_id=<?php echo $rows['w_id'];?>"><button class="btn btn-danger" type="submit">Delete</button></a></td>
		</tr>
		<?php  } ?>
	</table>
                 <nav>
                 <div class="pagination" style="margin: 0px auto; padding: 0px auto; " >
                  <a  href="<?php if($pageno <= 1){ echo '#'; } else { echo "manage_fill_in_the_blanks_dropdown.php?pageno=".($pageno - 1); } ?>">&laquo;</a>
                  <?php for ($i=1; $i <=$total_pages ; $i++) {  ?>
                  <a href="manage_fill_in_the_blanks_dropdown.php?pageno=<?php echo $i; ?>"><?php echo $i ?></a></li>
                      <?php } ?></a>
                  <a href="manage_fill_in_the_blanks_dropdown.php?pageno=<?php echo $total_pages; ?>" >&raquo;</a>
                </div>
                </nav>

</div>
                       
                
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

<?php } ?><?php ob_flush(); ?>

