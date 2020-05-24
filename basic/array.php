<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $a = array();
        // $a[0] = "HTML";
        // $a[1] = "CSS";
        // $a[2] = "JAVASCRIPT";

        // $a = array("HTML","CSS","JAVASCRIPT");

        $a = ["HTML","CSS","JAVASCRIPT","PHP","MYSQL"];
        // var_dump($a);
        // echo $a[0];
        // echo $a[1];
        // echo $a[2];

        echo count($a);
        //陣列迭代
        for($i=0;$i<count($a);$i++){
            echo $a[$i];
            echo "<br>";
        }
    ?>
</body>
</html>