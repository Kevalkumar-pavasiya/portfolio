<?php

    session_start();
    error_reporting(0);
    include 'login_config.php';
        if($_SESSION['login']!=''){
            $_SESSION['login']='';
        }

        if(isset($_POST['login'])){
            //code for captach verification
          
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                $sql ="SELECT username,password,Status FROM admin WHERE username=:username and password=:password";
                $query= $dbh -> prepare($sql);
                $query-> bindParam(':username', $username, PDO::PARAM_STR);
                $query-> bindParam(':password', $password, PDO::PARAM_STR);
                $query-> execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);

                if($query->rowCount() > 0){
                    foreach ($results as $result) {
                    $_SESSION['stdid']=$result->StudentId;

                    if($result->Status==1){
                        $_SESSION['login']=$_POST['username'];
                        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                    } else {
                        echo "<script>alert('Your Account Has been blocked .Please contact admin');</script>";

                    }
                    }

                }else{
                    echo "<script>alert('Invalid Details');</script>";
                }
            }
        
?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:23 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Vision overseas | Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="../../index.php" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Skote.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/favicon.png" alt="" class="rounded-circle" height="50">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post">
        
                                        <div class="form-group">
                                            <label for="username">email Id</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" name="login" type="submit">Log In</button>
                                        </div>
            
                                       

                                        
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>© 2020 The Vision Overseas. Crafted with <i class="mdi mdi-heart text-danger"></i> by keval pavasiya</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 06:23:23 GMT -->
</html>
