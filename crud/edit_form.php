<?php
echo $_GET['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
// charset是字元的意思
$pdo=new PDO($dsn,'root','');

$sql="select * from `students` where `id`='{$_GET['id']}'";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯學生資料</title>
</head>
<body>
    <h1>編輯學生資料</h1>
    <form action="edit.php" method="post">

        <div><label>學號</label>
            <input type="text" name="uni_id" value="<?=$row['uni_id']?>">
        </div>
        <div><label>班級座號</label>
            <input type="text" name="seat_num" value="<?=$row['seat_num']?>">
        </div>
        <div><label>姓名</label>
            <input type="text" name="name" value="<?=$row['name']?>">
        </div>
        <div><label>出生年月日</label>
            <input type="text" name="birthday" value="<?=$row['birthday']?>">
        </div>
        <div><label>身分證號碼</label>
            <input type="text" name="national_id" value="<?=$row['national_id']?>">
        </div>
        <div><label>住址</label>
            <input type="text" name="address" value="<?=$row['address']?>">
        </div>
        <div><label>家長</label>
            <input type="text" name="parent" value="<?=$row['parent']?>">
        </div>
        <div><label>電話</label>
            <input type="text" name="telphone" value="<?=$row['telphone']?>">
        </div>
        <div><label>科別</label>
            <input type="text" name="major" value="<?=$row['major']?>">
        </div>
        <div><label>畢業國中</label>
            <input type="text" name="secondary" value="<?=$row['secondary']?>">
        </div>

        <div>
            <input type="hidden" name="id" value="<?=$row['id'];?>">
            <input type="submit" value="編輯"><input type="reset" value="取消">
        </div>
    </form>

</body>

</html>
