<?php
    require_once("conn.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO students(name,mail,phone,gender,create_at)
            VALUES('$name','$mail','$phone','$gender',NOW())";
    mysqli_query($conn,$sql);
//     header("location: index.php");
//     header("Refresh:3;url=index.php");
//     echo "新增完成";

        // echo "<script>alert('新增完成');location.href='index.php'</script>";
        echo "<script>alert('新增完成');</script>";
        header("location: index.php");
        // header("Refresh:3;url=index.php");
