<?php

$host = "localhost"; /* Host name */
$user = "thevisio_visionoverseas"; /* User */
$password = "UeZuxw#q-_&j"; /* Password */
$dbname = "thevisio_eduction"; /* Database name */

$cn = mysqli_connect($host, $user, $password,$dbname);

     session_start();
   

           
            if(isset($_POST['btnsignup'])){

                
                date_default_timezone_set("Asia/Kolkata");

                $_SESSION['u_username'] =$_POST['usrnm'];
                $_SESSION['u_email']=$_POST['email'];
                $u_pass=md5($_POST['psw']);
                $SQ=$_POST['SQ'];
                $Ans=$_POST['Ans'];
                $_SESSION['u_password']=$u_pass;
                $mail=$_SESSION['u_email'];
                $_SESSION['u_date_time']=date('Y-m-d H:i:s');
                $sql="select * from user_info where U_EMAIL='$mail'";
                $res=mysqli_query($cn,$sql);
                $num=mysqli_num_rows($res);
                
                if ($num==1) { ?>
                    
                    <script type="text/javascript">
                        
                        alert("Email is Already Exists");

                    </script>

                <?php 

                
                }else{

                 $username=$_SESSION['u_username'];
                $email=$_SESSION['u_email'];
                $password=$_SESSION['u_password'];
                $date=$_SESSION['u_date_time'];
                $da="NO";
                $ins="insert into user_info (U_NAME,U_EMAIL,U_PASSWORD,U_DATE,STATUS,Security_Question,	Answer) values('$username','$email','$password','$date','$da','$SQ','$Ans')";
                  $res=mysqli_query($cn,$ins);
                header('location:login.php');
                }
                
            }
?>

<!DOCTYPE html>
<html lang="zxx">
 <meta name="google-site-verification" content="kYAVEKQIaOK-KolYCV6CEHJfQIA-Nk4_T65BfU49IjM" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <link rel="stylesheet" type="text/css" id="style_sheet" href="js/default.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="js/default.css">
<head>
    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->
    <title>Signup Page</title>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZMHXQ9YXJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SZMHXQ9YXJ');
    </script>
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

<!-- Signup start-->
<div class="login-17" >
    <div class="container"> 
        <div class="col-md-12 pad-0">
            <div class="row login-box-6">
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad-0 bg-img align-self-center none-992" id="box">
                    <a href="../../../index.php" style="padding-right:100px;">
                        <img src="../PTE/images/logo1.png" height="100px" width="auto">
                        
                    </a>
                    <br><br>
                    <h3 style="color:red;font-size:15px;text-align: justify;">Hello, Friend!</h3>
                    <br>
                    <p  style="color:white;font-size:15px;text-align: justify;">Fill up personal information and start journey with us.</p>
                </div>
                <div class="col-lg-7 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3 style="color:black;text-transform: uppercase;  font-weight: 600;">signup here</h3>
                            
                            <form  method="POST">
                                <div class="form-group inputWithIcon inputIconBg">

                                    <input type="text" name="usrnm" class="input-text"  placeholder="Full Name" id="user" autocomplete="off">
                                   <i class="fa fa-user" style="color:black;margin-top:2px;"></i>
                                   <span id="user_info" class="text-danger "></span>
                                   

                                </div>
                                <div class="form-group inputWithIcon inputIconBg">
                                    <input type="email"  name="email" autocomplete="off" class="input-text mi" placeholder="Email Address" id="email">
                                   
                                   <i class="fa fa-envelope icon" style="color:black;margin-top:2px;"></i>
                                    <span id="mail_info" class="text-danger"></span>
                                    <span id="mail_info1" class="text-danger" style="float:left;"></span>
                                    
                                </div>
                                <div class="form-group inputWithIcon inputIconBg">
                                    <input type="password" name="psw" autocomplete="off" class="input-text" placeholder="Password" id="pass">
                                   
                                     <i class="fa fa-eye-slash" aria-hidden="true" id="hide_pass" style="color:black; margin-top:2px; "></i>
                                     <i class="fa fa-eye" aria-hidden="true" id="show_pass" style="color:black; margin-top:8px; display:none; "></i>

                                    <span id="pass_info" class="text-danger"></span>
                                </div>
                                <div class="form-group inputWithIcon inputIconBg">
                                    <input type="password"  name="cpsw" autocomplete="off" class="input-text" placeholder="Conform Password" id="cpass">
                                    <i class="fa fa-eye-slash" aria-hidden="true" id="c_hide_pass" style="color:black; margin-top:2px; "></i>
                                     <i class="fa fa-eye" aria-hidden="true" id="c_show_pass" style="color:black; margin-top:8px; display:none; "></i>
                                    <span id="cpass_info" class="text-danger"></span>
                                </div>
                                <div class="form-group inputWithIcon inputIconBg">
                                    <select id="s1" name="SQ" class="input-text" >
                        				<option> Security Question ........</option>
                        				<option value="what is your pet-name..?"> what is your pet-name..?</option>
                        				<option value="what is your car-No..?"> what is your car-No..?</option>
                        				<option value="your nike name..?"> your nike name..?</option>
                        				<option value="what is childhood friends name..?"> what is childhood friends name..?</option>
                        				<option value=" what is your primary-school name..?"> what is your primary-school name..?</option>
                        			</select>
                                </div>
                                <div class="form-group inputWithIcon inputIconBg">
                                    <input type="text"  name="Ans" autocomplete="off" class="input-text mi" placeholder="Security Answer" id="Ans">
                                   
                                
                                    
                                </div>
                                 <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="termsOfService">
                                        <label class="form-check-label" for="termsOfService">
                                            I agree to the<a href="#" class="terms">terms of service</a>
                                        </label>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <button typ name="btnsignup" class="btn-md btn-theme1 btn-block sin" id="btnsin" style="background-color: black; color:white">Signup Now</button>
                                </div>
                            </form>
                            <p class="h1">Already a member? <a href="login.php" id="hide" style="color:red">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Signup End -->


<!-- Signup Validation Start -->
<script type="text/javascript">
    
        $(document).ready(function(){
            
              $('#user_info').hide();
              $('#mail_info').hide();
              $('#mail_info1').hide();
              $('#pass_info').hide();
              $('#cpass_info').hide();


              var user_err=true;
              var mail_err=true;
              var mail_err1=true;
              var pass_err=true;
              var cpass_err=true;

              $('#user').keyup(function(){
               user_check();
                
              });

              $('#email').keyup(function(){
               mail_check();
                
              });

              $('#pass').keyup(function(){
               pass_check();
                
              });

              $('#cpass').keyup(function(){
               cpass_check();
                
              });

            function user_check(){
                var user_val=$('#user').val();
                var msg=/^[A-Za-z\s]+$/;
                
                if (user_val.length =="") {
                    
                    $('#user_info').show();
                    $('#user_info').html("Please Fill The Username.!");
                    $('#user_info').focus();
                    $('#user_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    user_err=false;
                    return false;
                }else{
                     $('#user_info').hide();
                }

                if (user_val.length < 3) {
                    
                    $('#user_info').show();
                    $('#user_info').html("Username Must Be Minimum 3.!");
                    $('#user_info').focus();
                    $('#user_info').css({'color':'red','float':'left', 'font':'16px Cambria '});
                    user_err=false;
                    return false;
                }else{
                     $('#user_info').hide();
                }

                if (!isNaN(user_val)) {
                    
                    $('#user_info').show();
                    $('#user_info').html("Only Alphabets Are Allowed.!");
                    $('#user_info').focus();
                    $('#user_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    user_err=false;
                    return false;
                }else{
                     $('#user_info').hide();
                }

                if (user_val.length!=''){
                    
                    if (user_val.match(msg)){
                    
                    true;

                    }else{

                    $('#user_info').show();
                    $('#user_info').html("Only Alphabets Are Allowed.!");
                    $('#user_info').focus();
                    $('#user_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    user_err=false;
                    return false;
                    
                    }
                }else{
                
                     $('#user_info').hide();
                }
            }

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


                if ((mail_val.charAt(mail_val.length-4)!='.') && (mail_val.charAt(mail_val.length-3)!='.')) {
                    
                    $('#mail_info').show();
                    $('#mail_info').html("Please Enter A Valid Email Address.!");
                    $('#mail_info').focus();
                    $('#mail_info').css({'color':'red','float':'left','font':'16px Cambria '});
                        
                   


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
                 'type' : 'check'
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
                var user_val=$('#user').val();
                var msg=/[A-Za-z]/;
                var msg1=/[!@#$%^&*]/;
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

                if (pass_val.length == user_val.length) {
                    
                    $('#pass_info').show();
                    $('#pass_info').html("Password must be different from Username.!");
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



                 if (pass_val.length!=''){
                    
                    if (pass_val.match(msg)){
                    
                    true;

                    }else{

                    $('#pass_info').show();
                    $('#pass_info').html("Please Enter At Least One Character.!");
                    $('#pass_info').focus();
                    $('#pass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    pass_err=false;
                    return false;
                    
                    }
                }else{
                
                     $('#pass_info').hide();
                }

                 if (pass_val.length!=''){
                    
                    if (pass_val.match(msg1)){
                    
                    true;

                    }else{

                    $('#pass_info').show();
                    $('#pass_info').html("Please Enter At Least One Special Character.!");
                    $('#pass_info').focus();
                    $('#pass_info').css({'color':'red','float':'left','font':'16px Cambria '});
                    pass_err=false;
                    return false;
                    
                    }
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


            $('#btnsin').click(function(){
                    


                user_err=true;
                mail_err=true;
                pass_err=true;
                cpass_err=true;
                
                user_check();
                mail_check();
                pass_check();
                cpass_check();

                if((user_err == true ) && (mail_err == true ) && (pass_err == true ) && (cpass_err == true )) {

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


            $("#c_hide_pass").click(function(){
               
               $("#c_show_pass").show();
               $(this).hide();
               $('#cpass').attr('type', 'text');
            });

            $("#c_show_pass").click(function(){
               
               $("#c_hide_pass").show();
               $(this).hide();
               $('#cpass').attr('type', 'password');
            });

        });

</script>
<!-- Signup Validation End -->        


 

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Custom JS Script -->

</body>
</html>