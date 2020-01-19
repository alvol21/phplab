<?php
include '../security.php';
header("Content-type: application/json; charset=utf-8");
require_once '../database.php';

$conn->set_charset("utf8");

$sql = 'SELECT * FROM `Product3`';
$workers = array();
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $worker = array(
             "id" => $row['article_number'],
            "name" => $row['name1'],
            "text" => $row['short_characteristic_of_product']
        );
        array_push($workers, $worker);
    }}
echo json_encode($workers,JSON_NUMERIC_CHECK);