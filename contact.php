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
    <link rel="stylesheet" href="контакты.css">
    <title>Контакты</title>
</head>
<body>
    <header class="header">
        <ul>  
            <li><a href="index.php"><img class="header_logo" width="220" height="175" src="image/logo.png" alt="Логотип"></a></li>
            <li><a href="menu.php"><img class="menu" src="image/menu.png" alt=""></a></li>
        </ul>
    </header>

    <main class="main">
        <h1>Контактная информация</h1>
        <p>Хотите помочь приюту?
            <br>Стать волонтером или просто прийти и познакомиться?
            <br>Свяжитесь с нами любым удобным для Вас способом.</p>

        <div class="Margo">
            <img class="Margo_img" src="../image/марго2.png" alt="">
            <div class="Margo_name"><p>Марго Сусаева</p></div>
            <div class="Margo_definition"><p>Посещение приюта, волонтерство</p></div>
            <div class="Margo_tel"><p>+7(931)-373-8249</p></div>
        </div>

        <div class="Maria">
            <img class="Maria_img" src="image/мария.png" alt="">
            <div class="Maria_name"><p>Мария Волкова</p></div>
            <div class="Maria_definition"><p>Посещение и помощь приюту</p></div>
            <div class="Maria_tel"><p>+7(992)-284-2842</p></div>
        </div>

        <div class="Alexey">
            <img class="Alexey_img" src="image/алексей.png" alt="">
            <div class="Alexey_name"><p>Алексей дмитриев</p></div>
            <div class="Alexey_definition"><p>Волонтер, посещение приюта</p></div>
            <div class="Alexey_tel"><p>+7(942)-294-4928</p></div>
        </div>
        <div class="feedback">
            <form action="feedback.php" method="post">
                <h2>Обратная связь</h2>
                <input name="Name" id="Name" type="text" placeholder="Имя" size="25" maxlength="25">
                <input name="Email" id="Email" type="text" placeholder="Email" size="320" maxlength="320">
                <input name="Message" id="Message" type="text" placeholder="Сообщение" size="1000" maxlength="1000">

                <button class="feedback_button" name="feedback_button" type="submit">Отправить</button>
            </form>
        </div>

        <div class="Help">
            <h2>Как помочь</h2>
            <div class="material-assistance">
                <h3>Материальная помощь</h3>
                <p>В приоритете на сегодня: средства для защиты от блох и клещей для собак средних и крупных размеров 
                    <br>(Симпарика; Rolf 3D; Фронтлайн; Адвантикс; Бравекто).
                    <br>
                    <br>Глистогонные препараты: Мильбемакс, Дронтал, Празител и др.
                    <br>
                    <br>Сухие корма – Pedigree и Chappi, консервы для собак – BigDog.
                    <br>
                    <br>ВНИМАНИЕ! В целях безопасности мы не принимаем вскрытые корма.
                    <br>
                    <br>Ошейники для собак средних размеров – «M» 41-48 см., c застежкой как у ремней.
                    <br>
                    <br>Поводки длинной от 5 метров.
                    <br>
                    <br>Впитывающие одноразовые пеленки (размер 60х60 и 60х90).
                    <br>
                    <br>Хозяйственный инвентарь: метлы, лопаты, грабли, перчатки, мыло.</p>
            </div>

            <div class="financial-assistance">
                <h3>Финансовая помощь</h3>
                <div class="Sber">
                    <h4>Сбербанк:</h4>
                    <div class="score"><p>номер карты 8039 5353 9205 2859 (владелец - Марго Викторовна С.)
                        <br>номер телефона 7(916)-824-2842</p></div>
                </div>

                <div class="Yandex"><p>Яндекс кошелек: 802494928394284</p></div>
                <p>Финансовая помощь очень важна для приюта, все денежные средства уходят на ветеринарную
                    <br>помощь для собак приюта, питание, обустройство вольеров, будок и непосредственно самого приюта.
                    <br>Не всегда то, что в списке материальной помощи, удается получить пожертвованиями и приходиться в
                    <br>срочном порядке производить самостоятельные закупки.</p>
            </div>
        </div>
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