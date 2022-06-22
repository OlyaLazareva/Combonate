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
    <link rel="stylesheet" href="../css/cabinet.css">
    <title>Личный кабинет</title>
</head>
<body>
    <header class="header">
        <ul>
            <li><a href="index.php"><img class="header_logo" width="220" height="175" src="../image/logo.png" alt="Логотип"></a></li>
            <li><a href="menu.php"><img class="menu" src="../image/menu.png" alt=""></a></li>
            <li><p>Пользователь</p></li>
        </ul>
    </header>

    <main class="main">
        <img class="users" src="../image/user.png">
        <section class="information">
            <section class="name"><p>Пользователь</p></section>
            <button class="exit" name="">Выйти</button>
            <section class="telephone"><p>+7(895)-284-3829</p></section>
            <section class="email"><p class="email">email@gmail.com</p></section>
        </section>

        <section class="menu_users">
            <ul>
                <li><a href="#1" tabindex="1" class="i_help">Я помогаю</a>
                    <section class="sub_menu1">
                        <img class="animal_help" src="../image/" alt="">
                        <section class="animal_name"><p>Трой</p></section>
                        <section class="animal_age"><p>3 года</p></section>
                    </section>
                </li>
                <li><a href="#2" tabindex="1" class="data">Мои данные</a>
                    <section class="sub_menu2"></section>
                </li>
                <li><a href="#3" tabindex="1" class="my_animal">Мои животные</a>
                    <section class="sub_nemu3"></section>
                </li>
            </ul>
        </section>
    </main>

    <footer class="Footer">
        <img class="Footer_logo" src="../image/f-logo.png" alt="">
        <ul class="Footer_menu">
            <li class="Footer_about"><a href="about.php"><p>О компании</p></a></li>
            <li class="Footer_news"><a href="news.php"><p>Новости</p></a></li>
            <li class="Footer_pet"><a href="pet.php"><p>Питомцы</p></a></li>
            <li class="Footer_contact"><a href="contact.php"><p>Контакты</p></a></li>
        </ul>

        <div class="Address"><p>Московская область, г. Видное,
            <br>Ясеневская ул., д.41</p></div>

        <button class="Footer_button">Написать</button>

        <div class="Media">
            <p>Мы в сети</p>
            <img class="Facebook" src="../image/facebook.png" alt="">
            <img class="Instagram" src="../image/instagram.png" alt="">
            <img class="Vk" src="../image/vk.png" alt="">
            <img class="Youtube" src="../image/youtube.png" alt="">
            <img class="Twitter" src="../image/twitter.png" alt="">
        </div>
        <div class="year"><p>2017-2022</p></div>
    </footer>
</body>
</html>