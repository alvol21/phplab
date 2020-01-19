<?php
include '../security.php';
header("Content-type: application/json; charset=utf-8");
require_once '../database.php';

$conn->set_charset("utf8");

$sql = 'SELECT * FROM `Workers3`';
$workers = array();
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $worker = array(
             "id" => $row['Workers_number'],
            "name" => $row['Wrk_name'],
            "text" => $row['Wrk_position']
        );
        array_push($workers, $worker);
    }}
echo json_encode($workers,JSON_NUMERIC_CHECK);