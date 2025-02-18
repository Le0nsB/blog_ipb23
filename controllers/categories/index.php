<?php
$config = require("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE category_name LIKE :nosaukums";
  $params = ["nosaukums" => $search_query];
}
$posts = $db->query($select, $params)->fetchAll();

$pageTitle = "Logs";
$style = "/css/index.style.css";
require "views/categories/index.view.php";