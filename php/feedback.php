<?php
require "db.php";

if(isset($_POST['feedback_button'])) {
    $err = [];
    $Email = "";

    $Name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
	$Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
	$Message = filter_var(trim($_POST['Message']), FILTER_SANITIZE_STRING);

    if(mb_strlen($_POST['Name']) < 1){
		echo "Недопустимая длина имени.";}
	if(mb_strlen($_POST['Message']) < 2 || mb_strlen($_POST['Message']) > 1000){
		echo "Недопустимая длина пароля (от 2 до 10 символов)";}
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Email указан верно";
    } else {
        echo "Email введен неверно";
        exit;
    }

    $mysqli = new mysqli('localhost', 'root', '', 'combonate');
    $mysqli->query("INSERT INTO `feedback`(`Name`,`Email`, `Message`) VALUES ('$Name','$Email','$Message')");
    echo "Сообщение отправлено.";
} else {
    echo "Сообщение не отправлено";
}
?>