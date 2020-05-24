<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //算術運算子
        $x = 100;
        $y = 30;

        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";
        //比較運算子
        var_dump($x > $y);
        echo "<br>";
        var_dump($x < $y);
        echo "<br>";
        var_dump($x >= $y);
        echo "<br>";
        var_dump($x <= $y);
        echo "<br>";
        var_dump($x == $y);
        echo "<br>";
        var_dump($x === $y);
        echo "<br>";
        var_dump($x != $y);
        echo "<br>";
        var_dump($x <> $y);
        echo "<br>";
        var_dump($x !== $y);

        //賦值運算子
        // echo $x = $y;
        // echo "<br>";
        // echo $x += $y; //$x = $x + $y     
        // echo "<br>";
        // echo $x -= $y; //$x = $x - $y     
        // echo "<br>";
        // echo $x *= $y; //$x = $x * $y     
        // echo "<br>";
        // echo $x /= $y; //$x = $x / $y     
        // echo "<br>";
        // echo $x %= $y; //$x = $x % $y     

        //邏輯運算子
        /* 
            &&  AND
            ||  OR
            !   NOT
        */
        var_dump($x > 0 && $y > 0);
        var_dump($x > 0 || $y > 0);
        var_dump(!isset($x));
        
        var_dump($x > 0 xor $y > 0);
        
    ?>
</body>
</html>