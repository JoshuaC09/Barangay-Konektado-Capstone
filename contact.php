<?php

use PHPMailer\PHPMailer\PHPMailer;
	
include 'content/head.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="<?php echo $web_name; ?>" />
	
	<!-- OG -->
	<meta property="og:title" content="<?php echo $web_name; ?>" />
	<meta property="og:description" content="<?php echo $web_name; ?>" />
	<meta name="og:image" content="images/preview.png" align="middle"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/<?php echo $web_icon; ?>.png" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/<?php echo $web_icon; ?>.png" />
		<title><?php echo $web_name; ?></title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
</head>
<?php include 'assets/css/color/color-1.php';  ?>
<style type="text/css">
	.responsive-iframe {
	  position: absolute;
	  top: 0;
	  left: 0;
	  bottom: 0;
	  right: 0;
	  width: 100%;
	  height: 100%;
	  border: none;
	}
	.container2 {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}
</style>
<body id="bg">
<div class="page-wraper">

	<?php include 'content/navigation.php'; ?>

    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/cover.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Contact Us</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="index">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
		<div class="content-block">


			<div class="content-block">
            <!-- Your Faq -->
            <div class="section-area section-sp1">
                <div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="heading-bx left">
								<h2 class="m-b10 title-head">Contact <span> Us</span></h2>
								<h3>How can we help? Let us know</h3>
								<p>Our support got you covered on your concern or questions in mind.</p>
							</div>
								<a href="<?php echo $fb_link; ?>" style="font-size: 20px;color: black;"><i class="fa fa-facebook" style="font-size: 25px;color: #333333;"></i> &nbsp;Barangay San Vicente</a><br>
								<div style="height: 5px;"></div>

								<a href="<?php echo $fb_link; ?>" style="font-size: 20px;color: black;"><i class="fa fa-envelope" style="font-size: 20px;color: #333333;"></i> barangay.sanvicente@gmail.com</a><br>
								<div style="height: 5px;"></div>
								<?php
								
								    $contacts = $model->fetchContactNumbers();

									if (!empty($contacts)) {

								?>
								<a style="font-size: 20px; color: black;"><i class="fa fa-phone" style="font-size: 25px;color: #333333;"></i>
								<?php

										foreach ($contacts as $key => $contact) {
											reset($contacts);
                                            if ($key === key($contacts)) {
        										echo ' '.$contact['contact_num'].'<br>';
    										}

    										else {
    											echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$contact['contact_num'].'<br>';
    										}
										}

									}

								?>
								</a>
								<br>
							
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="container2">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61705.46190547505!2d120.93260085517701!3d14.84817471357217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397afb9327d239d%3A0x4fc62d771fd5c82b!2sBarangay%20Hall%20San%20Vicente%20(New)!5e0!3m2!1sen!2sph!4v1698802252601!5m2!1sen!2sph" class="responsive-iframe" loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-lg-12 col-md-12">
							<center><h2>This is the emergency hotline for Santa Maria, Bulacan</h2></center>
							<center><img src="assets/images/hotline.jpg" style="width: 60%;"></center>
						</div>
					</div>
                </div>
            </div>
            <br><br><br>
            <!-- Your Faq End -->

            <?php include 'content/footer.php' ?>

</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
