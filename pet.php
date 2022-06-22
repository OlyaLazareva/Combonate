<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100;0,9..144,200;0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,800;0,9..144,900;1,9..144,100;1,9..144,200;1,9..144,300;1,9..144,400;1,9..144,500;1,9..144,600;1,9..144,700;1,9..144,800;1,9..144,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pet.css">
    <title>Питомцы</title>
</head>
<body>
    <header class="header">
        <ul>  
            <li><a href="index.php"><img class="header_logo" width="220" height="175" src="image/logo.png" alt="Логотип"></a></li>
            <li><a href="menu.php"><img class="menu" src="image/menu.png" alt=""></a></li>
        </ul>
    </header>

    <main class="main">
        <img class="filter" src="image/filter.png" alt="">
        <h1>Питомцы</h1>
        <div class="Troy">
            <img class="Troy_img" width="634" height="678" src="image/трой10.png" alt="">
            <div class="Troy_name"><p>Трой</p></div>
            <div class="Troy_age"><p>3 года</p></div>
        </div>

        <div class="Ava">
            <img class="Ava_img" width="570" height="399" src="image/ава3.png" alt="">
            <div class="Ava_name"><p>Ава</p></div>
            <div class="Ava_age"><p>2 года</p></div>
        </div>

        <div class="Fred">
            <img class="Fred_img" width="329" height="424" src="image/фред2.png" alt="">
            <div class="Fred_name"><p>Фред</p></div>
            <div class="Fred_age"><p>5 месяцев</p></div>
        </div>

        <div class="Dana">
            <img class="Dana_img" width="598" height="693" src="image/дана1.png" alt="">
            <div class="Dana_name"><p class="Dana_name">Дана</p></div>
            <div class="Dana_age"><p>4 месяца</p></div>
        </div>

        <div class="Kuzya">
            <img class="Kuzya_img" width="634" height="678" src="image/кузя1.png" alt="">
            <div class="Kuzya_name"><p>Кузя</p></div>
            <div class="Kuzya_age"><p>5 лет</p></div>
        </div>

        <div class="Martin">
            <img class="Martin_img" width="329" height="424" src="image/мартин2.png" alt="">
            <div class="Martin_name"><p>Мартин</p></div>
            <div class="Martin_age"><p>2 года</p></div>
        </div>

        <div class="Dick-Jack">
            <img class="Dick-Jack_img" width="599" height="520" src="image/дик_джек3.png" alt="">
            <div class="Dick-Jack_name"><p>Дик и Джек</p></div>
            <div class="Dick-Jack_age"><p>6 лет</p></div>
        </div>

        <div class="Butch">
            <img class="Butch_img" width="456" height="500" src="image/буч1.png" alt="">
            <div class="Butch_name"><p>Буч</p></div>
            <div class="Butch_age"><p>4 месяца</p></div>
        </div>

        <div class="Lay">
            <img class="Lay_img" width="598" height="693" src="image/лэя2.png" alt="">
            <div class="Lay_name"><p>Лэя</p></div>
            <div class="Lay_age"><p>2 года</p></div>
        </div>

        <div class="Adele">
            <img class="Adele_img" width="511" height="520" src="image/адель.png" alt="">
            <div class="Adele_name"><p>Адель</p></div>
            <div class="Adele_age"><p>5 лет</p></div>
        </div>

        <div class="Ray">
            <img class="Ray_img" width="484" height="561" src="image/рэй.png" alt="">
            <div class="Ray_name"><p>Рэй</p></div>
            <div class="Ray_age"><p>5 лет</p></div>
        </div>

        <div class="Batty">
            <img class="Batty_img" width="598" height="562" src="image/бэтти.png" alt="">
            <div class="Batty_name"><p>Бэтти</p></div>
            <div class="Batty_age"><p>4 года</p></div>
        </div>

        <button class="pet_button">
            <p>Взять питомца</p>
        </button>
    </main>

    <footer class="footer">
        <img class="footer_logo" src="image/f-logo.png" alt="Логотип">
        <div class="Footer_menu">
            <div class="Footer_about"><p>О компании</p></div>
            <div class="Footer_news"><p>Новости</p></div>
            <div class="Footer_pet"><p>Питомцы</p></div>
            <div class="Footer_contact"><p>Контакты</p></div>
        </div>

        <div class="Address"><p>Московская область, г. Видное,
            <br>Ясеневская ул., д.41</p></div>

        <button class="Footer_button">
            <p>Написать</p>
        </button>

        <div class="Media">
            <p>Мы в сети</p>
            <img class="Facebook" src="image/facebook.png" alt="">
            <img class="Instagram" src="image/instagram.png" alt="">
            <img class="Vk" src="image/vk.png" alt="">
            <img class="Youtube" src="image/youtube.png" alt="">
            <img class="Twitter" src="image/twitter.png" alt="">
        </div>
        <div class="year"><p>2017-2022</p></div>
    </footer>
</body>
</html>