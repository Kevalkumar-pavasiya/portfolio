<?php 
        $GLOBALS['data1'] = "0";
        if(isset($_POST['submit'])){
        if(isset($_FILES['file']['name'])){
        $tmp_path=$_FILES['file']['tmp_name'];
        $our_path="../upload/image/profile/".$_FILES['file']['name'];
        move_uploaded_file($tmp_path , $our_path);
        $data1=$our_path;
      }
    }
?>
<?php 
include '../PTE/dbconn.php';
session_start();
if(isset($_POST['submit'])){
    $filepath=$_POST['filepath'];
    if($data1=="0" or $data1=="../upload/image/profile/"){
        $data1=$filepath;
    }
    $id=$_SESSION['id'];
    echo $id;
    
    $name=$_POST['username'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $town=$_POST['town'];
    $pincode=$_POST['pincode'];
    $data = " update user_info set 
    U_NAME='$name',
    U_MOBILE='$mobile',
    U_EMAIL='$email',
    U_DOB='$dob',
    U_IMAGE='$data1',
    STATE_ID='$state',
    CITY_ID='$city',
    U_TOWN='$town',
    U_PINCODE='$pincode',
    U_GENDER='$gender'
    where U_ID='$id'";
   
  mysqli_query($cn,$data);
    // header("location:profile.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta name="google-site-verification" content="kYAVEKQIaOK-KolYCV6CEHJfQIA-Nk4_T65BfU49IjM" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZMHXQ9YXJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SZMHXQ9YXJ');
    </script>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="PTE Repeated Questions? PTE Question Bank? Answers Score 90? Premium TEMPLATES? Audio Answer? Transcript Answers. Key Tips for each question."/>
    <meta name="keywords" content="Thevisionoverseas, PTE in surat, best pte in surat, pte, pte exam date book, best pte coaching in surat, apeuni pte, pearsonpte"/>
    <meta name="author" content="Keval Pavasiya"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Profile</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../PTE/image/favicon.png" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../PTE/css/bootstrap.min.css">
    <!-- owl carousel theme default CSS file -->
    <link rel="stylesheet" href="../PTE/css/owl.theme.default.min.css">
    <!-- owl carousel CSS file -->
    <link rel="stylesheet" href="../PTE/css/owl.carousel.min.css">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="../PTE/css/main.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="../PTE/css/slick.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="../PTE/css/fontawesome.min.css">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="../PTE/css/jquery.fancybox.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../PTE/css/magnific-popup.css">
    <link rel="stylesheet" href="js/typicons.css">
  <link rel="stylesheet" href="js/vendor.bundle.base.css">
  <link rel="stylesheet" href="js/style1.css">
 
<link rel="stylesheet" href="js/style.css">
 
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
                    <h1>Profile</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="index.html">My Account</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->
    <!-- contact area start -->
   <div id="contact" class="wrap-bg">
        
      <!-- main contain start -->
                
             <div  >
                  <div class="row">
                       <div class="col-12 grid-margin">
                          <div class="card">
                               <div class="card-body">
                  
                  <form class="form-sample" method="post" enctype="multipart/form-data" >
                    <?php 
                        $id=$_SESSION['id'];
                        $sel="select * from user_info where U_ID=$id";
                        $result=mysqli_query($cn,$sel);
                      $row=mysqli_fetch_assoc($result); 
                    ?>
                        <div class="row">
                      <div class="col-md-6">
                          <p class="card-description">
                             Personal info
                            </p>
                      </div>
                      
                      </div>  

                    <div class="row" >
                        <div class="col-md-12" > 
                          <div class="form-group row" >
                            <div style="margin: 0px auto; padding: 0px auto;">
                          <img src="<?php  echo $row['U_IMAGE'];  ?>" width="200px" height="190px"><br>
                          <input type="file" name="file" style="margin-top:50px;">
                          <input type="hidden" name="filepath" value= "<?php echo $row['U_IMAGE'];  ?>" >
                          </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value= "<?php  echo $row['U_NAME'];  ?>" name="username" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email ID</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value= "<?php  echo $row['U_EMAIL'];  ?>" name="email" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value= "<?php  echo $row['U_MOBILE'];  ?>" name="mobile"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-4">
                            <div >
                              <label >
                                <input type="radio" name="gender"  value="female" <?php if($row['U_GENDER']=="female"){ ?> Checked <?php } ?> >
                                Female
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div >
                              <label >
                                <input type="radio"  name="gender"  value="male" <?php if($row['U_GENDER']=="male"){ ?> Checked <?php } ?> >
                                Male
                              </label>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="date" placeholder="dd/mm/yyyy" value= "<?php  echo $row['U_DOB'];  ?>" name="dob"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">House No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value= "<?php  echo $row['U_TOWN'];  ?>" name="town" />
                          </div>
                        </div>
                      </div>                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Area,Colony</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value= "<?php  echo $row['U_TOWN'];  ?>"  name="town1"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <select class="form-control txt_state" name="txt_state">                                   
                               <option>Select State</option>
                                <?php
                                  
                                  $sql="select *from state";
                                  $res=mysqli_query($cn,$sql);
                                  while($row1=mysqli_fetch_assoc($res)){ ?>

                                    <option value="<?php echo $row1['STATE_ID'] ?>" 
                                      <?php if ($row['STATE_ID']!=' ') {
                                          if($row['STATE_ID']==$row1['STATE_ID'])
                                            
                                          { ?>
                                            selected
                                          <?php }
                                        } 
                                        ?>>
                                        <?php echo $row1['STATE_NAME']; 
                                      ?>
                                        
                                      </option>

                                  <?php }

                                 ?>  
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">

                            <select class="form-control txt_city" name="city" >
                                                                   
                                 <option>Select City</option>
                                  <?php
                                    
                                    $sql="select *from city";
                                    $res=mysqli_query($cn,$sql);
                                    while($row1=mysqli_fetch_assoc($res)){ ?>

                                      <option id="option_val" value="<?php echo $row1['CITY_ID'] ?>" 
                                        <?php if ($row['CITY_ID']!=' ') {
                                            if($row['CITY_ID']==$row1['CITY_ID'])
                                              
                                            { ?>
                                              selected
                                            <?php }
                                          } 
                                          ?>>
                                          <?php echo $row1['CITY_NAME']; 
                                        ?>
                                          
                                        </option>

                                    <?php }

                                   ?>  
                            </select>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pincode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value= "<?php  echo $row['U_PINCODE'];  ?>" name="pincode"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-warning mr-2" name="submit">Submit</button>
                    <button class="btn btn-light" id="Cancel">Cancel</button>
                  </form>
                  
                </div>
        </div>
      <!-- main contain end -->
   
   
        
    <!-- contact area end -->
    <?php include 'includes/footer.php';?>
<!-- #footer area end -->