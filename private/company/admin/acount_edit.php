<?php 
  include 'connection.php';
  $id=$_GET['id'];

  $sql="SELECT * FROM admin WHERE id_admin=$id";
  $query=mysqli_query($connect,$sql);
  $data=mysqli_fetch_array($query);
	


  if (isset($_POST['edit'])) {

    if ($gambar = $_FILES['filez']['name']=="") {
        $gambar=$data['photo'];
      }
      else{
        $ukuran = $_FILES['filez']['size'];
      $file_tmp = $_FILES['filez']['tmp_name'];
      $gambar = $_FILES['filez']['name'];
      move_uploaded_file($file_tmp, '../../../images/'.$gambar);
      }
      

    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];


      $sql_update="UPDATE `admin` SET `username` = '$username',`password` = '$password',`email` = '$email', `photo` = '$gambar' WHERE `admin`.`id_admin` = $id";
      if ($sql_update) {
      	mysqli_query($connect,$sql_update);
      header("location:acount.php");
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
          <div class="col-md-6">
            <div class="form-group">
            <label>Product Image</label>
              <input type="file" name="filez" class="col-md-12" onchange="readURL(this);" />
              <br><br><br>
              <center>
                <img  style="height: 200px;" id="blah" src="../../../images/<?php echo $data['photo'] ?>" alt="your image" />
              </center>
              </div>
          </div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" required name="username" placeholder="Product Name" value="<?php echo $data['username'] ?>">
							</div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" required name="password" placeholder="Product Name" value="<?php echo $data['password'] ?>">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required name="email" placeholder="Product Name" value="<?php echo $data['email'] ?>">
              </div>
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