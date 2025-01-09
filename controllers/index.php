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

$pageTitle = "Logs";
$style = "css/index.style.css";
require "views/index.view.php";