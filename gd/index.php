<?php
    $width = 600;
    $height = 400;
    $canvas = imagecreatetruecolor($width,$height);

    // var_dump($canvas);

    $blue = imagecolorallocate($canvas,0,0,255);
    $red = imagecolorallocate($canvas,255,0,0);

    imagefill($canvas,0,0,$red);
    header("Content-type:image/jpeg");
    imagejpeg($canvas);