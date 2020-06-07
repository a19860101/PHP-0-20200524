<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <form action="store.php" method="post">
                <div>
                姓名<input type="text" name="name">
                </div>
                <div>
                mail<input type="text" name="mail">
                </div>
                <div>
                電話<input type="text" name="phone">
                </div>
                <div>
                性別
                <input type="radio" name="gender" value="男">男
                <input type="radio" name="gender" value="女">女
                </div>
                <input type="submit" value="送出">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>