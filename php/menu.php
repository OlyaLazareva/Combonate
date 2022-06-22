<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100;0,9..144,200;0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,800;0,9..144,900;1,9..144,100;1,9..144,200;1,9..144,300;1,9..144,400;1,9..144,500;1,9..144,600;1,9..144,700;1,9..144,800;1,9..144,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Меню</title>

    <style>
        *{
            background-color: #EDDED0;
        }
    </style>
</head>
<body>
    <main class="menu-main">
        <img class="cancel" src="../image/cancel.png" alt="Закрыть">
        <div class="widget">
            <ul class="widget-list">
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="pet.php">Питомцы</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </div>
    </main>
</body>
</html>