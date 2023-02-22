<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sending email</title>
	   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<?php
error_reporting(0);
include '../includes/Connection.php';
require '../includes/PHPMailer.php';
require '../includes/Exception.php';
require '../includes/SMTP.php';
require '../Scripts/Functions.php';
?>

<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['ressubmit'])){
	$resemail = mysqli_real_escape_string($conn,$_POST['forgotpass']);
	// echo $resemail;
	if(!userExist($conn,$resemail)){
		header("location: ../forgot-password.php?error=emailnotexist");
	}
	else{

		$mail = new PHPMailer(true);

		try {
			// $mail->SMTPDebug = 2;									
			$mail->isSMTP();	
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
				);										
			$mail->Host	 = 'smtp.gmail.com';					
			$mail->SMTPAuth = true;							
			$mail->Username = 'rightwingfelix@gmail.com';				
			$mail->Password = 'C025-01-1254/2019';						
			$mail->SMTPSecure = 'tls';							
			$mail->Port	 = "587";
		
			$mail->setFrom('rightwingfelix@gmail.com','Referrals System');		
			$mail->addAddress("$resemail");
			// $mail->addAddress('receiver2@gfg.com', 'Name');
			
			$mail->isHTML(true);								
			$mail->Subject = 'RightWing password Reset';
			$mail->Body = "<div class='container'>
			<h1>Password reset Request</h1><br>
			<h3>Hello $resemail.</h3><br>
			RightWing platform is Amazing platform which helps you earn through referrals
			and getting give aways in bulk... please take your time to refer your friends
			for smooth earning through technology..
			You are almost there to change you password
			follow this link to reset password
			<a href='http://www.titansoscillators.co.ke/reset.php'><br>
			<button class='btn-primary'>Password reset</button>
			</a></div>";
			$mail->AltBody = 'Body in plain text for non-HTML mail clients.</a>';
			$mail->send();
			header("location: ../forgot-password.php?error=success");
		} catch (Exception $e) {
			header("location: ../forgot-password.php?error=failed");;
		}
		
	}
}
?>

</body>
</html>
