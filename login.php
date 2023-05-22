<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo = new PDO($dsn, 'root', '');

// ↓連結的是form裡面的name=""值
$acc = $_POST['acc'];
$pw = $_POST['password'];

$sql = "select count(*) from `members` where `acc`= '$acc' && `password`='$pw'";
echo $sql;
$chk = $pdo->query($sql)->fetchColumn();
echo "<pre>";
print_r($chk);
echo "</pre>";
if ($chk) {
    echo "登入成功";
    // header("location:index.html");
} else {
    echo "登入失敗，帳號或密碼錯誤";
    // header("location:login_form.php?error=1");
}


// $sql = "select * from `members` where `acc`= '$acc' && `password`='$pw'";

// $user = $pdo->query($sql)->fetch();
// echo "<pre>";
// print_r($user);
// echo "</pre>";

// if ($acc == $user['acc'] && $pw == $user['password']) {
//     echo "登入成功";
// } else {
//     echo "登入失敗，帳號或密碼錯誤";
// }


