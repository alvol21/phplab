<?php
require_once '../database.php';
include '../security.php';
header("Content-type: text/html; charset=utf-8");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

if(isset($name) && isset($id)){
        if(mysqli_query($conn,"INSERT into `Product3` (article_number, name1, short_characteristic_of_product) VALUES  ('$id','$name','$description')")){
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