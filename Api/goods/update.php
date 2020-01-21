<?php
require_once '../database.php';
require '../security.php';
header("Content-type: application/json; charset=utf-8");
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$text = $_REQUEST['description'];
if(isset($id)){
     if(mysqli_query($conn,"UPDATE `Product3` SET `name1`='$name',`short_characteristic_of_product`='$text' WHERE article_number = '$id'")){
         echo 'Данные товара успешно изменены.';
    }else{
         echo 'Ошибка изменения данных.';
     }
}
else{
    echo 'Ошибка изменения данных.';
}