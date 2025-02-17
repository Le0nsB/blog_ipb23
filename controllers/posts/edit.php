<?php

require "Validator.php";

$sql = "SELECT * FROM categories";
$categories = $db->query($sql, [])->fetchall();

if(isset($_GET["id"])){
    $sql = 'SELECT * FROM posts WHERE id = :id';
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam bet īsākam par 50 rakstzīmēm.";
    } 

    if (empty($errors)) {
        $sql = 'UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id';
        $params = ["id" => $_POST["id"], "content" => $_POST["content"], "category_id" => $_POST["category_id"]];
        $post = $db->query($sql, $params)->fetch();
        
        header('Location: /show?id=' . $_POST["id"]);
        exit();
    }
    
}
if (!$post){
    redirectIfNotFound();
}

$pageTitle = "Edit";
$style = "css/edit.styles.css";
require "views/posts/edit.view.php";