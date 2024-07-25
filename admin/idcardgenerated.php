<?php
	session_start();
	include('../global/model.php');
	$model = new Model();
	include('department.php');
    
	$id = isset($_GET['id']) ? $_GET['id'] : '';
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
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto');

                * {
                box-sizing: border-box;
                }

                /* Base Style */
                body {
                max-width: 800px;
                margin: auto;

                font-family: 'Roboto', sans-serif;

                line-height: 1.1rem;
                }

                /* Utility Classes */
                .wrapper {
                padding: 10px;
                }
                .crimson {
                color: crimson;
                }
                .bold {
                font-weight: bold;
                }
                .container {
                text-align: center;
                }
                .card {
                padding: 10px 10px 0 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                position: relative;
                border-radius: 10px;
                }
                .disclaimer {
                font-size: 12px !important;
                }
                a {
                text-decoration: none;
                color: crimson;
                }
                .btn {
                display: inline-block;
                text-decoration: none;
                color: #fff;
                background-color: #0277bd;
                border: none;
                padding: 8px 16px;
                border-radius: 3.2px;
                cursor: pointer;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }
                .btn:hover {
                background-color: #01579b;
                }
                .center {
                text-align: center;
                }
                .sky {
                color: #0077b5;
                }

                /* Section: Form */
                form {
                margin-top: 10px;
                }
                form .btn {
                margin-bottom: 10px;
                }
                .form-group {
                margin-bottom: 10px;
                display: flex;
                justify-content: space-between;
                }
                .form-group input {
                width: 80%;
                }

                /* ID Card */
                #id-card {
                margin-top: 20px;
                }
                #id-card p {
                margin: 5px;
                }
                #id-card .lead {
                font-size: 1.1rem;
                }
                #id-card .details {
                font-weight: bold;
                }
                #id-card .logo {
                position: absolute;
                left: 6px;
                }
                #id-card .logo2 {
                position: absolute;
                right: 6px;
                }
                #id-card .stamp {
                position: absolute;
                width: 120px;
                top: 160px;
                left: 200px;
                z-index: -1 !important;
                }
                #id-card .mugshot {
                width: 200px;
                }
                #id-card .box {
                display: flex;
                justify-content: flex-end;
                margin-top: 40px;
                }
                #id-card .details {
                flex-grow: 2;
                }
                footer {
                text-align: center;
                font-size: 0.7rem;
                }
                footer p {
                /* margin-top: 20px; */
                color: black;
                }


                /* Section: Read Me */



                /* Section: Contact */
                #contact h3 {
                margin-top: 15px;
                }
                #contact i {
                margin-right: 16px;
                cursor: pointer;
                font-size: 1.3rem;
                color: #333333;
                }
                #contact .icons {
                margin-top: 10px;
                text-align: center;
                }
                #contact .download {
                margin-left: 16px;
                }
                #contact .fa-facebook:hover {
                color: #3b5998;
                }
                #contact .fa-linkedin:hover {
                color: #0077b5;
                }
                #contact .fa-twitter:hover {
                color: #55acee;
                }
                #contact .fa-whatsapp:hover {
                color: #1e836c;
                }
                #contact .fa-github:hover {
                color: #333333;
                }
                #contact .fa-instagram:hover {
                color: #833ab4;
                }
                #contact .fa-weixin:hover {
                color: #2baf1d;
                }

                /*Footer */
                .main-footer p {
                color: black;
                font-size: 0.8rem;
                }
                .main-footer a:hover {
                color: #2baf1d;
                }
                .center {
                    text-align: center;
                    border: 3px solid green;
                    }
                /* Media Queries */
                @media (max-width: 767px) {
                /* Base Styling */
                body {
                    min-width: 390px;
                    height: 100vh;
                }
                p {
                    font-size: 13px !important;
                }

                /* Utility Classes */
                .disclaimer {
                    font-size: 13px !important;
                }

                /* ID Card */
                .logo {
                    width: 120px;
                    left: 15px;
                }
                .logo2 {
                    width: 120px;
                    right: 15px;
                }
                .chip {
                    width: 80px;
                    height: 90px;
                }
                #id-card .stamp {
                    top: 150px;
                    left: 120px;
                    /* z-index: 1; */
                }
                #id-card .box {
                /* margin-top: 10px; */
                }

                /* Footer */
                footer p {
                    font-size: 10px !important;
                }

                /* Section: Contact */
                #contact .icons {
                    text-align: center;
                }
                #contact .social-media i {
                    font-size: 1.2rem;
                }
                
                }

        </style>
	</head>
	<?php include '../assets/css/color/color-1.php'; 
    
                $rows = $model->displayResidentsProfile($id);
				if (!empty($rows)) {
					foreach ($rows as $row) {
						$id = $row['id'];
						$id_number = $row['id_number'];
						$first_name = $row['fname'];
						$middle_name = $row['mname'];
						$last_name = $row['lname'];
						$email = $row['email'];
						$contact = $row['contact_number'];
						$address = $row['address'];
						$address2 = $row['address2'];
						$address3 = $row['address3'];
						$date_added = $row['date_registered'];
						$bplace = $row['birth_place'];
						$resident_status = $row['resident_status'];
						$fourps = $row['fourps'];
						$occupation = $row['occupation'];
						$ext = $row['ext'];
						$civil_status = $row['civil_status'];
						$bd = date('M. d, Y', strtotime($row['birth_date']));
						$bdt = date('Y', strtotime($row['birth_date']));
						$dttt = date("Y");
						$age = $dttt - $bdt;
						$gender = $row['gender'];
						$status = $row['status'];
						$resident_since = $row['resident_since'];
														$photo = $row['photo'];
														if ($photo == '') {
															$photo = 'default';
    													}
    													else {
    														$photo = $row['photo'];
    													}
					}
    
    ?>
				<div class="row">
                    <body>
                        <div class="wrapper">

                        <section id="id-wrapper">
                            <div id="id-card" class="card">
                            <div >
                            <img class="logo" src="../assets/images/icon3.png" width="120" /> 
                            <img class="logo2" src="../assets/images/icon2.jpg" width="120" style="float:right;" />
                            <div class="container">
                                <p class="lead bold">MUNICIPALITY OF SANTA MARIA, BULACAN</p>

                                <p class="crimson">BARANGAY SAN VICENTE</p>

                                <p class="bold">IDENTITY CARD</p>
                            </div>
                            </div>
                           

                            <div class="box">
                                <img width="150" height="150" class="chip" alt="" />

                                <div class="details">
                                <p>
                                    Name: <span class="mg-left"><?php echo strtoupper($first_name); ?> <?php echo strtoupper($middle_name); ?> <?php echo strtoupper($last_name); ?> <?php echo strtoupper($ext); ?></span>
                                </p>
                                <p>Address: <span id="id-position"><?php echo $address3; ?></span></p>
                                <p>Contact: <span id="id-branch"><?php echo $contact; ?></span></p>
                                <p>Occupation: <span id="id-branch"><?php echo $occupation; ?></span></p>
                                <p>ID No: <span id="id-no"><?php echo $id_number; ?></span></p>
                                </div>
                                <div class="mugshot">
                                <img
                                    id="id-card-mugshot"
                                    width="150"
                                    height="150"
                                    src="../assets/images/profile-pictures/<?php echo $photo; ?>.jpg"
                                    alt="id-image"
                                />
                                </div>
                            </div>

                        
                    
                            <footer>
                                <p class="sky">OBTAINABLE FROM BMS-BRGYSV</p>
                            </footer>
                            </div>
                        </section>

                        <section id="readme">
                            <p class="disclaimer">
                            <b>DISCLAIMER:</b> By providing your personal data, you agree that any document/report you voluntary uploaded will be part of the <b>e-Barangay: A Web-based Barangay Office Management System for San Vicente, Santa Maria, Bulacan</b>. The e-Barangay, under the Data Privacy Act, with your consent, shall use all information provided in this portal for validation to your document/report requests.						
                            </p>
                        </section>
                        </div>
                    </body>
		<div class="ttr-overlay"></div>
		<script src="../dashboard/assets/js/style.js"></script>
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
	</body>
<?php
}
?>
</html>