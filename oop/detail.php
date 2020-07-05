<?php
    include("pdo.php");
    include("Student.php");
    $id = $_GET["id"];
    $student = new Student;
    $row = $student->show($id);
?>

<div class="container">
    <?php 
        echo $row["name"];
        echo $row["mail"];
        echo $row["phone"];
        echo $row["gender"];
        echo $row["create_at"];
    
    ?>
</div>
