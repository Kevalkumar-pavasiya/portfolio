<?php ob_start(); ?>
<?php

$host = "localhost"; /* Host name */
$user = "thevisio_visionoverseas"; /* User */
$password = "UeZuxw#q-_&j"; /* Password */
$dbname = "thevisio_eduction"; /* Database name */

$cn = mysqli_connect($host, $user, $password,$dbname);


session_start();
if(isset($_POST['btn_change'])){

    $pass=md5($_POST['textpwd']);
    $mail=$_SESSION['f_email'];
    $sql="update user_info set U_PASSWORD='$pass' where U_EMAIL='$mail'";
    mysqli_query($cn,$sql);
    session_destroy();
    header("location: login.php");

}
?>





<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/login-17.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2020 07:59:11 GMT -->
<head>
    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->
    <title>Change Password Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="js/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="js/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="js/flaticon.css">

    <!-- Favicon icon -->
     <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" > 
   
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="js/lo.css">
    <link type="text/css" rel="stylesheet" href="js/icon.css">
    <!--<link rel="stylesheet" type="text/css" id="style_sheet" href="js/default.css">-->
     <script src="js/jquery-3.4.1.min.js"></script>
     <script src="https://use.fontawesome.com/2081f3284f.js"></script>
     <style type="text/css">
        *{
      padding: 0;
      margin: 0;
      font-family: 'Work Sans', sans-serif;
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

<!-- Change password  start -->
<div class="login-17">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-6">
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad-0 bg-img align-self-center none-992" id="box">
                    <a href="../../../index.php">
                        <img src="../PTE/images/logo1.png"  height="100px" width="auto">
                        
                    </a>
                     <?php if (isset($_SESSION['u_username'])) { ?>
                      
                   
                    <p align="left" style="color:red;font-size:20px;"><span style="color:red;">Hi</span>&nbsp;<?php echo $_SESSION['u_username']; ?>,</p>

                    <?php } ?>
                    <p align="left" style="color:white;font-size:20px;"><span style="color:white">Welcome Back,</span>let's get started  to creating new password</p>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3  style="color:black;text-transform: uppercase;  font-weight: 600;">Change password</h3>
                            <form  method="POST">
                               
                                <div class="form-group inputWithIcon inputIconBg ">
                                    <input type="password" name="textpwd" id="pass" class="input-text" placeholder="Enter New Password">
                                    <i class="fa fa-key icon" style="color:black; margin-top:2px; "></i>
                                    <span id="pass_info"></span>
                                </div>
                                 <div class="form-group inputWithIcon inputIconBg ">
                                    <input type="password" name="textpwd1" id="cpass" class="input-text" placeholder="Conform Password">
                                    <i class="fa fa-key icon" style="color:black; margin-top:2px; "></i>
                                     <span id="cpass_info"></span>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit"  name="btn_change" id="btn_change" class="btn-md btn-theme1 btn-block" style="background-color: black; color:white">SUBMIT</button>
                                </div>
                            </form>
                            <p class="h1">Don't have an account?<a href="signup.php" id="hide"> Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Change Password end -->

<!-- Change Password Validation Start -->
<script type="text/javascript">
    
        $(document).ready(function(){
            
              $('#pass_info').hide();
              $('#cpass_info').hide();


              var pass_err=true;
              var cpass_err=true;


              $('#pass').keyup(function(){
               pass_check();
                
              });

              $('#cpass').keyup(function(){
               cpass_check();
                
              });


            function pass_check(){
                
                var pass_val=$('#pass').val();
               
                if (pass_val.length =='') {
                    
                    $('#pass_info').show();
                    $('#pass_info').html("Please Fill The Password.!");
                    $('#pass_info').focus();
                    $('#pass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    pass_err=false;
                    return false;
                }else{
                     $('#pass_info').hide();
                }

                if (pass_val.length < 6) {
                    
                    $('#pass_info').show();
                    $('#pass_info').html("Password Must Be Minimum 6.!");
                    $('#pass_info').focus();
                    $('#pass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    pass_err=false;
                    return false;
                }else{
                     $('#pass_info').hide();
                }
            }

            function cpass_check(){
                
                var cpass_val=$('#cpass').val();
                var pass_val=$('#pass').val();
                
                if (cpass_val.length =='') {
                    
                    $('#cpass_info').show();
                    $('#cpass_info').html("Please Fill The Confrom Password.!");
                    $('#cpass_info').focus();
                    $('#cpass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    cpass_err=false;
                    return false;
                }else{
                     $('#cpass_info').hide();
                }

                if (cpass_val.length < 6) {
                    
                    $('#cpass_info').show();
                    $('#cpass_info').html("Conform Password Must Be Minimum 6.!");
                    $('#cpass_info').focus();
                    $('#cpass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    cpass_err=false;
                    return false;
                }else{
                     $('#cpass_info').hide();
                }

                if (cpass_val != pass_val) {
                    
                    $('#cpass_info').show();
                    $('#cpass_info').html("Password Is Not Match.!");
                    $('#cpass_info').focus();
                    $('#cpass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    cpass_err=false;
                    return false;
                }else{
                     $('#cpass_info').hide();
                }
            }


            $('#btn_change').click(function(){
                    


               
                pass_err=true;
                cpass_err=true;
                
                
                pass_check();
                cpass_check();

                if( (pass_err == true ) && (cpass_err == true )) {

                    return true;
                
                }else{

                    return false;
                }

            });

        });
</script>        
<!-- Change Password Validation End -->


</body>
</html>
<?php ob_flush(); ?>