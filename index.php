<?php

require "functions.php";
require "Database.php";

echo "
<style>
    body{
        background-image: linear-gradient(#000000, #320000);
        font-family: Courier, monospace;
        color: #ffffff;
    }
    ul{
      font-size: 22px;
      font-weight: bold;
      background: -webkit-linear-gradient(#cf9a21, #ac1f43);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
</style>";

// 1. Izveidot datu bāzi ✔
// 2. Savienot PHP sr datu bāzi ✔
// 3. Izvadīt datus HTML ✔

// db nosaukums, parole, lietotājvārds
// mysql_connect ❌

$db = new Database();
$posts = $db->query("SELECT * FROM posts");

//dd($posts[0]["content"]);

// Ar foreach izvadīt content
echo "<ul>";
foreach($posts as $post){
  echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";


 