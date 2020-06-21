<?php
    try{
        require_once("pdo.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        echo $row["name"];
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>

<?php include("template/footer.php");?>