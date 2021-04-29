
<!DOCTYPE html>
<html lang="en">

GMT -->
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
    <title>Blog Detail | Vision Overseas</title>
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
    <div>
        <?php
                 include 'dbconn.php';      
                 $id=$_GET['bid'];
                
                 $sel1="select * from blog Where B_ID='$id'";
                 $result1=mysqli_query($cn,$sel1);
                 $row1=mysqli_fetch_assoc($result1);
                    ?>
        <div class="lernen_banner bg-detail">
            <div class="container">
                <div class="row">
                    <div class="lernen_banner_title">
                        <h1><?php  echo $row1['B_TITLE']?></h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
    									<span class="first-item">
    									<a href="https://thevisionoverseas.com">Homepage</a></span>
                                <span class="separator">&gt;</span><span class="first-item">
    									<a href="https://thevisionoverseas.com/PTE_Modules/PTE/blog-detail.php">Blog</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item"><?php  echo $row1['B_TITLE']?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->

<!-- Blog Detail area start -->
<div id="blog-detail" class="wrap-bg wrap-bg bg-bottom-zero">
<div class="container">
    <div class="row">
        <!-- Content Left -->
        <div class="col-md-8">
            <div class="blog-content">
                 <?php
                 include 'dbconn.php';      
                 $id=$_GET['bid'];
                
                 $sel1="select * from blog Where B_ID='$id'";
                 $result1=mysqli_query($cn,$sel1);
                 $row1=mysqli_fetch_assoc($result1);
                    ?>
            <div class="section-title">
                <div>
                
                </div>
                    <div class="course-viewer">
                        <ul>
                            <li><i class="fas fa-user"></i><?php echo $row1['B_NAME'] ?></li>
                             <li><i class="fas fa-user"></i><?php echo $row1['B_DATE'] ?></li>
                        </ul>
                    </div>
            </div>
            <p><?php  echo $row1['B_DETAIL']?></p>
        </div>
        </div>
        <!-- Sidebar Right -->
        <div class="col-md-4">


            <div id="teachers" class="item"><!-- single teacher -->
                <a href="<?php echo $row1['B_IAMGE'] ?>" class="fancybox" data-fancybox-group="images_gallery"><img src="<?php echo $row1['B_IAMGE'] ?>" alt="Image 3"></a>
                <h5><?php echo $row1['B_NAME'] ?></h5>
                <p>Blog Author, a bachelor's degree in psychology is ideal for would-be professors in this field. Although most psychology Ph.D. programs.</p>
            </div>

           
        </div>
    </div>
</div>
</div>
<!-- Blog Detail area end -->

  
</main>
<!-- #footer area start -->
<?php include 'includes/footer.php';?>
<!-- #footer area end -->
