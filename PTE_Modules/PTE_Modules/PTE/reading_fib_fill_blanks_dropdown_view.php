<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:../login/login.php");
}
?>

<?php 
        include 'dbconn.php';
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
    <title>Reading - Fill In The Blanks (dropdown) | Vision Overseas</title>
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
 <script src='js/jquery-3.4.1.min.js'></script>

<script type="text/javascript">
    $(document).ready(function() {

    <?php if(isset($_GET['ans'])) { ?>
        $("#hide").fadeIn(); 
        
      <?php } ?>
     
      
    });
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
									<a href="index.html">Reading</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Fill In The Blanks (dropdown)</span>
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
                <div class="col-lg-8">
                    
                     
                       
<div id="table_data" >
<form>
<table class="table table-hover" width="100%">
		
		<?php 

if(isset($_GET['w_id'])){

$id=$_GET['w_id'];

$sel="select * from drop_down where w_id='$id' ";
$res=mysqli_query($cn,$sel);
$count=1;
$rows=mysqli_fetch_assoc($res);
 ?>
		<tr align="center">
		
					<td style="border: none;" colspan="2"><h4> Pragraph <?php echo $count++; ?></h4> </td>
		</tr>
		<tr>
			
			<?php 
				$words=$rows['words'];
				$str=$rows['no_of_word'];
				$n=$rows['option_1'];
				$a=explode(" ", $n);
				$no=explode(" ", $str);
				$p=" ";
				$cnt=count($no);
				$c=0;
			   	$pragraph=explode(" ",$words);
			   	for ($i=0; $i <count($pragraph); $i++) { 
			   		
			   		foreach ($no as  $value) {
			   		if($pragraph[$i]==$value){
			   			$pragraph[$i]=" ";
			   			$p.="<select name='id'>";
			   			  for ($k=$c; $k <= $cnt  ; $k++) { 
			   			 		for ($j=$k; $j <$cnt * 4 ; $j= $j + $cnt ) {
			   					$p.="	<option > $a[$j] </option>";
			   				  } 
			   				  break;

			   				}
			   		echo $c++;
			   					
			   			$p.="</select>";
			   			$p.="<span> </span>"; 	
			   		
			   		}
			   	}
			   	$p.= $pragraph[$i]." ";
			   	}		
			    	?><td style="text-align: justify;" colspan="2"><p ><?php echo $p; ?></p> </td>
		</tr>
		
			
		
		<tr align="center">
			<td><button onclick="myFunction()" style="color:white" class="color-two button" id="btn" type="submit" name="ans" value="<?php echo $rows['w_id']; ?>" type="button"
                           value="Answer"/>Answer</button>
			</td>
		</tr>
		
	</table>
	
                <?php } ?>
	</form>
</div>
<div id="hide" style="display: none;" >
	<?php

		
	if(isset($_GET['ans'])){
	$id=$_GET['ans'];
		$sel="select * from drop_down where w_id='$id'";
		$res=mysqli_query($cn,$sel);
		$rows1=mysqli_fetch_assoc($res);
		$words=$rows1['no_of_word'];
		$no=explode(" ", $words);
		$wo=$rows1['words'];
		$p=" ";
			   	$pragraph=explode(" ",$wo);
			   	for ($i=0; $i <count($pragraph); $i++) { 
			   		
			   		foreach ($no as  $value) {
			   		if($pragraph[$i]==$value){
			   			$pragraph[$i]=" ";
			   			
			   			$p.="<span style='background:red'>$value</span>"; 
			   			
			   		}
			   		
			   	}
			   	$p.= $pragraph[$i]." ";
			   	}
	}

?>
<table class="table table-hover" width="100%">
		<tr>
			<td ><h4> Pragraph 1</h4> </td>
		</tr>
		<tr>
			
		 <td style="text-align: justify;"> <?php echo $p;  ?></td>		
		</tr>
		
	</table>

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