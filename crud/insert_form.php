<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學生資料</title>
</head>

<body>
    <form action="insert.php" method="post">

        <!-- (div>label+input)*10 快捷>代表包含，+代表同一層要一起顯示的元素-->
        <div><label>學號</label>
            <input type="text" name="uni_id">
        </div>
        <div><label>班級座號</label>
            <input type="text" name="seat_num">
        </div>
        <div><label>姓名</label>
            <input type="text" name="name">
        </div>
        <div><label>出生年月日</label>
            <input type="text" name="birthday">
        </div>
        <div><label>身分證號碼</label>
            <input type="text" name="national_id">
        </div>
        <div><label>住址</label>
            <input type="text" name="address">
        </div>
        <div><label>家長</label>
            <input type="text" name="parent">
        </div>
        <div><label>電話</label>
            <input type="text" name="telphone">
        </div>
        <div><label>科別</label>
            <input type="text" name="major">
        </div>
        <div><label>畢業國中</label>
            <input type="text" name="secondary">
        </div>

        <div>
            <input type="submit" value="新增"><input type="reset" value="取消">
        </div>
    </form>

</body>

</html>