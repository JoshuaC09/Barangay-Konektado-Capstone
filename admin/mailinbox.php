<?php
	ob_start(); 
	session_start(); 
	include('../global/model.php');
	$model = new Model();
	include('department.php');

	if (empty($_SESSION['sess'])) {
		echo "<script>window.open('../','_self');</script>";
	}
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
        <script> 
        function getEmails() { 
            document.getElementById('dataDivID').style.display = "block"; 
            } 
        </script> 
		<style type="text/css">
			.btn.dropdown-toggle.btn-default:hover {
				color: #000!important;
			}

			.btn.dropdown-toggle.btn-default:focus {
				color: #000!important;
			}
			.widget-card .icon {
				position: absolute;
				top: auto;
				bottom: -20px;
				right: 5px;
				z-index: 0;
				font-size: 65px;
				color: rgba(0, 0, 0, 0.15);
			}
			tbody tr:hover {
				background-color: #d4d4d4;
			}
		</style>
	</head>
	<?php include '../assets/css/color/color-1.php';  ?>
	<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-color: #FCFCFC;">

		<?php include 'navbar.php'; ?>

		<div class="ttr-sidebar">
			<div class="ttr-sidebar-wrapper content-scroll">
				
				<?php 
			
				include 'sidebar.php';
				
				$page = 'mailinbox';
				$secondnav = '';

				include 'nav.php'; 

				?>
				
			</div>
		</div>
		<main class="ttr-wrapper" style="background-color: #FCFCFC;">
			<div class="container-fluid">
				<div class="db-breadcrumb">
					<h4 class="breadcrumb-title">Mail Inbox Management</h4>
					<ul class="db-breadcrumb-list">
						<li><i class="ti-harddrives"></i>Feedback,Survey,Uploaded Documents</li>
					</ul>
				</div>  
				
				<?php include 'widget.php'; ?>

				<div class="row">
					<div class="col-lg-12 m-b30">
					<h2>List Emails from Gmail using PHP and IMAP</h2> 
  
    <div id="btnContainer"> 
        <button class="btn active" onclick="getEmails()"> 
            <i class="fa fa-bars"></i>Click to get gmail mails 
        </button> 
        <a href=""></a>
    </div> 
    <br> 
      
    <div id="dataDivID" class="form-container" style="display:none;"> 
        <?php
            /* gmail connection,with port number 993 */ 
            $host = '{imap.gmail.com:993/imap/ssl}INBOX'; 
            /* Your gmail credentials */ 
            $user = 'elyaquino53@gmail.com'; 
            $password = 'xhouetqkfrgmdtmd'; 
  
            /* Establish a IMAP connection */ 
            $conn = imap_open($host, $user, $password)  
                 or die('unable to connect Gmail: ' . imap_last_error()); 
  
            /* Search emails from gmail inbox*/ 
            $mails = imap_search($conn, 'SUBJECT "Barangay"'); 
  
            /* loop through each email id mails are available. */ 
            if ($mails) { 
  
                /* Mail output variable starts*/ 
                $mailOutput = ''; 
                $mailOutput.= '<table><tr><th>Subject </th>  
                           <th> Date Time </th> <th> Content </th></tr>'; 
  
                /* rsort is used to display the latest emails on top */ 
                rsort($mails); 
  
                /* For each email */ 
                foreach ($mails as $email_number) { 
  
                    /* Retrieve specific email information*/ 
                    $headers = imap_fetch_overview($conn, $email_number, 0); 
  
                    /*  Returns a particular section of the body*/ 
                    $message = imap_fetchbody($conn, $email_number, '1'); 
                    $subMessage = substr($message, 0, 150); 
                    $finalMessage = trim(quoted_printable_decode($subMessage)); 
  
                    $mailOutput.= '<div class="row">'; 
  
                    /* Gmail MAILS header information */                    
                    $mailOutput.= '<td><span class="columnClass">' . 
                                $headers[0]->subject . '</span></td> '; 
                    $mailOutput.= '<td><span class="columnClass">' . 
                                 $headers[0]->date . '</span></td>'; 
                    $mailOutput.= '</div>'; 
  
                    /* Mail body is returned */ 
                    $mailOutput.= '<td><span class="column">' .  
                    $finalMessage . '</span></td></tr></div>'; 
                }// End foreach 
                $mailOutput.= '</table>'; 
                echo $mailOutput; 
            }//endif  
  
            /* imap connection is closed */ 
            imap_close($conn); 
            ?> 
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
            
		</script>
	</body>

</html>