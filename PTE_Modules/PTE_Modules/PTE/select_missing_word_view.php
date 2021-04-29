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
    <meta name="keywords" content="pte,pte test,pte app,pte login,pte exam,pte study,pte ielts,pte score,pte tutorials,pte meaning,pte practice,pte preparation,real pte questions,pte australia,pearson pte,pte academic,real pte,pte essay,pte reading,pte result,study pte,pte booking,pte mock test,pte tools,read aloud,pte listening,pte coaching,pte writing">
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="CoursePro - Education Courses School Template"/>
    <meta name="keywords" content="Landing Page, Courses, Learning"/>
    <meta name="author" content="Ioan Drozd"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Select Missing Word | Vision Overseas</title>
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
                    <h1>Select Missing Word</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->
    <?php
        if (isset($_GET['id'])) {
        include 'dbconn.php';
            $id = mysqli_real_escape_string($cn, $_GET['id']);
            $sql = "SELECT * FROM missing_word WHERE id='$id' ";
            $result = mysqli_query($cn, $sql) or die("Bad Query");
            $row = mysqli_fetch_array($result);
        } 
    ?>
    <!-- contact area start -->
    <div id="contact" class="wrap-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <div class="">
                        <h4><?php echo $row['name'] ?></h4>
                        <hr>
                        <audio controls><source src="<?php echo $row['Aud_path']; ?>"></audio>
                        <br>
                        <br>
                        <p style="text-align:center; color:black"> Question : - <?php echo $row['question'] ?></p>
                        <div >
                            <div class="radio">
                                <label><input type="radio" name="optradio" checked> <?php echo $row["radiobutton1"]; ?></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio"> <?php echo $row["radiobutton2"]; ?></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio" checked> <?php echo $row["radiobutton3"]; ?></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio"> <?php echo $row["radiobutton4"]; ?></label>
                            </div>
                        </div>
                        <input onclick="myFunction()" style="color:white" class="color-two button" type="button"
                           value="Answer"/>
                           <p id="demo" style=" text-align: center"></p>
                        <script>
                            function myFunction() {
                            document.getElementById("demo").innerHTML = 
                            "<?php echo $row['answer']; ?>";
                            }
                        </script>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-2">
                    <div class="">
                            <?php
                                $previous= mysqli_query($cn, "SELECT * FROM missing_word WHERE id<$id order by id DESC");
                                if($row = mysqli_fetch_array($previous))
                                {
                                    echo '<a href="select_missing_word_view.php?id='.$row['id'].'">
                                    <input onclick="myFunction()" style="color:black; background-color:yellow;" class="color-two button" type="button"
                                    value="<< Previous"/>
                                    </a>';  
                                } 
                            ?>                        
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="">
                        <?php
                            $next = mysqli_query($cn, "SELECT * FROM missing_word WHERE id>$id order by id ASC");
                            if($row = mysqli_fetch_array($next))
                            {

                                echo '<a href="select_missing_word_view.php?id='.$row['id'].'">
                                <input onclick="myFunction()" style="color:white; background-color:green;" class="color-two button" type="button"
                                                        value="Next >>"/>
                                </a>';  }
                            ?>               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
    <?php include 'includes/footer.php';?>
