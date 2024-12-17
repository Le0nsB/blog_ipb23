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

// 1. Izveidot datu bāzi ✔
// 2. Savienot PHP sr datu bāzi ✔
// 3. Izvadīt datus HTML ✔

// db nosaukums, parole, lietotājvārds
// mysql_connect ❌

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

// Ar foreach izvadīt content
echo "<div>";
echo "<ul>";
foreach($posts as $post){
  echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
echo "</div>";


 