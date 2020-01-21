<?php
session_start();
header("Content-type: application/json; charset=utf-8");
require_once '../database.php';

if(isset($_REQUEST["username"]) && isset($_REQUEST["password"])){
    
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $sql = "SELECT * FROM `Users` WHERE username = '$username' and password = '$password'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        if ($row = $res->fetch_assoc()) {
            $_SESSION['username'] = $username;
            $_SESSION['authed'] = true;

            echo 'Успешный вход';
            header("Location: http://127.0.0.1:3000");
        }
        else{
            echo '{"error":403}';
        }
    }
    else{
        echo 'Пользователь не найден';
        header("Location: http://127.0.0.1:3000?error=Пользователь не найден");
    }
}else{
    echo 'Данные не передаются';
}
