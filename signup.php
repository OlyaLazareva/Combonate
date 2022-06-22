<?php
require 'db.php';
if(isset($_POST['button']))
{
    $err = [];
    $Email = "";

    $Name_users = filter_var(trim($_POST['Name_users']), FILTER_SANITIZE_STRING);
	$Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
	$Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING);

    if(mb_strlen($_POST['Name_users']) < 0){
		echo "Вы не ввели имя.";
        exit;
    }
	if(mb_strlen($_POST['Password']) < 2 || mb_strlen($_POST['Password']) > 10){
		echo "Недопустимая длина пароля (от 2 до 10 символов).";
    }
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Email указан верно.";
    } else {
        echo "Email введен неверно.";
        // exit;
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT ID_users FROM users WHERE Email ='".mysqli_real_escape_string($link, $_POST['Email'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        echo "Пользователь с такой почтой уже существует в базе данных.";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $Email = $_POST['Email'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $Password = md5(md5(trim($_POST['Password'])));

        mysqli_query($link,"INSERT INTO users SET Name_users='".$Name_users."',Email='".$Email."', Password='".$Password."'");
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
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
    <link rel="stylesheet" href="signup.css">
    <title>Регистрация</title>
</head>
<body>
    <main>
        <div id="zatemnenie">
            <div id="okno1" style="height:627px;">
                <h2 style="left: 139px;">Регистрация</h2>
                <line></line>
                <a href="login.php"><h2 style="color: #707070; left: 350px;">Вход</h2></a>
                <a href="index.php"><img width="26" height="26" class="close" src="/image/cancel.png" alt=""></a>
                  
                <form action="signup.php" method="post">
                    <input name="Name_users" id="Name_users" type="text" placeholder="Имя" size="25" maxlength="25">
                    <input name="Email" id="Email" type="text" placeholder="Email" size="320" maxlength="320">
                    <input name="Password" id="Password" type="password" placeholder="Пароль" size="10" maxlength="10">
                    <button class="button" name="button" type="submit">Зарегистрироваться</button>
                </form>

                <div class="checkbox">
                    <input name="confirm-offer" type="checkbox" id="color" value="checkbox-input">
                    <label for="">Согласен с правилами сервиса</label>
                </div>
            </div>
        </div>
    </main>
</body>
</html>