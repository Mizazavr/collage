cd <?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SESSION['user']){
          echo '<h2>'. $_SESSION['user']['name'] .'</h2>';
        }else{
            echo '<h2>Пользователь</h2>';
        } 
        ?>
    <a href="autoreg.php">Войти</a>
    <?php
    if($_SESSION['user']){
          echo '<a href="prof.php">Профиль</a>';
        }
        ?>
    <a href="basket.php">Корзина</a>
</body>
</html>