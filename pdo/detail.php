<?php
    try{
        require_once("pdo.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <?php 
        echo $row["name"];
        echo $row["mail"];
        echo $row["phone"];
        echo $row["gender"];
        echo $row["create_at"];
    
    ?>
</div>
<?php include("template/footer.php");?>