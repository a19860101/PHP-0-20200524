<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user">
        <input type="password" name="pw">
        <input type="text" name="mail">
        <input type="submit" value="申請會員" name="submit">
    </form>
    <?php
        if(isset($_POST["submit"])){
            echo "submit";
            $user = $_POST["user"];
            $pw = $_POST["pw"];
            $mail = $_POST["mail"];

            echo $user,$pw,$mail;
        }
    ?>
</body>
</html>