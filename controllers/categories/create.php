<?php

require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (!Validator::string($_POST["category_name"], max: 50)) {
        $errors["category_name"] = "Saturam jābūt ievadītam bet īsākam par 50 rakstzīmēm.";
        
    } elseif (empty($errors)) {
        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $_POST["category_name"]];
        $db->query($sql, $params);
        header("Location: /categories/index");
        exit();
    }
}
$pageTitle = "Create";
$style = "/css/create.style.css";
require "views/categories/create.view.php";
?>