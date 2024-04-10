<?php

require "functions.php";
$config = require "config.php";
require "Database.php";


$query_string = "SELECT * FROM fruits";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != "") {
    $query_string .= " WHERE id=:id";
    $params[":id"] = $_GET["id"];
}

$db = new Database($config);

$fruits = $db->execute($query_string, $params)->fetchAll();

$title = "Fruits";

require "views/fruits/index.view.php";
