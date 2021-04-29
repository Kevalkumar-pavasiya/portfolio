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
    <title>Highlight Incorrect Words | Vision Overseas</title>
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
    
    <link rel="stylesheet" href="Highlightword/css/style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZMHXQ9YXJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SZMHXQ9YXJ');
    </script>
	<script src="Highlightword/js/jquery.min.js"></script>
    <script src="Highlightword/js/rangy-core.js"></script>
    <script src="Highlightword/js/rangy-cssclassapplier.js"></script>
    <script>
    var cssApplier;
    window.onload = function() {
        rangy.init();
        cssApplier = rangy.createCssClassApplier("someClass", true); // true turns on normalization
    };
    $(function() {
      $(document).mouseup(function() {
        cssApplier.toggleSelection();
      });
    });
  </script>
  
  <style>
    .someClass { background:red center 180px fixed no-repeat;color:white; }
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
                    <h1>PTE</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="index.html">Listening</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Highlight incorrect words</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->
    <?php   
        
        if (isset($_GET['id'])) {
            include 'dbconn.php';
            $id = mysqli_real_escape_string($cn, $_GET['id']);
            $sql = "SELECT * FROM Highlight_incorrect_words WHERE id='$id' ";
            $result = mysqli_query($cn, $sql) or die("Bad Query");
            $row = mysqli_fetch_array($result);
        } 
    ?>
    <!-- contact area start -->
   <div id="contact" class="wrap-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div>
                         <h4><?php echo $row['Title'] ?></h4>
                        <hr>
                        <audio controls autoplay><source src="<?php echo $row['Aud_path']; ?>"></audio>
                        <br>
                        <div>
                        <p style=" text-align: justify"><?php echo $row['W_pra'] ?></p>
                        </div>
                    </div>
                    <input onclick="myFunction()" style="color:white" class="color-two button" type="button"
                           value="Answer"/>
                           <p id="demo" style=" text-align: center"> </p>
                           <?php
	
                    		$sel="SELECT * FROM Highlight_incorrect_words WHERE id='$id'";
                    		$res=mysqli_query($cn,$sel);
                    		$rows1=mysqli_fetch_assoc($res);
                    		$words=$rows1['answer'];
                    		$no=explode(" ", $words);
                    		$wo=$rows1['W_pra'];
                    		$p=" ";
                    			   	$pragraph=explode(" ",$wo);
                    			   	for ($i=0; $i <count($pragraph); $i++) { 
                    			   		
                    			   		foreach ($no as  $value) {
                    			   		if($pragraph[$i]==$value){
                    	         		   			$pragraph[$i]=" ";
                    			   			
                    			   			$p.="<span style='background:red;'>$value</span>"; 
                    			   			
                    			   		}
                    			   		
                    			   	}
			   	$p.= $pragraph[$i]." ";
			   	}?>
               <script>
                            function myFunction() {
                            document.getElementById("demo").innerHTML = 
                            "<?php echo $p; ?>";
                            }
                        </script>
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
                                $previous= mysqli_query($cn, "SELECT * FROM Highlight_incorrect_words WHERE id<$id order by id DESC");
                                if($row = mysqli_fetch_array($previous))
                                {
                                    echo '<a href="Highlight_incorrect_words.php?id='.$row['id'].'">
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
                            $next = mysqli_query($cn, "SELECT * FROM Highlight_incorrect_words WHERE id>$id order by id ASC");
                            if($row = mysqli_fetch_array($next))
                            {

                                echo '<a href="Highlight_incorrect_words.php?id='.$row['id'].'">
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
<!-- #footer area end -->