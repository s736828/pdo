<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
// 建立資料庫連線
$pdo=new PDO($dsn,'root','');
// 連線資料庫()
$sql="select * from students limit 1";

$row=$pdo->query($sql)->fetch();
echo "<pre>";
echo print_r($row);
echo "</pre>";
echo "<br>";

echo $row['seat_num'];
echo $row[3];

$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// 靜態存取物件
echo "<pre>";
echo print_r($row);
echo "</pre>";
echo "<br>";

$row=$pdo->query($sql)->fetch(PDO::FETCH_NUM);
// 限制取回的資料型態
echo "<pre>";
echo print_r($row);
echo "</pre>";
echo "<br>";
?>
