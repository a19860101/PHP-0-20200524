<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POST</h2>
    <form action="reply.php" method="post">
        <div>
            <label for="user">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail">
        </div>
        <div>
            <label>性別</label>
            <input type="radio" name="gender" value="男">
            <label for="male">男</label>
            <input type="radio" name="gender" value="女">
            <label for="female">女</label>
        </div>
        <input type="submit">
    </form>
    <h2>GET</h2>
    <form action="reply.php" method="get">
        <input type="text" name="user">
        <input type="text" name="mail">
        <input type="submit">
    </form>
</body>
</html>