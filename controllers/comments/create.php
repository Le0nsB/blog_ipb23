<?php

require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (!Validator::string($_POST["autors"], max: 50)) {
        $errors["autors"] = "Saturam jābūt ievadītam bet īsākam par 50 rakstzīmēm.";
    }
    elseif (empty($errors)) {
        $sql = "INSERT INTO comments (autors) VALUES (:autors)";
        $params = ["autors" => $_POST["autors"]];
        $db->query($sql, $params);
        header("Location: /posts/index");
        exit();
    }
}
?>