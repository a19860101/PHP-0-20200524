<?php
    $img = "images/001.jpg";
    $canvas = imagecreatefromjpeg($img);

    $canvas_w = imagesx($canvas);
    $canvas_h = imagesy($canvas);

    echo $canvas_w,$canvas_h;

    $new_w = $canvas_w / 2;
    $new_h = $canvas_h / 2;

    $new_canvas = imagecreatetruecolor($new_w,$new_h);
    imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);

    imagejpeg($new_canvas,"test.jpg");