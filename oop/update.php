<?php
    include("pdo.php");
    include("Student.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $id = $_POST["id"];

    $stu = new Student;
    $stu->update($name,$mail,$phone,$gender,$id);
    header("location:index.php");