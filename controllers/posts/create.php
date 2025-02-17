<?php

require "Validator.php";

$sql = 'SELECT * FROM categories';
$params = [];
$categories = $db->query($sql, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam bet īsākam par 50 rakstzīmēm.";
    }
    elseif (empty($errors)) {
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = ["content" => $_POST["content"], "ategory_id" => $_POST["category_id"] ?: null];
        $db->query($sql, $params);
        
        header("Location: /");
        exit();
    }
    
    
}

$pageTitle = "Create";
$style = "css/create.style.css";
require "views/posts/create.view.php";
?>