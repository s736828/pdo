<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo = new PDO($dsn, 'root', '');
$sql = "INSERT INTO `members`(`name`, `acc`, `password`, `email`, `tel`) 
    VALUES ('{$_POST['name']}','{$_POST['acc']}','{$_POST['password']}','{$_POST['email']}','{$_POST['tel']}')";

// echo $sql;
// 查看用echo，下面2行mark
$pdo->exec($sql);
header("location:index.html");
