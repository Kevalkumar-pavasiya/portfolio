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
.droptarget {
  
  width: 600px; 
  height: 130px;
  margin: 5px;
  padding: 5px;
  border: 1px solid #aaaaaa;
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
                            <span class="last-item">Reorder Paragraph</span>
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
                <!--<div class="col-lg-8">-->
                    
                     <div id="table_data" >
<form>
	<table class="table   style="overflow-x:auto;">
		
	<?php 
	
if(isset($_GET['w_id'])){
$id=$_GET['w_id'];

$sel="select * from recorder where id='$id'";
$res=mysqli_query($cn,$sel);
$count=1;
$rows=mysqli_fetch_assoc($res);
 ?>
		<tr align="center" colspan="2">
		
					<td style="border: none;" colspan="2"><h4>Reorder Pragraph Qus. </h4> </td>
		</tr>
		<tr  colspan="2">
		
					<td style="border: none;" colspan="2"><h4> Qus.:-</h4><h3><?php  echo $rows['name']?></h3> </td>
		</tr>
		<tr>
		    <td>
			<div style="height:auto; width:auto; border:2px solid black;float: left; margin:30px; padding:30px;">
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget1">
                            <?php echo $rows['question1']; ?>
                        </p>
                </div>
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget2">
                            <?php echo $rows['question2']; ?>
                        </p>
                </div>
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget3">
                            <?php echo $rows['question3']; ?>
                        </p>
                </div>
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget4">
                            <?php echo $rows['question4']; ?>
                        </p>
                </div>
                </div>
            </td>
		
		
		    <td>
		        <div style="height:auto; width:auto; border:2px solid black; float: left; margin:30px; padding:30px;">
                        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                            
                        </div>
                        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                            
                        </div>
                        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                            
                        </div>
                        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                            
                        </div>
                       
                </div>
		    </td>
		</tr>
		<tr align="center" colspan="2">
			<td><button id="btn" type="submit" name="ans" value="<?php echo $rows['id']; ?>">Answer</button></td>
		</tr>
		<?php } ?>
	</table>
	</form>
</div>
                       
<div id="hide" style="display: none;" >
	<?php

		
	if(isset($_GET['ans'])){
	$id=$_GET['ans'];
		$sel="select * from recorder where id='$id'";
		$res=mysqli_query($cn,$sel);
		$rows1=mysqli_fetch_assoc($res);
		
	}

?>
<table class="table table-hover" width="100%">
		<tr>
			<td ><h4> Reorder Answer</h4> </td>
		</tr>
		<tr>
			
		<td>
		<div style="height:auto; width:auto; border:2px solid black;float: left; margin:30px; padding:30px;">
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)" ">
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget1">
                            <?php echo $rows1['question1']; ?>
                        </p>
                </div>
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"  >
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget2">
                            <?php echo $rows1['question2']; ?>
                        </p>
                </div>
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"  >
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget3">
                            <?php echo $rows1['question3']; ?>
                        </p>
                </div>
                <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"  >
                        <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget4">
                            <?php echo $rows1['question4']; ?>
                        </p>
                </div>
                </div>
            </td>		
		</tr>
		
	</table>

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
<script>
function dragStart(event) {
  event.dataTransfer.setData("Text", event.target.id);
  //document.getElementById("demo").innerHTML = "Started to drag the p element";
}

function dragEnd(event) {
  //document.getElementById("demo").innerHTML = "Finished dragging the p element.";
}

function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  event.preventDefault();
  var data = event.dataTransfer.getData("Text");
  event.target.appendChild(document.getElementById(data));
}
</script>

</html>