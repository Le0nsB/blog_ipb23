<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>
<a href="edit?id=<?= $post["id"] ?>" class="edit"><p>Edit</p></a> 
<form action="/delete" method="POST">
    <input name="id" value = "<?= $post["id"] ?>" type="hidden"/>
    <button>Dzest</button>
</form>
<?php require "views/components/footer.php" ?>