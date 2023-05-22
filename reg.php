<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
</head>
<body>
    <h1>會員註冊</h1>
    <form action="add_user.php" method="post">
    <p>
        <lebel>姓名:</lebel>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <lebel>帳號:</lebel>
        <input type="text" name="acc" id="acc">
    </p>
    <p>
        <lebel>密碼:</lebel>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <lebel>電子郵件:</lebel>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <lebel>電話:</lebel>
        <input type="text" name="tel" id="tel">
    </p>

    <!-- p input submit input reset -->
    <p><input type="submit" value="註冊"><input type="reset" value="重置"></p>

    </form>
</body>
</html>