<?php
    session_start();
      if (!isset($_SESSION['login'])) {
        echo "<script type='text/javascript'>location.href='login.php'</script>";
      }

      else{
        if (isset($_SESSION['username'])) {
            $username= $_SESSION['username'];
            $photo= $_SESSION['photo'];
            $email= $_SESSION['email'];
        }
      }
?>

<link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    
<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img style="width: 20%;" src="images/logos.png"/>
                            <span>Sinar Fajar Plastic</span>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="vision.php">
                                <i class="fas fa-star"></i>Vision
                            </a>
                        </li>
                        <li>
                            <a href="about.php">
                                <i class="fas fa-clipboard"></i>About
                            </a>
                        </li>
                        <li>
                            <a href="product.php">
                                <i class="fas fa-tag"></i>Product
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <i class="fas fa-users"></i>Contact
                            </a>
                        </li>
                        <li>
                            <a href="message.php">
                                <i class="fas fa-envelope"></i>Message
                            </a>
                        </li>
                        <li>
                            <a href="category.php">
                                <i class="fas fa-tasks"></i>Category Product
                            </a>
                        </li>
                        <li>
                            <a href="acount.php">
                                <i class="fas fa-male"></i>Acount
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-male"></i>Logout
                            </a>
                        </li>
                        <li>
                            <a href="footer.php">
                                <i class="fa fa-arrow-down"></i>Footer
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>