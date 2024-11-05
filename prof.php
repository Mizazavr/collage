<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
</head>
<body>
    <form action="">
        <h2><?= $_SESSION['user']['name']?></h2>
        <a href="index.php">Обратно</a>
        <a href="vendor/logout.php">Выход</a>
    </form>
</body>
</html>