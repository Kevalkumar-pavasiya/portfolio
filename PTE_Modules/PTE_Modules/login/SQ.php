<?php ob_start(); ?>                           
<?php

$host = "localhost"; /* Host name */
$user = "thevisio_visionoverseas"; /* User */
$password = "UeZuxw#q-_&j"; /* Password */
$dbname = "thevisio_eduction"; /* Database name */

$cn = mysqli_connect($host, $user, $password,$dbname);

     session_start();
   

           
             if (isset($_GET['btn_ans'])) {
                $ans=$_GET['ans'];
                if (isset( $_SESSION['f_email'])){
                $date_time=date('Y-m-d H:i:s');
                $mail=$_SESSION['f_email'];
                $sql="select *from user_info where Answer='$ans' and U_EMAIL='$mail'";
                $res=mysqli_query($cn,$sql);
                $num=mysqli_num_rows($res);
                $row=mysqli_fetch_assoc($res);
                    if ($num==1) {

                           header("location: cpass.php"); 
                           
                   }
                    else{ ?>
                        
                        <script type="text/javascript">
                           alert("Invalid  Answer");
                        </script>
                    
                    <?php }
 
                }

    }

?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/register-17.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2020 07:56:39 GMT -->
    <link rel="stylesheet" type="text/css" id="style_sheet" href="js/default.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="js/default.css">
<head>
    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->
    <title>Security Question page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="js/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="js/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="js/flaticon.css">

    <!-- Favicon icon -->
   <!--  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" > -->
   <link rel="icon" href="assets/img/icon/favicon.ico" type="image/x-icon" />
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="js/lo.css">
    <link type="text/css" rel="stylesheet" href="js/icon.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="js/default.css">
    <script src="https://use.fontawesome.com/2081f3284f.js"></script>
     <script src="js/jquery-3.4.1.min.js"></script>

     <style type="text/css">
        *{
      padding: 0;
      margin: 0;
      font-family: '', sans-serif;
    }   
    #box{
      background-color: black;
    }

        
     </style>
</head>
<body id="top">

<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<div class="login-17">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-6">
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad-0 bg-img none-992" id="box">
                    <a href="../../../index.php">
                        <img src="../PTE/images/logo1.png"  height="100px" width="auto">
                    </a>
                    <?php if (isset($_SESSION['u_username'])) { ?>
                    <br>
                    <p align="left" style="color:Red;font-size:20px;"><span style="color:Red;">Hi</span>&nbsp;<?php echo $_SESSION['u_username']; ?>,</p>

                    <?php }else{ ?>
                         <p align="left" style="color:Red;font-size:20px;"><span style="color:Red;">Forgot</span>&nbsp;Password,</p>
                    <?php } ?>
                     
                    <p align="left" style="color:white;font-size:20px;">To Complete Your Sign Up,Please Verify Your Email.</p>
                </div>
                <div class="col-lg-7 col-sm-12 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                          <h3 style="color:black;text-transform: uppercase;  font-weight: 600;">Verify Security_Question here<br></h3>
                            <form method="GET">
                                <div class="form-group">
                                	<?php  
                                		$mail=$_SESSION['f_email'];
          							    $sql="select *from user_info where U_EMAIL='$mail'";
          							    $res=mysqli_query($cn,$sql);
          							    $row=mysqli_fetch_assoc($res);

                                	?>
                                    <span ><h5><?php echo $row['Security_Question'];  ?></h5></span>
                                </div>
                                <div class="form-group">
                          <input type="text" name="ans" placeholder="Enter The Security-Answer......."  id="i1">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="btn_ans"  class="btn-md btn-theme1 btn-block" style="background-color: black; color:white">GO TO HOME</button>

                                    <h3 id="demo"></h3>
                                    
                                </div>
                                
                            </form>
                            <p class="h1">Wrong Email?<a href="signup.php" id="hide">Continue Signup Again</a></p><br>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
 

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Custom JS Script -->

</body>
</html><?php ob_flush(); ?>