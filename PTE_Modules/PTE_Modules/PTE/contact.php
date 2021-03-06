<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="kYAVEKQIaOK-KolYCV6CEHJfQIA-Nk4_T65BfU49IjM" />
   
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="PTE Repeated Questions? PTE Question Bank? Answers Score 90? Premium TEMPLATES? Audio Answer? Transcript Answers. Key Tips for each question."/>
    <meta name="keywords" content="Thevisionoverseas, PTE in surat, best pte in surat, pte, pte exam date book, best pte coaching in surat, apeuni pte, pearsonpte"/>
    <meta name="keywords" content="pte,pte test,pte app,pte login,pte exam,pte study,pte ielts,pte score,pte tutorials,pte meaning,pte practice,pte preparation,real pte questions,pte australia,pearson pte,pte academic,real pte,pte essay,pte reading,pte result,study pte,pte booking,pte mock test,pte tools,read aloud,pte listening,pte coaching,pte writing">
    <meta name="author" content="Keval Pavasiya"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Contact | Vision Overseas</title>
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
                    <h1>Contact</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="index.html">Homepage</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 

       
if(isset($_POST['submit'])){  
    include 'dbconn.php';
       date_default_timezone_set("Asia/Kolkata");
        $cname=$_POST['contactName'];
        $cemail=$_POST['contactEmail'];
        $csubject=$_POST['contactSubject'];
        $cmessage=$_POST['contactMessage'];
        $bdate=date('Y-m-d H:i:s');
        

        $ins="insert into  contact_us (C_Name,C_Email,C_Subject,C_Message,C_JOIN_DATE) values('$cname','$cemail','$csubject','$cmessage','$bdate')";
       
        
        $sel=mysqli_query($cn,$ins);
        
    }


?>
    <!-- end breadcrumb banner content area start -->
    <?php include 'includes/header.php';?>
    <!-- contact area start -->
    <div id="contact" class="wrap-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="section-title with-p">
                        <span>Contact</span>
                        <h2>We???re Here To Help You</h2>
                        <p>We are waiting for you on our office in London or in way, contact us via the contact form below your idea. We are here to answer any question.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-lg-6">
                <form   role="form" method="post">
                    <!-- Change Placeholder and Title -->
                    <div>
                        <input class="input-text required-field" type="text" name="contactName" id="contactName"
                               placeholder="Name" title="Your Full Name"/>
                    </div>
                    <div>
                        <input class="input-text required-field email-field" type="email" name="contactEmail"
                               id="contactEmail" placeholder="Email" title="Your Email"/>
                    </div>
                    <div>
                        <input class="input-text required-field" type="text" name="contactSubject" id="contactSubject"
                               placeholder="Subject" title="Your Subject"/>
                    </div>
                    <div>
                    <textarea class="input-text required-field" name="contactMessage" id="contactMessage"
                              placeholder="Message" title="Your Message"></textarea>
                    </div>
            
                    <input class="color-two button" type="submit" name="submit"
                           value="Send Message"/>
                </form>
            </div>
            <div class="col-md-6 col-lg-6">
                <img src="images/content/courses/contact.jpg" alt="Buy this Course">
            </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- contact area start -->
    <div id="features" class="wrap-bg wrap-bg-dark bg-bottom-zero">
        <!-- .container -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- 1 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <div class="move">
                            <!-- uses solid style -->
                            <i class="secondary-color fas fa-home fa-3x"></i>
                            <h4><a href="#">The Vision Overseas</a></h4>
                            <p>Shop No.1020, 3rd floor, West Field Mall, Opp. ST. Xaviers School, Ghod Dod Rd, Surat, Gujarat 395007</p>
                        </div>
                    </div><!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- 2 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <div class="move">
                            <i class="secondary-color fas fa-envelope fa-3x"></i>
                            <h4><a href="#">Email</a></h4>
                            <p>Thevisionoverseassupport@gmail.com</p>
                        </div>
                    </div><!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <!-- 3 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <div class="move">
                            <i class="secondary-color fas fa-id-card fa-3x"></i>
                            <h4><a href="#">Enquiry Number</a></h4>
                            <p>(+91) 95375 67831</p>
                            <div class="feature_link">
                                <a href="#">Call Center <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end single features -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- contact area end -->

<?php include 'includes/footer.php';?>