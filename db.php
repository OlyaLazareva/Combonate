<?php
require "Database.php";
$host = 'localhost';
$database = 'combonate';
$charset = 'utf8';
$user = 'root';
$password = '';

// require "rb-mysql.php";
// try{
//     $db = new PDO('mysql:host=localhost;dbname=combonate','root','');
// } catch(PDOException $e){
//     echo $e->getmessage();
// }
// R::setup('mysql:host=localhost;dbname=combonate','root', '' );
// if(!R::testConnection()) die('No DB connection!');

$link = mysqli_connect($host, $user, $password, "combonate");

if($link)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');
?>