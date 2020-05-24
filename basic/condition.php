<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 2;
        // if($x > 0){
        //     echo "success";
        // }

        // if($x < 0){
        //     echo "success 2";
        // }else{
        //    echo "error"; 
        // }

        // if($x > 0){
        //     echo "success 3";
        // }elseif($x < 0){
        //     echo "success 4";
        // }else{
        //     echo "error 2";
        // }

        switch($x){
            case 0:
                echo 0;
                break;
            case 1:
                echo 1;
                break;
            case 2:
                echo 2;
                break;
            case 3:
                echo 3;
                break;
            default:
                echo "error";
        }
        switch(true){
            case $x > 0:
                echo "正整數";
                break;
            case $x < 0:
                echo "負整數";
                break;
            default:
                echo "error";
        }
    ?>
</body>
</html>