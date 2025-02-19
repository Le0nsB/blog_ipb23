<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>
<h2><?= $post["category_name"] ?><h2>
<div class="cont">
    <div>
        <a href="edit?id=<?= $post["id"] ?>" class="edit"><p>Edit </p><img src="pencil.png"></a> 

        <form action="/delete" method="POST">
            <input name="id" value = "<?= $post["id"] ?>" type="hidden" class="input"/>
            <button class="delete">Dzest<img src="trash.png" ></button>
        </form>
    </div>    
        <div>
            <p>Kip komentars</p>
            <a action="/comments/edit" class="edit">Edit<img src="pencil.png"></a>
            <button action="/comments/delete" class="delete">Dzest<img src="trash.png" ></button>
        </div>
        <div>
            <input class="input">Autors:</input>
            <input class="input">Komentars:</input>
            <button action="/comments/create" class="submit">Submit<img src="send.png" ></button>
        </div>
</div> 
<?php require "views/components/footer.php" ?>