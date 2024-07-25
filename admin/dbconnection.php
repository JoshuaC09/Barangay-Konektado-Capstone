<?php
// define('DB_SERVER','185.27.133.5');
// define('DB_USER','baranga2_kyle');
// define('DB_PASS' ,'baranga2_kyle');
// define('DB_NAME', 'baranga2_db_user');
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'brgy_salvacion');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }


?>

