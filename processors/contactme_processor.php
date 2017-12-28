<?php
//THIS PAGE IS TO BE ACCESSED BY AJAX REQUEST
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
include('../mail/PHPMailerAutoload.php');
if ($_POST['email'] == "" || $_POST['name'] == "" || $_POST['subject'] == "" || $_POST['message'] == "") {
	echo 'ERROR';
	exit;
}
//Captcha verification
$secret="xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$response=$_POST["captcha"];
$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
  //This user was not verified by recaptcha.
	echo "ERRORCAPTCHA";
	exit;
}
//All is good, continue to email process
$mail = new PHPMailer;
 // $mail->SMTPDebug = 4;   
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$mail = new PHPMailer;
		$mail->setFrom('infomation@nicolasjmendez.com', 'xxxxxxxxxx');
		$mail->addAddress('xxxxxxxxxx', 'xxxxxxxxx');
		$mail->Subject  = $_POST['subject'];
		$mail->Body     = $_POST['message']."\n\n-email: ".$_POST['email'];
		if(!$mail->send()) {
		  echo 'ERROR';
		  // echo 'Mailer error: ' . $mail->ErrorInfo;
		  exit;
		} else {
		  echo '200OK';
		}
	}
?>