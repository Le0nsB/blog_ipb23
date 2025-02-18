<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>
<h2><?= $post["category_name"] ?><h2>

<a href="edit?id=<?= $post["id"] ?>" class="edit"><p>Edit </p><img src="pencil.png"></a> 

<form action="/delete" method="POST">
    <input name="id" value = "<?= $post["id"] ?>" type="hidden"/>
    <button class="delete">Dzest<img src="trash.png" ></button>
</form>
<div>
    <h3>Komentari</h3>

    <div>
        <p>Kip komentars</p>
        <button action="/comments/edit">Edit</button>
        <button action="/comments/delete" class="delete">Delete</button>
    </div>

    <div>
        <input>:Autors</input>
        <input>:Komentars</input>
        <button action="/comments/create">Submit</button>
    </div>
</div>
<?php require "views/components/footer.php" ?>