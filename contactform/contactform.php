<?php
require("class.phpmailer.php");
  
  $name= trim($_POST['name']);
  $from=trim($_POST['email']);
  $subject=trim($_POST['subject']);
  $phone= trim($_POST['phone']);
  $message=$_POST['message'];
  $to="info@wainssolutions.com";
  $mail = new PHPMailer;
  $mail->From= $from;
  $mail->FromName=$name;
  $mail->addAddress($to);
 // $mail->setFrom = $from;
  $mail->Sender= $name;
  $subj= "WS-Contact :".$subject;
  $mail->Subject = $subj;
  $mail->Body = $message."\nPhone:".$phone;
  //echo "<pre>";
  //print_r($mail);
  //echo "</pre>";
  //exit("<br><b>...Email Ends...</b>");
    if(!$mail->send())
  {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }else
  {
    echo "OK";
  }
?>