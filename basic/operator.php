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
        var_dump($x !== $y);

        //賦值運算子
        echo $x = $y;
        echo "<br>";
        echo $x += $y; //$x = $x + $y     
        echo "<br>";
        echo $x -= $y; //$x = $x - $y     
        echo "<br>";
        echo $x *= $y; //$x = $x * $y     
        echo "<br>";
        echo $x /= $y; //$x = $x / $y     
        echo "<br>";
        echo $x %= $y; //$x = $x % $y     

    ?>
</body>
</html>