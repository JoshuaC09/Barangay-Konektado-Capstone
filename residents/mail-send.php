<?php
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
$mail = new PHPMailer\PHPMailer\PHPMailer();


$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$comment= $_POST['comment'];

$mail->Mailer = "mail";
$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;
$mail->Username = "elyaquino53@gmail.com";
$mail->Password = "xhouetqkfrgmdtmd";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("$email");
$mail->AddReplyTo($email, $email);
$mail->addAddress("elyaquino53@gmail.com", 'Barangay San Vicente, Sta Maria, Bulacan');
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$message='';
$message.="Name  : ".$_POST['name']." <br/>";
//$message='';
$message.="Email  : ".$_POST['email']." <br/>";
$message.="Subject  : ".$_POST['subject']." <br/>";
$message.="Email  : ".$_POST['comment']." <br/>";
$mail->MsgHTML($message);

foreach ($_FILES["attachment"]["name"] as $k => $v) {
    $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
}

$mail->IsHTML(true);
if(!$mail->Send()) {
    echo "<script>alert('Problem in Sending Mail!');window.open('uploaddoc', '_self')</script>";
} else {
    echo "<script>alert('Resident sent a Upload a Document. Message sent to email!');window.open('uploaddoc', '_self')</script>";
} 
?>