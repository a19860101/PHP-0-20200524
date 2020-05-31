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


        // array_push($a,"test","test2");
        // array_pop($a);
        // array_unshift($a,"test");
        // array_shift($a);
        // $a[count($a)] = "TEST123";
        // $a[count($a)] = "TEST456";

        
        foreach($a as $item){
            echo $item;
        }
        echo "<br>";


        $user = "john";
        $mail = "john@gmail.com";
        $age = "23";
        $gender = "male";

        // $user_info = array();
        // array_push($user_info,$user,$mail,$age,$gender);

        // var_dump($user_info);
        // echo $user_info[1];  
        
        $user_info = compact("user","mail","age","gender");
        var_dump($user_info);

        echo $user_info["user"];
        echo $user_info["mail"];
        echo $user_info["age"];
        echo $user_info["gender"];

        echo "<br>";

        # implode 集中 陣列->字串
        $a_str = implode("__",$a);
        echo $a_str;
        echo "<br>";
        # explode 爆炸 字串->陣列
        $str = "潘武雄_轟兩分砲_獅隊1萬4000打點_創中職第一";
        $str_array = explode("_",$str);
        var_dump($str_array);

    ?>
</body>
</html>