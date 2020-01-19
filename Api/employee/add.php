<?php
require_once '../database.php';
header("Content-type: text/html; charset=utf-8");

$name = $_POST['name'];
$position = $_POST['position'];

if(isset($name) && isset($position)){
        if(mysqli_query($conn,"INSERT into `Workers3` (Wrk_name, Wrk_position) VALUES  ('$name','$position')")){
            echo '{"code": "Сотрудник добавлен"}';
        }else{
            echo '{"code":"Ошибка добавления сотрудника"}'; //данные не могут быть добавлены
        }
}
else{
    //данные не передаются
    echo '{"code":400}';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);