<?php 
 require "phpmailer/PHPMailerAutoload.php";

 $to=$_POST['email'];
 
 $mail= new  PHPMailer;
 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Port=587;
 $mail->SMTPAuth=True;
 $mail->SMTPSecure='tls';
 $mail->Username="mkumar7404508129@gmail.com";
 $mail->Password="";
 $mail->setFrom("mkumar7404508129@gmail.com","htet");
 $mail->addAddress("$to");
 
 $mail->Subject="Email";
 $code=rand(1000,9999);
 $mail->Body="Your Varification code is:$code";
 

 if( false/*!$mail->send()*/)
 {
     echo "Code not send";
 }
 else{
     
    echo "Your OTP sent";
     $_SESSION['emailcode']="$code";

 }


?>
