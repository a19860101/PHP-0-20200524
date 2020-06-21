<?php
    $width = 400;
    $height = 400;
    $canvas = imagecreatetruecolor($width,$height);

    // var_dump($canvas);

    $blue = imagecolorallocate($canvas,0,0,255);
    $red = imagecolorallocate($canvas,255,0,0);

    imagefill($canvas,0,0,$red);
    imagestring($canvas,5,100,100,"hello",$blue);
    imageline($canvas,0,0,400,400,$blue);
    imageline($canvas,400,0,0,400,$blue);
    
    header("Content-type:image/jpeg");
    imagejpeg($canvas);