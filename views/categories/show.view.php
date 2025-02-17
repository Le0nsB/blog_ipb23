<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1><?= htmlspecialchars($post["category_name"]) ?></h1>
<a href="edit?id=<?= $post["id"] ?>" class="edit"><p>Edit </p><img src="/pencil.png"></a> 
<form action="/categories/delete" method="POST">
    <input name="id" value = "<?= $post["id"] ?>" type="hidden"/>
    <button>Dzest<img src="/trash.png"></button>
</form>
<?php require "views/components/footer.php" ?>