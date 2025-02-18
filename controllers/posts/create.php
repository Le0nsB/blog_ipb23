<?php

require "Validator.php";
//Dabu visus datus no datubazes un ieliek masīvā $categories
//Atceries ja vajag vienu ierakstu lieto fetch() bet ja vajag visus ierakstus lieto fetchall()
$sql = "SELECT * FROM categories";
$categories = $db->query($sql, [])->fetchall();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    //Parbauda vai ir ievadits un garaks par 50
    if (!Validator::string($_POST["content"], max: 50)) {
        // Ja errors ir tukšs tad tiek ielikts datubāzē bet ja masīvā ir kautkas iekšā tad neatļauj sūtīt uz datubazi
        $errors["content"] = "Saturam jābūt ievadītam bet īsākam par 50 rakstzīmēm.";
    }
    //Parbauda vai category_id ir tukšs un ja tas ir skaitlis
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
