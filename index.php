<?php

require "functions.php";

echo "
<style>
    body{
        background-image: linear-gradient(#000000, #320000);
        color: #ff9a21;
        font-family: Courier, monospace;
    }
</style>";

// 1. Izveidot datu bāzi ✔
// 2. Savienot PHP sr datu bāzi ✔
// 3. Izvadīt datus HTML ✔

// db nosaukums, parole, lietotājvārds
// mysql_connect ❌

// Data Source Name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

// PDO - PHP Data Object
$pdo = new PDO($dsn);

// 1. Sagatavot vaicājumu (statement)
$statement = $pdo->prepare("SELECT * FROM posts");

// 2. Izpildīt statement
$statement->execute();

// 3. Dabūt rezultātu
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts[0]["content"]);

// Ar foreach izvadīt content
echo "<ul>";
foreach($posts as $post){
  echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";


 