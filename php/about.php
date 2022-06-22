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
    <link rel="stylesheet" href="../css/style.css">
    <title>О компании</title>
</head>
<body>
    <header class="header">
        <ul>  
            <li><a href="index.php"><img class="header_logo" width="220" height="175" src="../image/logo.png" alt="Логотип"></a></li>
            <li><a href="menu.php"><img class="menu" src="../image/menu.png" alt=""></a></li>
        </ul>
    </header>

    <main class="main">
        <h1>О нас</h1>
        <p>Приют Combonate работает уже 5 лет.
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
            сами пришли к воротам приюта и легли под дверь.
            <br>
            <br>
            <br>Conbonate начинался как небольшая передержка для животных. Постепенно в
            приют попадало все больше собак и кошек, спасенных людьми с улицы, от
            живодеров, от усыпления в клиниках, требующих внимания и заботы, не всегда
            здоровых. В итоге собак без кураторов стало больше, чем тех, кто сидит на
            передержке. Все они нуждаются в общении, медицинском обслуживании, еде, 
            прививках и, самое главное, — в хозяине.
            <br>
            <br>
            <br>В штате приюта Conbonate есть ветеринарный врач, который постоянно наблюдает
            всех обитателей приюта. Помимо наблюдений у штатного ветеринара, все собаки и
            кошки приютаимеют возможность получать консультации узких специалистов в 
            лучших ветеринарных клиниках Москвы. Основная же цель деятельности приюта - 
            конечно, пристройство собак и кошек, поиски потенциальных хозяев для них. За 
            время существования приюта дом нашли более 1000 собак и кошек.
            <br>
            <br>
            <br>Всё это время приют содержался исключительно на частные пожертвования.
        </p>
        <img class="Margo" src="../image/марго.png" alt="">

        <div class="definition">
            <p>Марго Сусаева, директор приюта Conbonate</p>
        </div>
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