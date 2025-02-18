<?php

require "Validator.php";

$sql = "SELECT * FROM categories";
$categories = $db->query($sql, [])->fetchall();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam bet īsākam par 50 rakstzīmēm.";
    }
    if(!empty($_POST["category_id"]) && !Validator::number($_POST["category_id"])){
        $errors["category_id"] = "Nederigs kategorijas ID";
    }
    elseif (empty($errors)) {
        //Vaicājuma sagatavošana
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        //asociativais masīvs kurā tiek glabātas lietotāja ievadītās vērtības.
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"] ?: null];
        //Vaicājuma izpilde ar parametriem
        $db->query($sql, $params);
        
        header("Location: /");
        exit();
    }
}

$pageTitle = "Create";
$style = "css/create.style.css";
require "views/posts/create.view.php";
?>
