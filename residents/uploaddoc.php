<?php

	ob_start(); 
	session_start(); 
	include('../global/model.php');
	$model = new Model();
	include('department.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />

		<meta name="description" content="" />

		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="" />
		<meta name="format-detection" content="telephone=no">

		<link rel="icon" href="../assets/images/<?php echo $web_icon; ?>.png" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/<?php echo $web_icon; ?>.png" />

		<title><?php echo $web_name; ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/assets.css">
		<link rel="stylesheet" type="text/css" href="../dashboard/assets/vendors/calendar/fullcalendar.css">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/typography.css">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/shortcodes/shortcodes.css">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/dashboard.css">
	</head>
	<?php include '../assets/css/color/color-1.php';  ?>
	<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-color: #FCFCFC;">

		<?php include 'navbar.php'; ?>

		<div class="ttr-sidebar">
			<div class="ttr-sidebar-wrapper content-scroll">
				
				<?php 
			
				include 'sidebar.php';
				
				$page = 'uploaddoc';
				$secondnav = '';

				include 'nav.php'; 

				?>

				
			</div>
		</div>
		<main class="ttr-wrapper" style="background-color: #FCFCFC;">
			<div class="container-fluid">
				<div class="db-breadcrumb">
					<h4 class="breadcrumb-title">Uploading Docs</h4>
					<ul class="db-breadcrumb-list">
						<li><i class="ti-user"></i>Profiles</li>
					</ul>
				</div> 
				
				<?php include 'widget.php'; ?>

				<div class="row">
					<div class="col-lg-12 m-b30">
                    <div class="full">
                    <h3>Drop a Message</h3>
 
                    <div class="lt">
 
                    <!-- form starting  -->
                    <form action="mail-send.php" method="post" enctype='multipart/form-data'>
                            <div class='mt-2'>
                            <input type="text" class="form-control" readonly
                                    name="name" value="<?php echo $r_fname; ?> <?php echo $r_mname; ?> <?php echo $r_lname; ?>" />
                            </div>
                            <div class='mt-2'>
                            <input type="email" class="form-control"
                                    readonly
                                    name="email"
                                    value="<?php echo $r_email; ?>" />
                            </div>
                            <div class='mt-2'>
                                <input type="text" name="subject"
                                class="form-control" value="Uploading Docs for Citizen - <?php echo $r_fname; ?> <?php echo $r_mname; ?> <?php echo $r_lname; ?>" readonly>
                            </div>
                            <div class='mt-2'>
                                <textarea name="comment" id="comment"  class="form-control"
                                    cols="60" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class='mt-2'> <div class='mt-2'>
                                <label>Attachment</label><br /> <input type="file"
                                    name="attachment[]"  class="form-control" multiple="multiple">
                            </div>
                            <div class='mt-2'>
                                <input type="submit" value="Send" class="san_button" />
                            </div> 
                        </form>
                             
                       
                    </form>
                    <!-- end of form -->
                    </div>
                    </div>
					</div>
				</div>
			</div>
		</main>
		<div class="ttr-overlay"></div>

		<script src="../dashboard/assets/js/jquery.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap/js/popper.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="../dashboard/assets/vendors/magnific-popup/magnific-popup.js"></script>
		<script src="../dashboard/assets/vendors/counter/waypoints-min.js"></script>
		<script src="../dashboard/assets/vendors/counter/counterup.min.js"></script>
		<script src="../dashboard/assets/vendors/imagesloaded/imagesloaded.js"></script>
		<script src="../dashboard/assets/vendors/masonry/masonry.js"></script>
		<script src="../dashboard/assets/vendors/masonry/filter.js"></script>
		<script src="../dashboard/assets/vendors/owl-carousel/owl.carousel.js"></script>
		<script src='../dashboard/assets/vendors/scroll/scrollbar.min.js'></script>
		<script src="../dashboard/assets/js/functions.js"></script>
		<script src="../dashboard/assets/vendors/chart/chart.min.js"></script>
		<script src="../dashboard/assets/js/admin.js"></script>
		<script src='../dashboard/assets/vendors/calendar/moment.min.js'></script>   
		<script src="../dashboard/assets/js/jquery.dataTables.min.js"></script>
		<script src="../dashboard/assets/js/dataTables.bootstrap4.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').DataTable();
			});

			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
        
       
	</body>

</html>