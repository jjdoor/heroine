<?php
$pdo = new PDO("mysql:host=47.245.52.252;dbname=heroine", "root", "ltt_19861017");
$code = $pdo->errorCode();
$info = $pdo->errorInfo();
echo "<pre>";
var_dump($code);
var_dump($info);
var_dump($pdo);
echo "----";
?>

