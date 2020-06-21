<?php
    try {
        require_once("pdo.php");
        $sql = "SELECT * FROM students";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->fetch();
        var_dump($result);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<?php
    // echo "<ul>";
    // while($row=mysqli_fetch_assoc($result)){
    //     // var_dump($row);
    //     echo "<li>{$row['name']}</li>";
        
    // }
    // echo "</ul>";
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>姓名</th>
                    <th>建立時間</th>
                    <th>動作</th>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php include("template/footer.php");?>