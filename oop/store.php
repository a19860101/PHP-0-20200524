<?php
    include("pdo.php");
    include("Student.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $create_at = date("Y-m-d H:i:s");

    $stu = new Student;
    $stu->store($name,$phone,$mail,$gender,$create_at);
    header("Location:index.php");