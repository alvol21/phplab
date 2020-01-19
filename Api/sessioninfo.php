<?php
header("Content-type: application/json; charset=utf-8");
session_start();
print json_encode($_SESSION);
