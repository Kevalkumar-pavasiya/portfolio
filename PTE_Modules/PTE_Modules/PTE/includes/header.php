<?php ob_start(); ?>
<?php 
session_start();
?>
<header id="header" class="transparent-header header-style-two">
    <!-- #navigation start -->
    <nav class="navbar navbar-default navbar-expand-md navbar-light" id="navigation" data-offset-top="1">
        <!-- .container -->
        <div class="container">
            <!-- Logo and Menu -->
            <div class="navbar-header">
                <div class="navbar-brand"><a href="../../index.php"><img src="images/logo1.png" alt="Logo"/></a></div>
                <!-- site logo -->
            </div>
            <!-- Menu Toogle -->
                <div class="burger-icon">
                    <div style="background-color:black" class="bar1"></div>
                    <div style="background-color:black" class="bar2"></div>
                    <div style="background-color:black" class="bar3"></div>
                </div>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="nav navbar-nav ml-auto" id="header-set-black">
                    <!-- Menu Link -->
                    <li class="subnav">
                        <a style="color:black" href="../../index.php">Home</a>
                    </li>
                    
                    <li class="subnav">
                        <a style="color:black" href="#">Courses</a>
                        <ul class="sub-menu">
                            <li><a style="color:black" style="black" <?php if(isset($_SESSION['username'])){ ?> href="PTE.php" <?php }else{?>href="../login/login.php" <?php } ?> class="nav-link smooth-scroll">PTE Online Education</a></li>
                            <li><a style="black" href="#" class="nav-link smooth-scroll">celpip(coming soon...)</a></li>
                        </ul>
                    </li>
                    <!--<li><a style="color:black" style="black" href="events.php">Events</a></li>-->
                    <li><a style="color:black" style="black" href="blog.php">Blog</a></li>
                    <li class="subnav">
                        <a style="color:black" style="black" href="contact.php">Contact</a>
                    </li>
                     <li class="subnav">
                        <a style="color:black" href="#">My Account</a>
                        <ul class="sub-menu">
                             <?php if(isset($_SESSION['username'])){ ?>
                             <li><a style="color:black" style="black" href="../login/profile.php" class="nav-link smooth-scroll">Profile</a></li>
                             <?php }if(!isset($_SESSION['username'])){ ?>
                            <li><a style="color:black" style="black" href="../login/login.php" class="nav-link smooth-scroll">Login</a></li>
                             <?php }else{?> 
                            <li><a style="black" href="../login/logout.php" class="nav-link smooth-scroll">LogOut</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Menu Toogle end -->
        </div>
        <!-- .container end -->
    </nav>
    <!-- #navigation end -->
</header>
<?php ob_flush(); ?>
