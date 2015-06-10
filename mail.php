<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'rockingbadass@gmail.com';
$mail->Password = '******';
$mail->SMTPSecure = 'tls';
$mail->From = 'rockingbadass@gmail.com';
$mail->FromName = 'Rekha';
$mail->addAddress('radhikatrivedi77@gmail.com', 'Rads');
$mail->addReplyTo('dsdeepsa74@gmail.com', 'deeps');
$mail->WordWrap = 70;
$mail->isHTML(true);
$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
?>