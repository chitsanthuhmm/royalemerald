<?php
require 'mail/PHPMailerAutoload.php';
// define variables and set to empty values
   $success = $nameErr = $emailErr = $phoneErr = $pkname = "";
   $name = $email = $phone = $message = $from = "";
    

    
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          }else{
            $name = $_POST["name"];
          }
     
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format"; 
            }else{
              $from = $email;
            }
          }
       
          if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
          } else{
            $phone = $_POST["phone"];
          }


          $message = $_POST['message'];
          $pkname = $_POST['pkname'];

            $mail = new PHPMailer(true);
            $mail->CharSet = 'utf-8';
            ini_set('default_charset', 'UTF-8');
            class phpmailerAppException extends phpmailerException {}

            try {
              $to = 'knaing97@gmail.com';
              if(!PHPMailer::validateAddress($to)) {
                throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
              }
              $mail->isSMTP();
                $mail->SMTPDebug  = 0;
                $mail->Host       = "mail.domain.com";
                $mail->Port       = "25";
                $mail->SMTPSecure = "none";
                $mail->SMTPAuth   = true;
                $mail->Username   = "noreply@royalemeraldbagan.com";//username for server email
                $mail->Password   = "internet456";
                $mail->addReplyTo('knaing97@gmail.com',$name);
                //$mail->setFrom("inquiry@humanresourceserviceagency.com",'THU KHA SU SAN');
                $mail->setFrom("noreply@royalemeraldbagan.com",'hello');
                //$mail->addAddress('inquiry@humanresourceserviceagency.com', $uname);
                $mail->addAddress('kyawminnaing.awitd@gmail.com');
                // $mail->addCC("info@asiaeztravel.com");
                $mail->Subject  = $pkname;
                $body = $message;
                $mail->WordWrap = 78;
                $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
              try {
                $mail->send();
                $success = "Your message has been sent successfully";
                header('location:enquiry.php');
              }
              catch (phpmailerException $e) {
                throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
              }
              }
              catch (phpmailerAppException $e) {
                $results_messages[] = $e->errorMessage();
              }

            // if (mail($to,$subject,$message,$headers)) {
            //  $success = "Your message has been sent successfully";
            // } else {
            //   $success = "Your message hasn't been sent";
            // }
    }

   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   ?>
