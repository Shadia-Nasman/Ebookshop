<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../model/connection.php';

$bookid = $_REQUEST["q"];

$sql = "SELECT * FROM product where bookid=:bookid";

$smt = openConnection()->prepare($sql);
$smt->bindValue(":bookid", $bookid);
$smt->execute();

$result = $smt->fetch(PDO::FETCH_OBJ);

header('Content-type: application/json;charset=utf-8');
echo json_encode($result, JSON_UNESCAPED_UNICODE);



exit();