<?php

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post){
    redirectIfNotFound();
}
$pageTitle = "Edit";
$style = "css/edit.style.css";
require "views/posts/edit.view.php";