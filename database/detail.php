<?php
    require_once("conn.php");
    require_once("function.php");
    $row = showData($_GET["id"]);
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