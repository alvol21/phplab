<?php
require_once '../database.php';
include '../security.php';
header("Content-type: text/html; charset=utf-8");

$id = $_POST['id'];
$name = $_POST['name'];

if(isset($name) && isset($id)){
        if(mysqli_query($conn,"INSERT into `Material3` (article_number_materials, name) VALUES  ('$id','$name')")){
            echo '{"code": "Товар добавлен"}';
        }else{
            echo '{"code":"Ошибка добавления товара"}'; //данные не могут быть добавлены
        }
}
else{
    //данные не передаются
    echo '{"code":400}';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);