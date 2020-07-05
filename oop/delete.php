<?php
    include("pdo.php");
    include("Student.php");
    $id = $_POST["id"];
    $stu = new Student;
    $stu->delete($id);
    header("Location:index.php");
