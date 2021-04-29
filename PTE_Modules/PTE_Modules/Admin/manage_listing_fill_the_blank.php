
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
<script type="text/javascript">
    $(document).ready(function() {

      <?php if(isset($_GET['s_id'])) { ?>
        $("#table_data").fadeIn();
         $("#hide").fadeOut();
      <?php } ?>
      
    });
  </script>

    </head>

       <?php 
session_start();

include 'config.php';


if(isset($_GET['click'])){
$wid=$_SESSION['data1'];
$no=$_GET['no'];
header("location:select_listing-fib-fill-the-blank.php?id=$id&no=$no");
}
if(isset($_GET['d_id'])){
$id=$_GET['d_id'];
$del="delete  from listening_fill_the_blank where id='$id'";
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
$sel="select * from listening_fill_the_blank where id=$id";
$res1=mysqli_query($cn,$sel);
$rows=mysqli_fetch_assoc($res1);
?>

		<tr>
			<td ><h4> Pragraph <?php echo $rows['id']; ?></h4> </td>
		</tr>
		<tr>
			<td><p><?php echo $rows['words'];?></p> </td>	
		</tr>
		<tr>
			<td><form><input type="number" name="no" style="width: 150px; height: 50px;"> &nbsp;&nbsp;&nbsp;<button type="submit" name="click" class="btn btn-info w-md"  >click</button></form></td>
		</tr>
	</table>
</div>
<?php
$cn=mysqli_connect("localhost","root","","eduction");
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }?>
       
         <?php
         $no_of_records_per_page =3;
        $offset = ($pageno-1) * $no_of_records_per_page;

        
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM listening_fill_the_blank";
        $result = mysqli_query($cn,$total_pages_sql);
        $row = mysqli_fetch_array($result);
         $total_rows = $row[0];  
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        ?>
<div id=hide>


	<table border="2" width="100%">
		<tr>
			
              <td colspan="3"> <?php for ($i=1; $i <=$total_pages ; $i++) {   
        echo '<a href = "manage_listing_fill_the_blank.php?pageno=' . $i . '">' . $i . ' </a>';  
    }  ?>
  </td>
		</tr>
		<?php 
$sel="select * from listening_fill_the_blank LIMIT $offset, $no_of_records_per_page";
$res=mysqli_query($cn,$sel);
$count=1;
while ($rows=mysqli_fetch_assoc($res)) {
 ?>
		<tr>
			<td colspan="3"><h4> <?php echo $rows['w_title'];?></h4> </td>
		</tr>
        <tr>
            <td> <td><audio controls >
        <source src="<?php echo $row1['Aud_path']; ?>">
         
      </audio></td></td>
        </tr>
		<tr >
			<td><p><?php echo $rows['words'];?></p> </td>
			<td style="border: none;"><a href="?s_id=<?php echo $rows['id']; ?>"><button class="btn btn-primary w-md" id="btn_select">Select</button></a></td>
			<td style="border: none;"><a href="?d_id=<?php echo $rows['id'];?>"><button class="btn btn-danger w-md" type="submit">Delete</button></a></td>
		</tr>
		<?php  } ?>
	</table>


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

<?php }?>
