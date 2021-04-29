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

<head>
        
       <?php include('includes/header.php'); ?>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
.droptarget {
   float:left; 
  width: 100px; 
  height: 35px;
  
  padding: 10px;
  border: 1px solid #aaaaaa;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

      <?php if(isset($_GET['click'])) { ?>
        $("#table_data").fadeIn();
         $("#hide").fadeOut();
      <?php } ?>
      
    });
  </script> 
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
session_start();
include 'config.php';
if(isset($_GET['click'])){
     $no= $_GET['no'];
     $n=$_GET['n'];
    $word_option =implode(" ",$n);
    $w_id=$_GET['click'];
    $str =implode(" ",$no);
    $ins="update drop_down set 
    no_of_word ='$str',
    option_1='$word_option'
    where w_id='$w_id'";
    mysqli_query($cn,$ins);
}
if(isset($_GET['w_id'])){
$data1=$_GET['w_id'];
$GLOBALS['no']=$_GET['no'];
$sel="select * from drop_down where w_id=$data1";
$res=mysqli_query($cn,$sel);
$rows1=mysqli_fetch_assoc($res);
?>
<form>
<table class="table table-hover" width="100%">
       
        <tr>
            <td colspan="<?php echo $no ?>"><p><?php echo $rows1['words'];?></p> </td>  
        </tr>
        <tr>
            <?php for ($i=0; $i <$no ; $i++) { ?>
            <td > <input type="text" name="no[]" style="width: 150px; height: 50px;">  </td>
            <?php } ?>
        </tr>
        <tr align="center">
            <td colspan="<?php echo $no ?>">
                Enter The Pragraph Words..
            </td>
        </tr>
        <?php for ($i=0; $i < 4 ; $i++) { ?>
            <tr>
                <?php for ($j=0; $j < $no ; $j++) { ?>
                <td > <input type="text" name="n[]" style="width: 150px; height: 50px;" value="<?php echo $j+$i ; ?>"> </td>
                <?php } ?>
            </tr>
        <?php } ?>
        <tr align="center">
            <td colspan="<?php echo $no ?>"><button type="submit" name="click" class="btn" value="<?php echo $_GET['w_id']; ?>" >click</button></td>
        </tr>
    </table>
    </form>
<?php } ?>
</div>
<div id="table_data" style="display: none;">
<?php 
$w_id=$_GET['click'];

$sel="select * from drop_down where w_id='$w_id'";
$res=mysqli_query($cn,$sel);
$count=1;
$rows=mysqli_fetch_assoc($res);
 ?>
    <table class="table table-hover">
        
        <tr>
            
            <?php 
                $words=$rows['words'];
                $GLOBALS['data1'] = $rows['w_id'];
                $str=$rows['no_of_word'];
                $n=$rows['option_1'];
                $a=explode(" ", $n);
                $no=explode(" ", $str);
                print_r($no);
                $p=" ";
                $cnt=count($no);
                $c=0;
                $pragraph=explode(" ",$words);
                for ($i=0; $i <count($pragraph); $i++) { 
                    
                    foreach ($no as  $value) {
                    if($pragraph[$i]==$value){
                        $pragraph[$i]=" ";
                        
                        echo $cnt;
                        $p.="<select>";
                          for ($k=$c; $k < $cnt  ; $k++) { 
                                for ($j=$k; $j <$cnt * 4 ; $j= $j + $cnt ) {
                                $p.="<option> $a[$j] </option>";
                              } 
                              break;

                            }
                     $c++;
                                
                        $p.="</select>"; 
                        
                    }

                }

                $p.= $pragraph[$i]." ";
                }
                    
                    
                    ?><td colspan="2"><p ><?php echo $p; ?></p> </td>
        </tr>
        
        
        

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

<?php } ?>
