
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
    <title>Blog | Vision Overseas</title>
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
     <style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color:#4CAF50;
  border-radius: 5px;
}
</style>


</head>
<body>
<!-- header area start -->
<?php include 'includes/header.php';?>
<!-- end header area -->
<main>
    <!-- breadcrumb banner content area start -->
    <div class="lernen_banner bg-blog">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>Blog</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="index.html">Homepage</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->

    <!-- blog area start -->
    <div id="blog" class="wrap-bg wrap-bg-dark bg-bottom-zero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="section-title with-p">
                        <span>Blog Article</span>
                        <h2>Our Latest Blog Article</h2>
                        <p>Check out our latest blog posts, news and articles. We have articles on a range of topics
                            such as the leaving certificate and career guidance.
                        </p>
                    </div>
                </div>
            </div>
 <?php

    include 'dbconn.php';
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }?>
       
         <?php
         $no_of_records_per_page =3;
        $offset = ($pageno-1) * $no_of_records_per_page;

        
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
       
        $total_pages_sql = "SELECT COUNT(*) FROM blog";
        
        $result = mysqli_query($cn,$total_pages_sql);
        $row = mysqli_fetch_array($result);
         $total_rows = $row[0];  
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        ?>
            <!-- .row -->
            
            
            <div class="row">
                
                    <!-- 1 -->
                    <?php
                                                    
                 include 'dbconn.php';      
                 $sel1="select * from blog ORDER BY B_DATE DESC LIMIT $offset, $no_of_records_per_page";
                 $result1=mysqli_query($cn,$sel1);
                 while ($row1=mysqli_fetch_assoc($result1)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 blog-single">
                    <div class="themeioan_blog">
                        <article><!-- single blog articles -->
                            <div class="blog-photo">
                                 <a href="blog-detail.php?bid=<?php echo $row1['B_ID']; ?>"><img src="<?php echo $row1['B_IAMGE'] ?>" alt="blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="course-viewer">
                                    <ul>
                                         <li><i class="fas fa-user"></i><?php echo $row1['B_NAME'] ?></li>
                                        <li><i class="fas fa-user"></i><?php echo $row1['B_DATE'] ?></li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-detail.php?bid=<?php echo $row1['B_ID']; ?>"><?php  echo $row1['B_TITLE']?></a>
                                </h5>
                                <a href="blog-detail.php?bid=<?php echo $row1['B_ID']; ?>" class="readmore">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article><!-- end single blog articles -->
                    </div>
                      
                </div>
                <?php } ?>
                      
            </div>
            <nav>
                                     <div class="pagination" style="margin: 0px auto; padding: 0px auto; " >
                                      <a  href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">&laquo;</a>
                                      <?php for ($i=1; $i <=$total_pages ; $i++) {  ?>
                                      <a href="?pageno=<?php echo $i; ?>"><?php echo $i ?></a></li>
                                          <?php } ?></a>
                                      <a href="?pageno=<?php echo $total_pages; ?>" >&raquo;</a>
                                    </div>
                                    </nav>

        
    </div>
</div>
    <!-- blog area end -->

</main>

<!-- #footer area start -->
<?php include 'includes/footer.php';?>
<!-- #footer area end -->
