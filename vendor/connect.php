<?php

    $connect = mysqli_connect('MySQL-8.2', 'root', '', 'users');
    if(!$connect){
        die('Error connect to DateBase');
    }