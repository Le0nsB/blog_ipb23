<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "INSERT INTO posts 
    (content)
    VALUES
    (:content)";
    $params = ["content" => $_POST["content"]];
    $post = $db->query($sql, $params)->fetch();
    header("Location: /"); exit();
}


$pageTitle = "Create";
$style = "css/create.style.css";
require "views/posts/create.view.php";