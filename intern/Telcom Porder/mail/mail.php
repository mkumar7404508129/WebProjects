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
 $mail->Password="//";
 $mail->setFrom("mkumar7404508129@gmail.com","Telcome Porder");
 $mail->addAddress("$to");
 
 $mail->Subject="Email";
 $code="$url";
 $mail->Body="
 You Register For Contest is Succefull <br>
  Your Refering Code is:<a href='$code'>$code</a>.<br>
  Thanks For taking Part in This contest ";
 

 if(false)
 {
     echo "<script>alert('!!!Wrong Email')</script>";
     unset($_POST['submit']);
     return 0;
     echo "<script>window.open('../#form','_self')";
 }
 else{
     
    echo "<script>alert('Share Code to your Friends')</script>";
    include "./include/refarance.php";
 }


?>
