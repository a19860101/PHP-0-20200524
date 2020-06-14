<?php
    require_once("conn.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="name">姓名</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $row["name"];?>">
                </div>
                <div class="form-group">
                    <label for="mail">mail</label>
                    <input type="text" id="name" name="mail" class="form-control" value="<?php echo $row["mail"];?>">
                </div>
                <div class="form-group">
                    <label for="phone">電話</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $row["phone"];?>">
                </div>
                <div class="form-group">
                <label>性別</label>
                <div class="form-check">
                    <input type="radio" name="gender" value="男"  id="male" class="form-check-input">
                    <label for="male" class="form-check-label">男</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="女" id="female" class="form-check-input">
                    <label for="female" class="form-check-label">女</label>
                </div>
                </div>
                <input type="submit" value="確認修改" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>