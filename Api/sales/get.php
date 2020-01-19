<?php
include '../security.php';
header("Content-type: application/json; charset=utf-8");
require_once '../database.php';

$conn->set_charset("utf8");

$sql = 'SELECT * FROM `sale`';
$workers = array();
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $worker = array(
             "id" => $row['num_sale'],
            "total" => $row['total'],
            "worker" => $row['Workers_number'],
            "article" => $row['article_number']
        );
        array_push($workers, $worker);
    }}
echo json_encode($workers);