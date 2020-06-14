<?php
    require_once("conn.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $id = $_POST["id"];

    $sql = "UPDATE students 
            SET 
                name    = '$name',
                mail    = '$mail',
                phone   = '$phone',
                gender  = '$gender'
            WHERE 
                id      = {$id}";
    mysqli_query($conn,$sql);
    echo "<script>alert('修改完成');location.href='index.php'</script>";
