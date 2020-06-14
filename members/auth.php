<?php
    require_once("conn.php");
    session_start();
    $user = $_POST["user"];
    $pw = $_POST["pw"];
    $sql = "SELECT * FROM members WHERE user = '$user'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($row["pw"] === $pw){ 
        echo "您已登入";
    }else{
        echo "滾";
    }