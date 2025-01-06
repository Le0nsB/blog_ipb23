<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hallo</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
</body>
</html>
<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

var_dump(isset($_GET["search_query"]));
if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){
  echo "Atgriezt ierakstus";
  $posts = $db ->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';")->fetchAll();

}

echo "<h1>Logs</h1>";
echo "<form>";
  echo "<input name='search_query'/>";
  echo "<button>🕵️‍♂️</button>";
echo "</form>";

// Ar foreach izvadīt content
echo "<div>";
echo "<ul>";
foreach($posts as $post){
  echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
echo "</div>";


 