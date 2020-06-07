<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width:200px;
        }
    </style>
</head>
<body>
    <?php
        $imgs = glob("images/*");
        // var_dump($imgs);
        $imgs_num = count($imgs);
        if($imgs_num == 0){
            echo "尚無圖片";
        }else{
            foreach($imgs as $img){
                echo "<img src={$img}>";
                echo "<br>";
            }
        }
    ?>
</body>
</html>