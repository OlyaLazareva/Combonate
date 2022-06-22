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
    <link rel="stylesheet" href="../css/index.css">
    <title>Главная</title>
</head>
<body>
    <header class="header">
        <!-- создание главного экрана-->
        <img class="banner" src="../image/banner.png" alt=""> <!-- Вставка картинки на главный экран -->
        <ul> <!-- сслки на главную страницу и меню -->
            <li><a href="index.php"><img class="header_logo" width="220" height="175" src="../image/logo.png" alt="Логотип"></a></li>
            <li><a href="menu.php"><img class="menu" src="../image/menu.png" alt=""></a></li>
            <li><a href="login.php" style="position: absolute; font-family: 'Fraunces', serif;
                font-size: 20px; top: 36px; right: 119px; color: #000; list-style: none; text-decoration: none;">Войти</a></li>
    </ul>

        <p>Combonate - это забота и любовь</p><!-- слоган -->

        <button class="header_button"> <!-- кнопка с переход на страницу с животными-->
            <ul>
                <li><a href="pet.php"><p>Перейти к животным</p></a></li>
            </ul>
        </button>
    </header>

    <main class="main">
        <!-- раздел "Ищут дом"-->
        <div class="find-home">
            <h2>Ищут дом</h2> <!-- заголовок раздела-->
            <div class="Troy"> <!-- Трой-->
                <img class="Troy_img" width="634" height="678" src="../image/трой10.png" alt=""> <!-- фото Троя-->
                <div class="Troy_name"><p>Трой</p></div> <!-- клички Троя-->
                <div class="Troy_age"><p>3 года</p></div> <!-- возраст Троя-->
            </div>

            <div class="Ava"> <!-- Ава-->
                <img class="Ava_img" width="570" height="399" src="../image/ава3.png" alt=""> <!-- фото  Авы-->
                <div class="Ava_name"><p>Ава</p></div> <!-- кличка Авы-->
                <div class="Ava_age"><p>2 года</p></div><!-- возраст Авы-->
            </div>

            <div class="Fred"><!-- Фред-->
                <img class="Fred_img" width="329" height="424" src="../image/фред2.png" alt=""> <!-- фото Фреда-->
                <div class="Fred_name"><p>Фред</p></div> <!-- кличка Фреда-->
                <div class="Fred_age"><p>5 месяцев</p></div> <!-- возраст Фреда-->
            </div>

            <div class="Dana"> <!-- Дана-->
                <img class="Dana_img" width="598" height="693" src="../image/дана1.png" alt=""> <!-- фото Даны-->
                <div class="Dana_name"><p class="Dana_name">Дана</p></div> <!-- кличка Даны-->
                <div class="Dana_age"><p>4 месяца</p></div> <!-- возраст Даны-->
            </div>

            <div class="Kuzya"> <!-- Кузя-->
                <img class="Kuzya_img" width="634" height="678" src="../image/кузя1.png" alt=""> <!-- фото Кузи-->
                <div class="Kuzya_name"><p>Кузя</p></div> <!-- кличка Кузи-->
                <div class="Kuzya_age"><p>5 лет</p></div> <!-- возраст Кузи-->
            </div>

            <div class="Martin"> <!-- Мартин-->
                <img class="Martin_img" width="329" height="424" src="../image/мартин2.png" alt=""> <!-- фото Мартина-->
                <div class="Martin_name"><p>Мартин</p></div> <!-- кличка Мартина-->
                <div class="Martin_age"><p>2 года</p></div> <!-- возраст Мартина-->
            </div>

            <button class="find-home_button"> <!-- кнопка с переходом на страницу с животными-->
                <ul>
                    <li><a href="pet.php"><p>Смотреть всех питомцев</p></a></li>
                </ul>
            </button>
        </div>


        <div class="About-us"> <!-- раздел "О компании"-->
            <h2>О приюте</h2> <!-- заголовок раздела-->
            <img class="About_img" width="456" height="633" src="../image/о_приюте.jpg" alt=""> <!-- добавление картинки-->
            <div class="paragraph"><p>Приют Combonate работает уже 5 лет. <!-- краткая информация о приюте-->
            <br>
            <br>
            <br>На протяжение этих лет Combonate был настоящим домом для потеряшек
            всех мастей и размеров. Десятки лап и хвостов нашли тут не только стол и
            кров, но и неусыпное внимание, заботу, лечение и любовь хозяев приюта, 
            волонтеров и просто неравнодушных людей.
            <br>
            <br>
            <br>Брошенные и забытые кураторами, сданные хозяевами — у каждого попавшего
            сюда своя тяжелая судьба. Кто-то был подобран на улице самим хозяином
            приюта, кого-то привели хозяева, не решившись усыпить. Некоторые собаки
            сами пришли к воротам приюта и легли под дверь.</p></div>
            
            <button class="About-us_button"><!-- кнопка с переход на страницу о нас-->
                <ul>
                    <li><a href="about.php"><p>Подробнее</p></a></li>
                </ul>
            </button>
        </div>

        <div class="Finded-home"> <!-- раздел "Нашли дом"-->
            <h2>Нашли дом</h2> <!-- заголовок раздела-->
            <div class="Lana"> <!-- Лана-->
                <img class="Lana_img" src="../image/лана1.png" alt=""> <!-- фото Ланы-->
                <div class="Lana_name"><p>Лана</p></div> <!-- кличка Ланы-->
                <div class="Lana_age"><p>5 месяцев</p></div> <!-- возраст Ланы-->
            </div>

            <div class="Matilda"> <!-- Матильда-->
                <img class="Matilda_img" src="../image/матильда3.png" alt=""> <!-- фото Матильды-->
                <div class="Matilda_name"><p>Матильда</p></div> <!-- кличка Матильды-->
                <div class="Matilda_age"><p>7 лет</p></div> <!-- возраст Матильды-->
            </div>

            <div class="Foxy"> <!-- Фокси-->
                <img class="Foxy_img" src="../image/фокси2.png" alt=""> <!-- фото Фокси-->
                <div class="Foxy_name"><p>Фокси</p></div> <!-- кличка Фокси-->
                <div class="Foxy_age"><p>4 года</p></div> <!-- возраст Фокси-->
            </div>

            <div class="Timofey"> <!-- Тимофей-->
                <img class="Timofey_img" src="../image/тимофей4.png" alt=""> <!-- фото Тимофея-->
                <div class="Timofey_name"><p>Тимофей</p></div> <!-- кличка Тимофея-->
                <div class="Timofey_age"><p>3 года</p></div> <!-- возраст Тимофея-->
            </div>
        </div>

        <div class="News"> <!-- раздел "Новости"-->
            <h2>Новости приюта</h2> <!-- заголовок раздела-->
            <div class="News1"> <!-- первая новость-->
                <img class="news1_img" src="../image/новости2г.png" alt=""> <!-- фото первоя новости-->
            </div>

            <div class="News2"> <!-- вторая новость-->
                <img class="news2_img" src="../image/новости3г.png" alt=""> <!-- фото второй новости-->
            </div>

            <img class="Arrow-left" src="../image/arrow-left.png" alt=""> <!-- стрелка-->
            <img class="Arrow-right" src="../image/arrow-right.png" alt=""> <!-- стрелка-->

            <button class="News_button"> <!-- кнопка с переходом на страницу с новостями-->
                <ul>
                    <li><a href="news.php"><p>Показать все</p></a></li>
                </ul>
            </button>
        </div>

        <div class="Gallery"> <!-- раздел "Галерея"-->
            <h2>Галерея</h2> <!-- заголовок раздела-->
            <div class="Video"> <!-- -->
                <h3>Видео</h3> 
                <video class="Video1" width="390" height="218" controls preload="auto"> <!-- добавление первого видео с разными проигрывателями-->
                    <source src="../video/лэя_мартин1.mp4" type='video/.mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <source src="../video/лэя_мартин1.webm" type='video/webm; codecs="vp8, vorbis"'>
                </video>

                <video class="Video2" width="398" height="224" controls preload="auto"> <!-- добавление второго видео-->
                    <source src="../video/мартин1.mp4" type='video/.mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <source src="../video/мартин1.webm" type='video/webm; codecs="vp8, vorbis"'>
                </video>

                <video class="Video3" width="382" height="228" controls preload="auto"> <!-- добавление третьего видео-->
                    <source src="../video/мартин2.mp4" type='video/.mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <source src="../video/мартин2.webm" type='video/webm; codecs="vp8, vorbis"'>
                </video>

                <video class="Video4" width="382" height="228" controls preload="auto"> <!-- добавление четвертого видео-->
                    <source src="../video/лэя_мартин2.mp4" type='video/.mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <source src="../video/лэя_мартин2.webm" type='video/webm; codecs="vp8, vorbis"'>
                </video>
            </div>

            <div class="Photo">
                <h3>Фото</h3>
                <img class="Photo1" src="../image/дик_джек5.png" alt=""> <!-- добавление первой фотографии-->
                <img class="Photo2" src="../image/буч3.png" alt=""> <!-- добавление второй фотографии-->
                <img class="Photo3" src="../image/трой8.png" alt=""> <!-- добавление третьей фотографии-->
            </div>
        </div>
    </main>

    <footer class="Footer"> <!-- подвал сайта-->
        <img class="Footer_logo" src="../image/f-logo.png" alt=""> <!-- логотип организации-->
        <ul class="Footer_menu"> <!-- меню-->
            <li class="Footer_about"><a href="about.php"><p>О компании</p></a></li> <!-- переход на страницу о нас-->
            <li class="Footer_news"><a href="news.php"><p>Новости</p></a></li> <!-- переход на страницу новости-->
            <li class="Footer_pet"><a href="pet.php"><p>Питомцы</p></a></li> <!-- переход на страницу питомцы-->
            <li class="Footer_contact"><a href="contact.php"><p>Контакты</p></a></li> <!-- переход на страницу контакты-->
        </ul>

        <div class="Address"><p>Московская область, г. Видное,
            <br>Ясеневская ул., д.41</p></div>

        <button class="Footer_button"> <!-- кнопка для обратной связи-->
            <p>Написать</p>
        </button>

        <div class="Media"> <!-- социальные сети-->
            <p>Мы в сети</p>
            <img class="Facebook" src="../image/facebook.png" alt=""> <!-- логотип Facebook-->
            <img class="Instagram" src="../image/instagram.png" alt=""> <!-- логотип Instagram-->
            <img class="Vk" src="../image/vk.png" alt=""> <!-- логотип Вконтакте-->
            <img class="Youtube" src="../image/youtube.png" alt=""> <!-- логотип Youtube-->
            <img class="Twitter" src="../image/twitter.png" alt=""> <!-- логотип Twitter-->
        </div>
        <div class="year"><p>2017-2022</p></div> <!-- год работы сайта-->
    </footer>
</body>
</html>