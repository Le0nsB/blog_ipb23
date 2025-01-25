<?php

require "Validator.php";

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
        $sql = 'UPDATE posts SET content = :content WHERE id = :id';
        $params = ["id" => $_POST["id"], "content" => $_POST["content"]];
        $post = $db->query($sql, $params)->fetch();
        
        header('Location: /show?id=' . $_POST["id"]);
        exit();
    }
}

$pageTitle = "Edit";
$style = "css/edit.styles.css";
require "views/posts/edit.view.php";