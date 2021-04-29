
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

      <?php if(isset($_GET['click'])) { ?>
        $("#table_data").fadeIn();
         $("#hide").fadeOut();
      <?php } ?>
      
    });
  </script>
<style>
.droptarget {
	float: left;
  padding: 10px;
  width: 100px; 
  height: 60px;
  margin: 15px;
 
  border: 1px solid #aaaaaa;
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

<div id="no" >
<?php 

include 'config.php';


if(isset($_GET['click'])){
	 $no= $_GET['no'];
	$w_id=$_GET['click'];
	$str =implode(" ",$no);
	$n=$_GET['n'];
    $word_option =implode(" ",$n);
	$ins="update words_blank_line set 
	no_of_word ='$str' ,
	option_1='$word_option'
	where w_id='$w_id'";
	
	mysqli_query($cn,$ins);
}
if(isset($_GET['w_id'])){
$data1=$_GET['w_id'];
$GLOBALS['no']=$_GET['no'];


$sel="select * from words_blank_line where w_id=$data1";
$res=mysqli_query($cn,$sel);
$rows1=mysqli_fetch_assoc($res);
?>
<form>
<table class="table table-hover" width="100%">
		<tr>
			<td ><h4> Pragraph </h4> </td>
		</tr>
		<tr>
			<td><p><?php echo $rows1['words'];?></p> </td>	
		</tr>
			<tr><td><h5 style="color:red">Note:- Plz Enter Blank Words..</h5></td></tr>
		<tr>
			<td>
			     <?php for ($i=0; $i <$no ; $i++) { ?><input type="text" name="no[]" style="width: 150px; height: 50px;"> &nbsp;&nbsp;&nbsp;<?php } ?>
			</td>
		</tr>
		<tr><td><h5 style="color:red">Note:- Plz Enter a Multiple Option.......</h5></td></tr>
		<tr>
		    <td>
		        <?php for ($i=0; $i <$no+4 ; $i++) { ?><input type="text" name="n[]" style="width: 150px; height: 50px;"> &nbsp;&nbsp;&nbsp;<?php } ?>
		    </td>
		</tr>
		<tr>
		    <td>
		        <button type="submit" name="click" class="btn btn-suceess w-md" value="<?php echo $_GET['w_id']; ?>" >click</button>
		    </td>
		</tr>
	</table>
	</form>
<?php } ?>
</div>
<div id="table_data" ">
<?php 
$w_id=$_GET['click'];
$sel="select * from words_blank_line where w_id='$w_id'";
$res=mysqli_query($cn,$sel);
$count=1;
$rows=mysqli_fetch_assoc($res);
 ?>
	<table class="table table-hover" width="100%" >
		<tr align="center">
			<td style="border: none;"><a href="manage_fib-fill-in-the-blanks-drag-n-drop.php"><--Back</a></td>
			<td style="border: none;"><h4> Pragraph <?php echo $count++; ?></h4> </td>
		</tr>
		<tr>
			
			<?php 
				$words=$rows['words'];
				$str=$rows['no_of_word'];
				$no=explode(" ", $str);
				$option=$rows['option_1'];
				$o_no=explode(" ", $option);
			   $word1 = str_replace($no,"arjun" , $words);
			   
			  $demo="<input  style='width: 150px; height: 50px; border:none;border-bottom:2px solid black;' ondrop='drop(event)' ondragover='allowDrop(event)'>";
			    	?><td colspan="2"><p><?php  echo str_replace("arjun",$demo,$word1);?></p> </td>
		</tr>
		<tr>
			<td colspan="2">
				 <?php foreach ($o_no as $value) { ?>
				<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
  				<p ondragstart="dragStart(event)" ondrag="dragging(event)" draggable="true" class="dragtarget"><?php echo $value; ?></p>
				</div>
				<?php } ?>
			</td>
		</tr>

	</table>
</div>
<script>
function dragStart(event) {
  event.dataTransfer.setData("Text", event.target.class);
}



function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  event.preventDefault();
  var data = event.dataTransfer.getData("Text");
  event.target.appendChild(document.getElementById(data));
  
}
</script>

                       
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

