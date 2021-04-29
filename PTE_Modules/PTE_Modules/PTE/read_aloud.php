<?php ob_start(); ?>
<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:../login/login.php");
}else{
    include 'dbconn.php';
    $id=$_SESSION['id'];
     $sql = "SELECT * FROM user_info Where U_ID='$id'";
     
     
    $result = mysqli_query($cn, $sql);
    $row = mysqli_fetch_array($result);
    $status=$row['STATUS'];
    
    if($row['STATUS']=="NO"){
        
         header( 'Location:member.php');
    }
    
    
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
    <title>Read Aloud | Vision Overseas</title>
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
    <div class="lernen_banner bg-contact">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>Speaking</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="index.html">Speaking</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Read Aloud</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/ptemodules.php';?>
    <!-- end breadcrumb banner content area start -->
    <?php 
        include 'dbconn.php';
        $sql = "SELECT * FROM  aloud";
        $result = mysqli_query($cn, $sql) or die("Bad Query: $sql");
    ?>
    <!-- contact area start -->
    <div id="contact" class="wrap-bg wrap-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="section-title with-p">
                        <h2>Read Aloud</h2>
                  
                     <?php
                         if (isset($_GET['pageno'])) {
                         $pageno = $_GET['pageno'];
                        } else {
                              $pageno = 1;
                     }?>
       
                     <?php
                     $no_of_records_per_page =10;
                     $offset = ($pageno-1) * $no_of_records_per_page;
                    // Check connection
                    if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        die();
                    }
                    $total_pages_sql = "SELECT COUNT(*) FROM aloud";
                    $result = mysqli_query($cn,$total_pages_sql);
                    $row = mysqli_fetch_array($result);
                     $total_rows = $row[0];  
                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                    ?>
                        <div id=hide style="background-color:white; width: 0px auto; height: 0px auto;">
                    <table class="table table-hover" width="100%">
                 <tr>
            			<th>NO.</th>
            			<th>Title</th>
            	</tr>
		            <?php 
                    $sel="select * from aloud LIMIT $offset, $no_of_records_per_page";
                    $res=mysqli_query($cn,$sel);
                    $count=1;
                    while ($rows=mysqli_fetch_assoc($res)) {
                     ?>
		        	<tr align="left">
            			<td width="30px"><?php echo $count++; ?></td>
               			<td><a href="read_aloud_view.php?id=<?php echo $rows['id'];?>"><p><?php echo $rows['name'];?></p></a> </td>
	            	</tr>
	            	<?php  } ?>
            	</table>
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