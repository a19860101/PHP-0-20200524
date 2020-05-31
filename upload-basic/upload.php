<?php
    // var_dump($_FILES);
    // $name = $_FILES["img"]["name"];
    $name = md5(uniqid()).".jpg";
    $size = $_FILES["img"]["size"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $error = $_FILES["img"]["error"];

    $target = "images/{$name}";

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
        }else{
            echo "上船失敗";
        }
    }else{
        echo "上傳錯誤";
    }