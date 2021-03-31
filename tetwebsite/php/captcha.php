<?php
    session_start();
    $num=rand(1000,9999);
    $num="$num";
    $_SESSION["captcha"]=$num;
    $image=imagecreate(200,60);
    imagecolorallocate($image,100,20,50);
    $text_color = imagecolorallocate($image, 0, 0, 0); // set captcha text color
    imagettftext($image, 30, 10, 30, 50, $text_color,"./RobotoCondensed-Light.ttf", $num);
    header("Content-type: image/jpeg");
    imagejpeg($image);
    imagedestroy($image);
    
?>