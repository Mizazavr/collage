<?php
 
    session_start();
    require_once 'connect.php';


    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Street = $_POST['Street'];
    $Pass = $_POST['Pass'];
    $Pass_confirm = $_POST['Pass_confirm'];

    if($Pass === $Pass_confirm){

        $Pass = md5($Pass);
        
        mysqli_query ($connect, "INSERT INTO `User` (`id`, `email`, `name`, `tel`, `street`, `pass`) VALUES (NULL, '$Email', '$Name', '$Phone', '$Street', '$Pass')");
        $_SESSION['msgg'] = 'Регистрация прошла успешна!';
        header('Location: ../autoreg.php');

    }else{
        $_SESSION['msgg'] = 'Пароли не совподают!';
        header('Location: ../registr.php');
    }
?>