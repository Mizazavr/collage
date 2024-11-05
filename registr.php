<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
<!-- форма рег -->

<form action="vendor/singup.php" method="post">
    <label>Имя</label>
    <input type="text" name="Name" placeholder="Введите свое имя(логин)">
    <label>Email</label>
    <input type="email" name="Email" placeholder="Введите свою почту">
    <label>Номер телефона</label>
    <input type="text" name="Phone" placeholder="Введите свой номер телефона(без +)">
    <label>Адрес(куда доставить)</label>
    <input type="text" name="Street" placeholder="Город, улица, дом, квартира">
    <label>Пароль</label>
    <input type="password" name="Pass" placeholder="Введите свой логин">
    <label>Повторить пароль</label>
    <input type="password" name="Pass_confirm" placeholder="Повторите пароль">
    <button type="submit">зарегистрироваться</button>
    <p>
        У вас есть аккаунт? - <a href="autoreg.php">Авторизироваться</a>
    </p>

    
        <?php 
        if($_SESSION['msgg']){
            echo'<p class="msg"> ' . $_SESSION['msgg'] . '</p>';
        }
         unset($_SESSION['msgg']);
        ?>
    
</form>
</body>
</html>