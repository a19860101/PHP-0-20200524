<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
?>
<?php include("template/header.php");?>
<?php
    // echo "<ul>";
    // while($row=mysqli_fetch_assoc($result)){
    //     // var_dump($row);
    //     echo "<li>{$row['name']}</li>";
        
    // }
    // echo "</ul>";
?>
<table>
<?php while($row=mysqli_fetch_assoc($result)){?> 
    <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["phone"];?></td>
        <td><?php echo $row["mail"];?></td>
        <td><?php echo $row["gender"];?></td>
        <td><?php echo $row["create_at"];?></td>
    </tr>
<?php } ?>
</table>
<?php include("template/footer.php");?>