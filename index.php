<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logs</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
</body>
</html>
<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE content LIKE :nosaukums";
  $params = ["nosaukums" => $search_query];
}
$posts = $db->query($select, $params)->fetchAll();

require "views/index.view.php";