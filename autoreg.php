<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
<!-- форма авториг -->

<header>
        <div class="NS">
            <a href="index.php" class="a1"><strong>ГПЗОО</strong></a>
        </div>
</header>

<form action="vendor/singin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <button type="submit">войти</button>
    <p>
        У вас нет аккаунта? - <a href="registr.php">Зарегистрироваться</a>
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