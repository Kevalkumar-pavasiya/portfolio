<?php ob_start(); ?>
<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="kYAVEKQIaOK-KolYCV6CEHJfQIA-Nk4_T65BfU49IjM" />
   
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="PTE Repeated Questions? PTE Question Bank? Answers Score 90? Premium TEMPLATES? Audio Answer? Transcript Answers. Key Tips for each question."/>
    <meta name="keywords" content="Thevisionoverseas, PTE in surat, best pte in surat, pte, pte exam date book, best pte coaching in surat, apeuni pte, pearsonpte"/>
    <meta name="keywords" content="pte,pte test,pte app,pte login,pte exam,pte study,pte ielts,pte score,pte tutorials,pte meaning,pte practice,pte preparation,real pte questions,pte australia,pearson pte,pte academic,real pte,pte essay,pte reading,pte result,study pte,pte booking,pte mock test,pte tools,read aloud,pte listening,pte coaching,pte writing">
    <meta name="author" content="Keval Pavasiya"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Member | Vision Overseas</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl carousel theme default CSS file -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- owl carousel CSS file -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">
 <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZMHXQ9YXJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SZMHXQ9YXJ');
    </script>

</head>
<body>
<!-- header area start -->
<?php include 'includes/header.php';?>
<!-- end header area -->
<main>
    <!-- breadcrumb banner content area start -->
    <div class="lernen_banner bg-contact">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>MemberShip</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<!--<a href="member.php">MemberShip</a></span>-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->
    
    <!-- contact area start -->
    <div id="contact" class="wrap-bg wrap-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    
                <div class="tbl-pricing" >
                <div class="row">
                    <?php
                     $id=$_SESSION['id'];
                      include 'dbconn.php';
                       $sel="select * from user_info where U_ID=$id";
                        $result=mysqli_query($cn,$sel);
                        $row=mysqli_fetch_assoc($result); 
                    ?>
                   
                    <p>Congratulations  <b><?php echo $row['U_NAME']; ?></b> ,</p></br>
                    <p>Welcome ! You are now a member of <b>Vision Overseas</b> .</p></br>
                    <p> You are awarded  3 months MemberShip free. </p>
                </div>
               <p align="right"><b>Vision Overseas</b> .</p>
            </div>
                       
              
                 <a href="https://thevisionoverseas.com/PTE_Modules/PTE/PTE.php"><input type="submit" class="color-two btn-custom" value="Continue" /></a>
                    </div>
            </div>
        </div>
    </div>
    
    <!-- contact area end -->
    <?php include 'includes/footer.php';?>
<!-- #footer area end -->

    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='js/jquery-3.4.1.min.js'></script>
    <!-- Main -->
    <script src='js/main.js'></script>
    <!-- Bootstrap -->
    <script src='js/bootstrap.min.js'></script>
    <!-- Slick -->
    <script src='js/slick.min.js'></script>
    <!-- Fancybox -->
    <script src='js/jquery.fancybox.pack.js'></script>
    <!-- Magnific Popup core JS file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Waypoints -->
    <script src='js/waypoints.min.js'></script>
    <!-- Counterup -->
    <script src='js/jquery.counterup.min.js'></script>
    <!-- owl carousel -->
    <script src='js/owl.carousel.min.js'></script>

</body>

</html>
<?php ob_flush(); ?>