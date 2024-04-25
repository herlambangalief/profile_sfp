<?php 
  include 'connection.php';
  $id=$_GET['id'];

  $sql="SELECT * FROM about WHERE id_about=$id";
  $query=mysqli_query($connect,$sql);
  $data=mysqli_fetch_array($query);

	

  if (isset($_POST['edit'])) {

    $about=$_POST['about'];
    $info1=$_POST['information_company1'];
    $info2=$_POST['information_company2'];
    $info3=$_POST['information_company3'];
    $info4=$_POST['information_company4'];
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $number3=$_POST['number3'];
    $number4=$_POST['number4'];


      $sql_update="UPDATE `about` SET `about` = '$about', `information_company1` = '$info1', `information_company2` = '$info2', `information_company3` = '$info3', `information_company4` = '$info4', `number1` = ' $number1', `number2` = ' $number2', `number3` = ' $number3', `number4` = ' $number4' WHERE `about`.`id_about` = $id;";
      if ($sql_update) {
      	mysqli_query($connect,$sql_update);
      header("location:about.php");
      }
    }
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>Admin-- PT Sinar Fajar Plastic</title>
   <link rel="icon" href="images/logos.png" type="image/png">

	
  <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Icon fonts-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Plugin styles -->
  <!-- Main styles -->
  <link href="css/admin.css" rel="stylesheet">
  <!-- Your custom styles -->
  <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
	


  <script type="text/javascript">
	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
   </script>
</head>

<body class="fixed-nav sticky-footer">
   <!-- HEADER MOBILE-->
    <?php require 'header.php'; ?>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <?php require 'sidebar.php'; ?>
    <?php require 'header_desktop.php'; ?>
    <!-- END MENU SIDEBAR-->
  <div class=" col-md-9" style="float: right;">
    <div >
      <!-- Breadcrumbs-->
      <form action="" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="row">
				
				<div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Vision Description</label>
                <textarea required class="form-control" rows="10" name="about"><?php echo $data['about']; ?></textarea>
              </div>
            </div>
          </div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Information Company 1</label>
								<input type="text" class="form-control" required name="information_company1" placeholder="Information Company 1" value="<?php echo $data['information_company1'] ?>">
							</div>
						</div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Information Company 2</label>
                <input type="text" class="form-control" required name="information_company2" placeholder="Information Company 2" value="<?php echo $data['information_company2'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Information Company 3</label>
                <input type="text" class="form-control" required name="information_company3" placeholder="Information Company 3" value="<?php echo $data['information_company3'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Information Company 4</label>
                <input type="text" class="form-control" required name="information_company4" placeholder="Information Company 4" value="<?php echo $data['information_company4'] ?>">
              </div>
            </div>
						
					</div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Number 1</label>
                <input type="text" class="form-control" required name="number1" placeholder="Number 1" value="<?php echo $data['number1'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Number 2</label>
                <input type="text" class="form-control" required name="number2" placeholder="Number 2" value="<?php echo $data['number2'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Number 3</label>
                <input type="text" class="form-control" required name="number3" placeholder="Number 3" value="<?php echo $data['number3'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Number 4</label>
                <input type="text" class="form-control" required name="number4" placeholder="Number 4" value="<?php echo $data['number4'] ?>">
              </div>
            </div>
            
          </div>
					<!-- /row-->
				</div>
			</div>
					
		</div>
		
		<!-- /box_general-->
		<p><input type="submit" name="edit" class="btn btn-warning col-md-2" value="Edit"></p>
		</form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	<!-- Custom scripts for this page-->
	<script src="vendor/dropzone.min.js"></script>
  	<script src="vendor/nicEdit.js"></script>
  	<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  	</script>
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
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
	
</body>
</html>
