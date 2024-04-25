<?php
    $lang=$_GET['lang'];

    require 'connect.php';
    $view_q=mysqli_query($connect,"SELECT * FROM information ORDER BY viewed DESC LIMIT 1");
    $view=mysqli_fetch_assoc($view_q);
    $view_t=$view['viewed'];
    $count=$view_t+=1;

    $image_b=mysqli_query($connect,"SELECT * FROM image WHERE id_image=1");
    $image_n=mysqli_fetch_assoc($image_b);

    $image_c=mysqli_query($connect,"SELECT * FROM image WHERE id_image=2");
    $image_o=mysqli_fetch_assoc($image_c);

    $date=date("Y-m-d");
    $query=mysqli_query($connect,"INSERT INTO information VALUES(NULL,'$count','$date')");

    $address_q=mysqli_query($connect,"SELECT * FROM contact WHERE id_contact=1");
    $address=mysqli_fetch_assoc($address_q);

    $phone_q=mysqli_query($connect,"SELECT * FROM contact WHERE id_contact=2");
    $phone=mysqli_fetch_assoc($phone_q);

    $website_q=mysqli_query($connect,"SELECT * FROM contact WHERE id_contact=3");
    $website=mysqli_fetch_assoc($website_q);


    if ($lang=="eng") {
      $vision_q=mysqli_query($connect,"SELECT * FROM vision WHERE lang='eng'");

      $about_q=mysqli_query($connect,"SELECT * FROM about WHERE lang='eng'");
      $about=mysqli_fetch_assoc($about_q);

      
      $product_q=mysqli_query($connect,"SELECT * FROM product WHERE lang='eng'");

      $category_q=mysqli_query($connect,"SELECT * FROM category WHERE lang='eng'");

      $contact_q=mysqli_query($connect,"SELECT * FROM contact WHERE lang='eng'");

      $banner_q=mysqli_query($connect,"SELECT * FROM banner WHERE lang='eng'");
      $banner=mysqli_fetch_assoc($banner_q);

      $footer_q=mysqli_query($connect,"SELECT * FROM banner WHERE id_banner=3");
      $footer=mysqli_fetch_assoc($footer_q);

      $service_q=mysqli_query($connect,"SELECT * FROM footer WHERE lang='eng'");
      

      $home="Home";
      $abouts="About";
      $project="Projects";
      $contact="Contact";
      $language="Indonesian";
      $link="company.php?lang=ind";
      $a="BE PART OF OUR BUSINESS";
      $b="Request A Quote";
      $c="Name";
      $d="Phone";
      $e="Message";
      $f="Request A Quote";

      $g="CONTACT";
      $h="Contact Us";
      $i="Your Name";
      $j="Your Email/Number Phone";
      $k="Subject";
      $l="Message";
      $m="Add File";
      $n="File size exceeds 2 MB";
      $o="Send Message";
      $q="Services";
      $r="Have a Questions?";
    }

    if ($lang=="ind") {
      $vision_q=mysqli_query($connect,"SELECT * FROM vision WHERE lang='ind'");

      $about_q=mysqli_query($connect,"SELECT * FROM about WHERE lang='ind'");
      $about=mysqli_fetch_assoc($about_q);

      
      $product_q=mysqli_query($connect,"SELECT * FROM product WHERE lang='ind'");

      $category_q=mysqli_query($connect,"SELECT * FROM category WHERE lang='ind'");

      $contact_q=mysqli_query($connect,"SELECT * FROM contact WHERE lang='ind'");

      $banner_q=mysqli_query($connect,"SELECT * FROM banner WHERE lang='ind'");
      $banner=mysqli_fetch_assoc($banner_q);

      $footer_q=mysqli_query($connect,"SELECT * FROM banner WHERE id_banner=4");
      $footer=mysqli_fetch_assoc($footer_q);

      $service_q=mysqli_query($connect,"SELECT * FROM footer WHERE lang='ind'");
      

      $home="Beranda";
      $abouts="Tentang";
      $project="Proyek";
      $contact="Kontak";
      $language="Inggris";
      $link="company.php?lang=eng";
      $a="JADI BAGIAN DARI BISNIS KAMI";
      $b="Penawaran";
      $c="Nama";
      $d="Ponsel";
      $e="Pesan";
      $f="Memberi Penawaran";

      $g="KONTAK";
      $h="Kontak Kami";
      $i="Nama Anda";
      $j="Email/Ponsel Anda";
      $k="Subyek";
      $l="Pesan";
      $m="Sisipkan File";
      $n="Ukuran file melebihi 2 MB";
      $o="Kirim Pesan";
      $q="Pelayanan";
      $r="Memiliki Pertanyaan ?";
    }

      


    if (isset($_POST['add'])) {

   
    $ukuran = $_FILES['filez']['size'];
    $file_tmp = $_FILES['filez']['tmp_name'];
    $gambar = $_FILES['filez']['name'];
    move_uploaded_file($file_tmp, 'images/'.$gambar);
      
      

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


      $sql_update="INSERT INTO `message` (`id_message`, `name`, `contact`, `subject`, `message`, `file`, `type_message`) VALUES (NULL, '$name', '$contact', '$subject', '$message', '$gambar', '1')";
      if ($sql_update) {
        mysqli_query($connect,$sql_update);
      header("location:index.php");
      }
    }

    if (isset($_POST['add1'])) {     
      

    $name1=$_POST['name1'];
    $contact1=$_POST['contact1'];
    $message1=$_POST['message1'];


      $sql_update1="INSERT INTO `message` (`id_message`, `name`, `contact`,`message`,`type_message`) VALUES (NULL, '$name1', '$contact1', '$message1', '2')";
      if ($sql_update1) {
        mysqli_query($connect,$sql_update1);
      header("location:index.php");
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT. Sinar Fajar Plastic</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logos.png" type="image/png">


  </head>
  <body>
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">

	      <a class="navbar-brand" href="index.php">
	      	<img style="width: 15%;" src="images/logos.png">
	      	<span>Sinar Fajar Plastic</span>
	      </a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link " data-nav-section="home"><span><?php echo $home; ?></span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="about"><span><?php echo $abouts; ?></span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="projects"><span><?php echo $project; ?></span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-nav-section="contact"><span><?php echo $contact; ?></span></a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <section class="hero-wrap js-fullheight inner" style="background-image: url('images/<?php echo $image_n['image'] ?>'); background-attachment: fixed;" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <a href="<?php echo $link ?>" class="btn btn-success col-md-3"><span><i class="fa fa-refresh"></i> <?php echo $language; ?></span></a>
          	<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
							<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
	    						<span class="ion-ios-play play mr-2"></span>
	    						<span class="watch">Watch Video</span>
    						</a> -->
						</p>

            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 0 }"><?php echo $banner['primary_text']; ?></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 0 }"><?php echo $banner['secondary_text']; ?></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">
            <?php while ($vision=mysqli_fetch_assoc($vision_q)) {?>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                  <div class="icon"><span class="flaticon-layers"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3"><?php echo $vision['title_vision']; ?></h3>
                    <p>
                        <?php echo $vision['description_vision']; ?>
                    </p>
                  </div>
                </div>      
              </div>
            <?php } ?>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-4 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url('images/<?php echo $image_o['image']; ?>');">
    					<div class="request-quote py-5">
	    					<div class="py-2">
	    						<span class="subheading"><?php echo $a; ?>s</span>
	    						<h3><?php echo $b; ?></h3>
	    					</div>
	    					<form action="" method="post" class="request-form ftco-animate">
			    				<div class="form-group">
			    					<input name="name1" type="text" class="form-control" placeholder="<?php echo $c; ?>">
			    				</div>
		    					<div class="form-group">
			    					<input  name="contact1" type="text" class="form-control" placeholder="<?php echo $d; ?>">
			    				</div>
		    					<div class="form-group">
			              <textarea name="message1" id="" cols="30" rows="2" class="form-control" placeholder="<?php echo $e; ?>"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" name="add1" value="<?php echo $f; ?>" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-8 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<?php echo $about['about']; ?>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['number1']; ?>">0</strong>
		                <span><?php echo $about['information_company1']; ?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['number2']; ?>">0</strong>
		                <span><?php echo $about['information_company2']; ?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['number3']; ?>">0</strong>
		                <span><?php echo $about['information_company3']; ?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['number4']; ?>">0</strong>
		                <span><?php echo $about['information_company4']; ?></span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="home_gallery_area p_120" data-section="projects">
        	<div class="container">
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="#">All</a></li>
                        <?php while ($category=mysqli_fetch_assoc($category_q)) {?>
                            <li data-filter=".<?php echo $category['id_category'] ?>"><a href="#"><?php echo $category['category'] ?></a></li>
                        <?php } ?>
					</ul>
        		</div>
        	</div>
        	<div class="container box_1620">
        		<div class="gallery_f_inner row imageGallery1">
        			<?php while ($product=mysqli_fetch_assoc($product_q)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 <?php echo $product['id_category']; ?>">
                            <div class="h_gallery_item">
                                <img src="images/<?php echo $product['image_product']; ?>" alt="">
                                <div class="hover">
                                    <h4><?php echo $product['name_product']; ?></h4>
                                    <a class="light" href="images/<?php echo $product['image_product']; ?>"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
        		</div>
        	</div>
        </section>


    

    <section class="ftco-section contact-section ftco-no-pb" data-section="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading"><?php echo $g; ?></span>
            <h2 class="mb-4"><?php echo $h; ?></h2>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="" method="post" class="bg-light p-5 contact-form" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="<?php echo $i; ?>">
              </div>
              <div class="form-group">
                <input type="text" name="contact" class="form-control" placeholder="<?php echo $j; ?>">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="<?php echo $k; ?>">
              </div>
              <div class="form-group">
                <textarea id="" name="message" cols="30" rows="7" class="form-control" placeholder="<?php echo $l; ?>"></textarea>
              </div>
              <div class="form-group">
                <div class="form-control row">
                	<div onclick="upload()"  class="btn btn-primary"><?php echo $m; ?></div>
                	<span id="filenames"></span>
                	<input type="file" name="filez" id="uploader" onchange="addname(this)">
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="add" value="<?php echo $o; ?>" class="btn btn-secondary py-3 px-5">
              </div>
            </form>
          
          </div>

        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
            <?php while ($contact=mysqli_fetch_assoc($contact_q)) {?>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4"><?php echo $contact['type_contact']; ?></h3>
                        <p class="text-dark"><?php echo $contact['contact']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sinar Fajar Plastic</h2>
              <p><?php echo $footer['primary_text']; ?></p>            </div>
          </div>
          <div class="">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2"><?php echo $q; ?></h2>
              <ul class="list-unstyled">
              	<?php while ($service=mysqli_fetch_assoc($service_q)) {?>
                  <li><span class="icon-long-arrow-right mr-2"></span><?php echo $service['services']; ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="color: #000;">.</h2>
              <ul class="list-unstyled">
                
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2"><?php echo $r; ?></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $address['contact']; ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $phone['contact']; ?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $website['contact']; ?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://sinarfajarplastic.com" target="_blank">PT.Sinar Fajar Plastic</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>


  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  <script type="text/javascript">
  	function upload() {
  		document.getElementById('uploader').click();
  	}
  	function addname(val){
  			var FileSize = val.files[0].size / 1024 / 1024;
	        if (FileSize > 2) {
	            document.getElementById("filenames").innerHTML="<b style='color:#f00;'><?php echo $n ?></b>";
	        }
	        else{

		  	var fullPath = document.getElementById('uploader').value;
		  		if (fullPath) {
		    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
		    var filename = fullPath.substring(startIndex);
		    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
		        filename = filename.substring(1);
		    }
		    document.getElementById("filenames").innerHTML=filename;
		    }
		}
	}
  	
  	
  </script>
  </body>
</html>