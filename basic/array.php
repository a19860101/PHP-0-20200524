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
        $datas = ["HTML","CSS","JAVASCRIPT","PHP","MYSQL"];

        // var_dump($a);
        // echo $a[0];
        // echo $a[1];
        // echo $a[2];

        // echo count($a);
        //陣列迭代
        // for($i=0;$i<count($a);$i++){
        //     echo $a[$i];
        //     echo "<br>";
        // }

        // sort($datas);
        // rsort($datas);
        // shuffle($datas);
            $x = 0;
        var_dump(in_array("HTML",$datas));
        var_dump(is_array($x));

        foreach($datas as $data){
            echo $data;
            echo "<br>";
        }

        $drinks = ["紅茶"=>20,"綠茶"=>20,"珍珠奶茶"=>50,"奶茶"=>30];

        // ksort($drinks);
        // asort($drinks);
        // krsort($drinks);
        // arsort($drinks);


        foreach($drinks as $drink=>$price){
            echo $drink;
            echo $price;
            echo  "<br>";
        }
        // foreach($drinks as $key => $value){
        //     echo $key,$value;
        // }
    ?>
</body>
</html>