<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
?>
<?php include("template/header.php");?>

<?php include("template/footer.php");?>