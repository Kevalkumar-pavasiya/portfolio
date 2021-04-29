<?php ob_start(); ?>
<?php

$host = "localhost"; /* Host name */
$user = "thevisio_visionoverseas"; /* User */
$password = "UeZuxw#q-_&j"; /* Password */
$dbname = "thevisio_eduction"; /* Database name */

$cn = mysqli_connect($host, $user, $password,$dbname);


session_start();
$no=0;
if(isset($_POST['btnlogin'])){
  
    $username=$_POST['txtemail'];
    $pass=md5($_POST['textpwd']);
    $password=$pass;
    $sel="select * from  user_info where U_EMAIL='". $username ."' AND U_PASSWORD ='".$password."'";
    echo $sel;
   
    $res=mysqli_query($cn,$sel); 
    $row=mysqli_fetch_assoc($res);
    $no=mysqli_num_rows($res);

    if($no==1){

         if($password==$row['U_PASSWORD']){

           $_SESSION['id']=$row['U_ID'];
           $_SESSION['username']=$row['U_NAME'];
           $_SESSION['email']=$row['U_EMAIL'];
           $_SESSION['image']=$row['U_IMAGE'];
           
          echo "login is done ....";
          header('location:../../index.php');
          
         }
  
    }else{ ?>

        <script type="text/javascript">
            
            alert("Something Went Wrong");

        </script>

    <?php }
}
?>





<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->
     <meta name="google-site-verification" content="kYAVEKQIaOK-KolYCV6CEHJfQIA-Nk4_T65BfU49IjM" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZMHXQ9YXJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SZMHXQ9YXJ');
    </script>
    <!-- End Google Tag Manager -->
    <title>Login page</title>
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

<!-- Login  start -->
<div class="login-17">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-6">
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad-0 bg-img align-self-center none-992" id="box">
                    <a href="../../../index.php">
                        <img src="includes/logo.png"  height="100px" width="auto">
                        
                    </a>
                    <p align="left" style="color:white;font-size:20px;margin-top:30px"><span style="color:red;">Welcome Back,</span>Please Login to your account on thevisionoverseas.</p>
                    
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3 style="color:black;text-transform: uppercase;  font-weight: 600;">Login here</h3>

                            <form  method="POST">
                                <div class="form-group inputWithIcon inputIconBg">
                                    <input type="email" name="txtemail" class="input-text" id="email" placeholder="Email Address">
                                    <i class="fa fa-envelope icon" style="color:black;margin-top:2px;"></i>
                                     <span id="mail_info"></span>
                                </div>
                                <div class="form-group inputWithIcon inputIconBg ">
                                    <input type="password" name="textpwd" class="input-text" id="pass" placeholder="Password" >
                                    
                                    <i class="fa fa-eye" aria-hidden="true" id="show_pass" style="color:black; margin-top:8px; display:none;" ></i>

                                    <i class="fa fa-eye-slash" aria-hidden="true" style="color:black; position:absolute; margin-top:4px; cursor:pointer;" id="hide_pass"></i>
                                    <span id="pass_info"></span>
                                </div>
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" name="remember" type="checkbox" value="remember" id="rememberMe" required="true">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                     <a href="forget.php" id="hide1">Forgot Password</a> 
                                </div>
                                <div class="form-group">
                                    <button type="submit"  name="btnlogin" id="btnlogin" class="btn-md btn-theme1 btn-block" style="background-color: black; color:white">Login now</button>
                                </div>
                            </form>
                            <p style="color:black;">Don't have an account?<a href="signup.php" id="hide" style="color:red"> Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login end -->

<!-- Login Validation Start -->
<script type="text/javascript">
    $(document).ready(function(){
            
              

              $('#mail_info').hide();
              $('#pass_info').hide();
              
              var mail_err=true;
              var pass_err=true;
              
              
            $('#email').keyup(function(){
               mail_check();
                
              });

            $('#pass').keyup(function(){
               pass_check();
                
              });

              
         

            function mail_check(){
                
                var mail_val=$('#email').val();
                 var msg = /^\S+@\S+\.\S+$/;
                    
               
             

                if (mail_val.length =='') {
                    
                    $('#mail_info').show();
                    $('#mail_info').html("Please Fill The Email.!");
                    $('#mail_info').focus();
                    $('#mail_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    mail_err=false;
                    return false;
                }else{
                     $('#mail_info').hide();
                }

                if ((mail_val.charAt(mail_val.length-4)!='.') && (mail_val.charAt(mail_val.length-3)!='.')) {
                    
                    $('#mail_info').show();
                    $('#mail_info').html("Email Is Wrong.!");
                    $('#mail_info').focus();
                    $('#mail_info').css({'color':'red','float':'left','font':'16px Cambria '});
                        
                   


                    mail_err=false;
                    return false;
               

                }else{
                     $('#mail_info').hide();
                }

                if (mail_val.length!=''){
                    
                    if (mail_val.match(msg)){
                    
                    true;

                    }else{

                    $('#mail_info').show();
                    $('#mail_info').html("Please Enter A Valid Email Address.!");
                    $('#mail_info').focus();
                    $('#mail_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    mail_err=false;
                    return false;
                    
                    }
                }else{
                
                     $('#user_info').hide();
                }


                if (mail_val.length !=''){
                 $.ajax({
                  //type : 'get',
                      
                  data : {

                 'email':mail_val, 
                 'type' : 'mail_check'
                  },
                  method:"GET",
                  url : 'up_cart.php',
                  success : function(data){
                        
                        $('#mail_info').show();
                        $('#mail_info').html(data);
                        $('#mail_info').focus();
                        $('#mail_info').css({'color':'red','float':'left','font':'16px Cambria '});
                        mail_err=false;
                        return false;    
                  }
                    });
                }else{
                  
                  ('#mail_info').hide();  
                }
            }

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

           


            $('#btnlogin').click(function(){
                    


                
                mail_err=true;
                pass_err=true;
                
                
               
                mail_check();
                pass_check();
               

                if( (mail_err == true ) && (pass_err == true ) ) {

                    return true;
                
                }else{

                    return false;
                }

            });


            $("#hide_pass").click(function(){
               
               $("#show_pass").show();
               $(this).hide();
               $('#pass').attr('type', 'text');
            });

            $("#show_pass").click(function(){
               
               $("#hide_pass").show();
               $(this).hide();
               $('#pass').attr('type', 'password');
            });

        });

</script>
<!-- Login Validation end -->


</body>
</html>
<?php ob_flush(); ?>