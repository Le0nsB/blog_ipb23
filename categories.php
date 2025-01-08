<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logs</title>
  <link rel="stylesheet" href="css/categories_style.css">
</head>
<body>
</body>
</html>
<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE category_name LIKE :nosaukums";
  $params = ["nosaukums" => $search_query];
}
$categories = $db->query($select, $params)->fetchAll();

echo "<h1>Logs</h1>";
echo "<form>";
  echo "<input name='search_query'/>";
  echo "<button>🕵️‍♂️</button>";
echo "</form>";

if(count($categories) == 0){
  echo $_GET["search_query"] . "  nav atrasts";
};
// Ar foreach izvadīt content
echo "<div>";
echo "<ul>";
foreach($categories as $category){
  echo "<li>" . $category["category_name"] . "</li>";
}
echo "</ul>";
echo "</div>";