<?php
// 資料庫系統名稱；主機名稱；編碼方式；資料庫名稱
$dsn = 'mysql:host=localhost;charset=utf8;dbname=school';
// $pdo儲存著物件；使用 new 來創造物件
$pdo = new PDO($dsn, 'root', '');

// 將 SQL 語句存入變數中
// $sql = "select * from students";
// query() 用來將SQL語句傳給資料庫系統；
// fetch()、fetchAll() 用來取得資料庫系統的回傳值
// $rows = $pdo->query($sql)->fetchAll();

// echo "<pre>";
// $rows 儲存的是陣列
// print_r($rows);
// echo "</pre>";
// echo "<br>";

// echo $rows[1]['parents'];
$sql = "insert into `dept`(`code`, `name`) values('801','會計科')";

$pdo->query($sql);