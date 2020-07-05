<?php
    include("pdo.php");
    include("Student.php");
    $students = new Student;
    $rows = $students->showAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                <?php foreach($rows as $row){ ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["create_at"];?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                            <input type="submit" value="刪除" class="btn btn-danger btn-sm" onclick="return confirm('確認刪除?')">
                        </form>
                        <!-- <a href="delete.php?id=<?php #echo $row["id"];?>">刪除</a> -->
                        <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-success btn-sm">編輯</a>
                        <a href="detail.php?id=<?php echo $row["id"];?>" class="btn btn-primary  btn-sm">檢視</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
</body>
</html>