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
        <div>
            <label>學歷</label>
            <select name="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            <label>專長</label>
            <input type="checkbox" name="skills[]" value="平面設計">平面設計
            <input type="checkbox" name="skills[]" value="網頁設計">網頁設計
            <input type="checkbox" name="skills[]" value="室內設計">室內設計
        </div>
        <div>
            <label>評論</label>
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
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