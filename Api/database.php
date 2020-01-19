<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "root";
$dbname = "volma";
$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno($conn))
    {
        echo 'Ошибка подключения к БД';
    }
?>