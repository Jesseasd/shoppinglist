<?php
require_once "inc/functions.php";
require_once "inc/header.php";

try {
    $db = openDb();
    $sql = "select * from item";
    $query = $db -> query($sql);
    $results = $query -> fetchAll(PDO::FETCH_ASSOC);
    header("http/1.1 200 ok");
    print json_encode($results);
} catch (PDOException $pdoex) {
    returnError($pdoex);
}