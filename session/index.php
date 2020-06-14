<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
         <input type="text" name="user">
         <input type="pw" name="pw">
         <input type="submit" value="登入">
    </form>
    <a href="logout.php?q=true">登出</a>
    <?php
        session_start();
        if($_SESSION){
            echo $_SESSION["USER"]."你好";
        }else{
            echo "請登入";
        }
    ?>
</body>
</html>