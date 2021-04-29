<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.drozd.at/coursepro/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 17:20:30 GMT -->
<head>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="PTE Repeated Questions? PTE Question Bank? Answers Score 90? Premium TEMPLATES? Audio Answer? Transcript Answers. Key Tips for each question."/>
    <meta name="keywords" content="Thevisionoverseas, PTE in surat, best pte in surat, pte, pte exam date book, best pte coaching in surat, apeuni pte, pearsonpte"/>
    <meta name="author" content="Keval Pavasiya"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Highlight the Correct Summary | Vision Overseas</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- owl carousel theme default CSS file -->
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <!-- owl carousel CSS file -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="../css/slick.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="../css/jquery.fancybox.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    
    
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
    
    <!-- contact area start -->
   <div id="contact" class="wrap-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
               <?php
//include("../admin/function.php");
//session_start();

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

include 'dbconn.php';

// following files need to be included
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();


$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {

	// echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		 echo "<b>Transaction status is success</b>" . "<br/>";
		
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		 echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 		
			


			$paramList["CUST_ID"]=$_SESSION['id'];
			$u_id=$paramList["CUST_ID"];
			$status=$paramList["STATUS"];
			$orderid=$paramList["ORDERID"];
 			$txnid=$paramList["TXNID"];	
			$amount=$paramList["TXNAMOUNT"];
			$date=$paramList["TXNDATE"];
			$bank=$paramList["BANKNAME"];
    		$member_type=$_SESSION['m_type'];
    		

           
	}
	

}
else {

	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
 
            </div>
        </div>
    </div>
    
    <!-- contact area end -->
    <?php include 'includes/footer.php';?>
    
<!-- #footer area end -->
<?php ob_flush(); ?>