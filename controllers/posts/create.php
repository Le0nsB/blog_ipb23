<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (!isset($_POST["content"]) || strlen($_POST["content"]) == 0) {
        $errors["content"] = "Saturam jābūt ievadītam.";
    } elseif (strlen($_POST["content"]) > 50) {
        $errors["content"] = "Saturam jābūt ne garākam par 50 rakstzīmēm.";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $db->query($sql, $params);
        header("Location: /");
        exit();
    }
}

$pageTitle = "Create";
$style = "css/create.style.css";
require "views/posts/create.view.php";
