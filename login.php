<?php
require "db.php";

if(isset($_POST['authorization'])){
	$err = [];
    $Email = "";

	$Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
	$Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING);

	if(mb_strlen($_POST['Password']) < 2 || mb_strlen($_POST['Password']) > 10){
		echo "Недопустимая длина пароля (от 2 до 10 символов).";
    }
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Email указан верно.";
    } else {
        echo "Email введен неверно.";
        exit;
    }

	// $query = mysqli_query($link, "SELECT ID_users FROM users WHERE Email = '".mysqli_real_escape_string($link, $_POST['Email'])."'");
	$query = mysqli_query($link, "SELECT * FROM users WHERE Email='$Email'");
	$myrow = mysqli_fetch_array($query);
	if (empty($myrow['Password']))
    {
		//если пользователя с введенным Email не существует
		echo "Извините, введённый вами Email или пароль неверный.";
		}
		else {
			//если существует, то сверяем пароли
			if ($myrow['Password']==$Password) {
			//если пароли совпадают, то запускаем пользователю сессию
			$_SESSION['Email']=$myrow['Email']; 
			$_SESSION['ID_users']=$myrow['ID_users'];
			header('Location: cabinet.php');
		}
		else { //если пароли не сошлись
			echo"Извините, введённый вами Email или пароль неверный.";
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
    <link rel="stylesheet" href="login.css">
    <title>Авторизация</title>
</head>
<body>
    <main>
        <div class="vxod">
            <div id="zatemnenie">
                <div id="okno">
                    <a href="signup.php"><h2 style="color: #707070; left: 139px; list-style:none; text-decoration:none;">Регистрация</h2></a>
                    <line></line>
                    <h2 style="right: 246px;">Вход</h2>
                    <a href="index.php"><img width="26" height="26" class="close" src="/image/cancel.png" alt="Закрыть"></a>
                    
                    <form action="login.php" method="post">
                        <input name="Email" id="Email" type="text" placeholder="Email">
                        <input name="Password" id="Password" type="password" placeholder="Пароль">
                        <button class="authorization" name="authorization" type="submit">Войти</button>
                    </form>                
                </div>
            </div>
        </div>
    </main>
</body>
</html>