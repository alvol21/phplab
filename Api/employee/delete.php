<?php
include '../security.php';
require_once '../database.php';

session_start();
$id= $_GET['id'];

$status = array();
if(isset($id)){
        if(mysqli_query($conn,"DELETE from Workers3 WHERE Workers_number = '$id'")){
            echo '{"code":1}';
        }else{
            echo '{"code":600}'; //данные не могут быть удалены
        }
}
else{
    //данные не передаются
    echo '{"code":400}';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);