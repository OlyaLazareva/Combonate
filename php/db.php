<?php
require "Database.php";
$host = 'localhost';
$database = 'combonate';
$charset = 'utf8';
$user = 'root';
$password = '';

$link = mysqli_connect($host, $user, $password, "combonate");

if($link)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');
?>