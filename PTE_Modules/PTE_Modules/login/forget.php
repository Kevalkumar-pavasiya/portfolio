<?php

$host = "localhost"; /* Host name */
$user = "thevisio_visionoverseas"; /* User */
$password = "UeZuxw#q-_&j"; /* Password */
$dbname = "thevisio_eduction"; /* Database name */

$cn = mysqli_connect($host, $user, $password,$dbname);

     session_start();
   

           
            if(isset($_POST['btn_frogot'])){

            date_default_timezone_set("Asia/Kolkata");

            $_SESSION['f_email']=$_POST['email'];
            
            $_SESSION['f_date_time']=date('Y-m-d H:i:s');
            $mail=$_SESSION['f_email'];


             $sql="select *from user_info where U_EMAIL='$mail'";
             $res=mysqli_query($cn,$sql);
             $num=mysqli_num_rows($res);
            $row=mysqli_fetch_assoc($res);
            $_SESSION['u_username']=$row['U_NAME'];
            if ($num==0){ ?>
                    
                    <script type="text/javascript">
                        
                        alert("Email is Not Exists");

                    </script>

            <?php 

            }else{

              header("location: SQ.php");
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
    <title>Forgot page</title>
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

<!-- Forgot Password start -->
<div class="login-17">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-6">
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad-0 bg-img none-992" id="box">
                     <a href="../../../index.php">
                        <img src="../PTE/images/logo1.png"  height="100px" width="auto">
                        
                    </a>
                    <p align="left" style="color:white;font-size:16px;">Enter The Email address associated with your account to reset your password.</p>
                    
                    
                   
                </div>
                <div class="col-lg-7 col-sm-12 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3 style="color:black;text-transform: uppercase;  font-weight: 600;">Recover your password</h3>
                           
                            <form action="#" method="POST">
                                <div class="form-group inputWithIcon inputIconBg">
                                    <input type="email" name="email" id="email" autocomplete="off" class="input-text" placeholder="Enter Email Address">
                                    <i class="fa fa-envelope icon" style="color:black;margin-top:2px;"></i>
                                   <span id="mail_info"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme1 btn-block" name="btn_frogot" id="btn_forgot" style="background-color: black; color:white">Send Me</button>
                                </div>
                            </form>
                            <p class="h1">Already a member?<a href="login.php" id="hide"> Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Forgot Password end -->

<!-- Forgot Password Validation Start -->
<script type="text/javascript">
    $(document).ready(function(){
            
              $('#mail_info').hide();
               var mail_err=true;

            $('#email').keyup(function(){
               mail_check();
                
              });

               function mail_check(){
                
                var mail_val=$('#email').val();
               
                    
               
             

                if (mail_val.length =='') {
                    
                    $('#mail_info').show();
                    $('#mail_info').html("Please Fill The Email..?");
                    $('#mail_info').focus();
                    $('#mail_info').css({'color':'red','float':'left'});
                    mail_err=false;
                    return false;
                }else{
                     $('#mail_info').hide();
                }

                if ((mail_val.charAt(mail_val.length-4)!='.') && (mail_val.charAt(mail_val.length-3)!='.')) {
                    
                    $('#mail_info').show();
                    $('#mail_info').html("Email Is Wrong..?");
                    $('#mail_info').focus();
                    $('#mail_info').css({'color':'red','float':'left'});
                        
                   


                    mail_err=false;
                    return false;
               

                }else{
                     $('#mail_info').hide();
                }

                 if (mail_val.length !=''){
                 $.ajax({
                  //type : 'get',
                      
                  data : {

                 'email':mail_val, 
                 'type' : 'forgot'
                  },
                  method:"GET",
                  url : 'up_cart.php',
                  success : function(data){
                      
                        $('#mail_info').show();
                        $('#mail_info').html(data);
                        $('#mail_info').focus();
                        $('#mail_info').css({'color':'red','float':'left'});
                        mail_err=false;
                        return false;    
                  }
                    });
                }else{
                  $('#mail_info').hide();  
                }

              
            }



            $('#btn_forgot').click(function(){
                    


               
                mail_err=true;
              
                
               
                mail_check();
               

                if( mail_err == true ) {

                    return true;
                
                }else{

                    return false;
                }

            });
        });
</script>
<!-- Forgot Password Validation end -->

 

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Custom JS Script -->

</body>
</html>