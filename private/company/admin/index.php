
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin-- PT Sinar Fajar Plastic</title>
    <link rel="icon" href="images/logos.png" type="image/png">
    <!-- Fontfaces CSS-->
    

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'header.php'; ?>
        <!-- END HEADER MOBILE-->

        <?php 
          
          if (!isset($_SESSION['login'])) {
            echo "<script type='text/javascript'>location.href='login.php'</script>";
          }
          else{
            require 'connection.php';
            $query=mysqli_query($connect,"SELECT * FROM information ORDER BY id_information DESC LIMIT 1");
            $data=mysqli_fetch_assoc($query);
            $number_p=$data['viewed'];

            $result1 = mysqli_query($connect,"SELECT * FROM message");
            $message = mysqli_num_rows($result1);

            $result2 = mysqli_query($connect,"SELECT * FROM product");
            $product = mysqli_num_rows($result2);

            $data_i = mysqli_query($connect,"SELECT * FROM image WHERE id_image=1");
            $images = mysqli_fetch_assoc($data_i);

            $data_j = mysqli_query($connect,"SELECT * FROM image WHERE id_image=2");
            $imagez = mysqli_fetch_assoc($data_j);

            $query2=mysqli_query($connect,"SELECT * FROM banner WHERE lang='eng'");
            $data2=mysqli_fetch_assoc($query2);

            $query3=mysqli_query($connect,"SELECT * FROM banner WHERE lang='ind'");
            $data3=mysqli_fetch_assoc($query3);

            $view=mysqli_query($connect,"SELECT *, COUNT(viewed) AS count FROM information GROUP BY date ORDER BY date ASC LIMIT 13");

            $date=mysqli_query($connect,"SELECT * FROM information GROUP BY date ORDER BY id_information  LIMIT 13");
          }
        ?>

        <!-- MENU SIDEBAR-->
        <?php require 'sidebar.php'; ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'header_desktop.php'; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dasboard</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $number_p; ?></h2>
                                                <span>Viewed</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $message?></h2>
                                                <span>Message</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-tags"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $product?></h2>
                                                <span>Product</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="card col-md-3">
                                 <div class="card-header">
                                     <a href="images_edit.php" style="float: right;" class="text-warning"><i class="fa fa-keyboard-o"></i>Edit</a>
                                    <strong class="card-title">Side Image</strong>
                                </div>
                                <div class="card-body">
                                    <img src="../../../images/<?php echo $imagez['image'] ?>">
                                </div>
                            </div>
                            <div class="card col-md-9">
                                 <div class="card-header">
                                     <a href="image_edit.php" style="float: right;" class="text-warning"><i class="fa fa-keyboard-o"></i>Edit</a>
                                    <strong class="card-title">Banner Image</strong>
                                </div>
                                <div class="card-body">
                                    <img src="../../../images/<?php echo $images['image'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-12">
                            <div class="card-header">
                                 <a href="banner_edit.php?id=<?php echo $data3['id_banner'] ?>" style="float: right;" class="text-warning"><i class="fa fa-keyboard-o"></i> Edit</a>
                                <strong class="card-title"><?php echo $data2['primary_text'] ?></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $data2['secondary_text']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="card col-md-12">
                            <div class="card-header">
                                 <a href="banner_edit.php?id=<?php echo $data3['id_banner'] ?>" style="float: right;" class="text-warning"><i class="fa fa-keyboard-o"></i> Edit</a>
                                <strong class="card-title"><?php echo $data3['primary_text'] ?></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $data3['secondary_text']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>View</span>
                                                </div>
                                            </div>
                                        </div>
                                        <input style="display: none;" type="" id="jumlah" name="" value="<?php while($data3=mysqli_fetch_assoc($view)){echo $data3['count'].',';}?>">
                                        <input style="display: none;" type="" id="tanggal" name="" value="<?php while($data4=mysqli_fetch_assoc($date)){echo $data4['date'].',';}?>">

                                        <div class="box_general padding_bottom">
                                            <div class="header_box version_2">
                                                <h2><i class="fa fa-bar-chart"></i> Statistic</h2>
                                            </div>
                                            <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/chart.js/Chart.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/admin-charts.js"></script>
    <script src="js/admin.js"></script>

</body>

</html>
<!-- end document-->
