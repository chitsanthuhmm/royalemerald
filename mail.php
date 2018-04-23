<?php



require 'mail/PHPMailerAutoload.php';

$username = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$pkname = $_POST['pkname'];

$message = $_POST['message'];




$results_messages = array();

 

$mail = new PHPMailer(true);

$mail->CharSet = 'utf-8';

ini_set('default_charset', 'UTF-8');
// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");
 

class phpmailerAppException extends phpmailerException {}

 

try {

$to = 'knaing97@gmail.com';

if(!PHPMailer::validateAddress($to)) {

  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");

}

$mail->isSMTP();

$mail->SMTPDebug  = 2;

$mail->Host       = "mx.vps48709.mylogin.co";

$mail->Port       = "2525";

$mail->SMTPSecure = "none";

$mail->SMTPAuth   = true;

$mail->Username   = "noreply@royalemeraldbagan.com";//username for server email

$mail->Password   = "internet456";

$mail->addReplyTo('knaing97@gmail.com', $_POST['name']);

$mail->setFrom("enquiry@domain.com",'Hello');

$mail->addAddress('enquiry@domain.com', $_POST['name']);

// $mail->addCC("domain@gmail.com");

$mail->Subject  = $pkname;


$body = $_POST['message'];
$mail->WordWrap = 78;

$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

try {

  $mail->send();

  //$results_messages[] = "Message has been sent using SMTP";
  header('location:enquiry.php?do=success');

}

catch (phpmailerException $e) {

  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());

}

}

catch (phpmailerAppException $e) {

  $results_messages[] = $e->errorMessage();

}

?>

