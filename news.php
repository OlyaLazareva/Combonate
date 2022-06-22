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
    <link rel="stylesheet" href="новости.css">
    <title>Новости</title>
</head>
<body>
    <header class="header">
        <ul>  
            <li><a href="index.php"><img class="header_logo" width="220" height="175" src="../image/logo.png" alt="Логотип"></a></li>
            <li><a href="menu.php"><img class="menu" src="../image/menu.png" alt=""></a></li>
        </ul>
    </header>

    <main class="main">
        <h1>Новости</h1>
        <section class="news1">
            <img class="news1_img" width="778" height="432" src="../image/новости1.png" alt="">
            <section class="news1_definition"><p>Едем на выставку "Собаки, которые любят!"</p></section>
            <img class="news1_calendar" src="../image/calendar.png" alt="">
            <section class="news1_date"><p>19.04.22</p></section>
        </section>

        <section class="news2">
            <img class="news2_img" width="778" height="432" src="../image/новости2.png" alt="">
            <section class="news2_definition"><p>Бруня приглашает Вас на выставку</p></section>
            <img class="news2_calendar" src="../image/calendar.png" alt="">
            <section class="news2_date"><p>15.04.22</p></section>
        </section>

        <section class="news3">
            <img class="news3_img" width="778" height="432" src="../image/новости3.png" alt="">
            <section class="news3_definition"><p>Срочный поиск дома и семьи для четырех карапузов</p></section>
            <img class="news3_calendar" src="../image/calendar.png" alt="">
            <section class="news3_date"><p>29.11.21</p></section>
        </section>

        <section class="news4">
            <img class="news4_img" width="778" height="432" src="../image/новости4.png" alt="">
            <section class="news4_definition"><p>Проект "Пора понять"</p></section>
            <img class="news4_calendar" src="../image/calendar.png" alt="">
            <section class="news4_date"><p>06.10.21</p></section>
        </section>

        <section class="news5">
            <img class="news5_img" width="778" height="432" src="../image/новости5.png" alt="">
            <section class="news5_definition"><p>Совсем скоро, 30-го сентября, пройдет выставка собак и кошек из приюта
                <br>"Надо брать!"</p></section>
            <img class="news5_calendar" src="../image/calendar.png" alt="">
            <section class="news5_date"><p>10.09.21</p></section>
        </section>

        <section class="news6">
            <img class="news6_img" width="778" height="432" src="../image/новости6.png" alt="">
            <section class="news6_definition"><p>27 августа в ПКиО Кузьминки состоится благотворительный концерт
                <br>"Дай лапу, Друг!"</p></section>
            <img class="news6_calendar" src="../image/calendar.png" alt="">
            <section class="news6_date"><p>20.08.21</p></section>
        </section>

        <section class="news7">
            <img class="news7_img" width="778" height="432" src="../image/новости7.png" alt="">
            <section class="news7_definition"><p>Урок организовали в рамках проекта "Животные в городе" Фонд развития
                <br>социальных инициатив "В будущее!", фонд "ЛАПА" и частный приют для
                <br>животных Combonate</p></section>
            <img class="news7_calendar" src="../image/calendar.png" alt="">
            <section class="news7_date"><p>19.05.21</p></section>
        </section>

        <section class="news8">
            <img class="news8_img" width="778" height="432" src="../image/новости8.png" alt="">
            <section class="news8_definition"><p>В приюте Combonate провели урок доброты</p></section>
            <img class="news8_calendar" src="../image/calendar.png" alt="">
            <section class="news8_date"><p>19.05.21</p></section>
        </section>
    </main>

    <footer class="footer">
        <img class="footer_logo" src="../image/f-logo.png" alt="Логотип">
        <div class="Footer_menu">
            <div class="Footer_about"><p>О компании</p></div>
            <div class="Footer_news"><p>Новости</p></div>
            <div class="Footer_pet"><p>Питомцы</p></div>
            <div class="Footer_contact"><p>Контакты</p></div>
        </div>

        <section class="Address"><p>Московская область, г. Видное,
            <br>Ясеневская ул., д.41</p></section>

        <button class="Footer_button">
            <p>Написать</p>
        </button>

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
