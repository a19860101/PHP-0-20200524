<?php
    require_once("conn.php");
    function showData($id){
        global $conn;
        $sql = "SELECT * FROM students WHERE id = {$id}";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        var_dump($row);
    }

    showData(1);
    // $x = 10;
    // function qq(){
    //     global $x;
    //     echo $x;
    // }
    // qq();
    
