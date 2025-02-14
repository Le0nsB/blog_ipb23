<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1>EDIT <?=$post["category_name"]?></h1>
<form method="POST">
    <label>
        <input name="id" value = "<?= $post["id"] ?>" type="hidden"/>
    
    </label>

    <label>
        <input class="create" name="category_name" value="<?= $post["category_name"] ?? '' ?>" />
        <button type="submit" class="create"><span>ಠ_ಠ</span></button>
    </label>
    
    <?php if(isset($errors["category_name"])) { ?>
       <p><?= htmlspecialchars($errors["category_name"]) ?></p>
     <?php } ?>
</form>

<?php require "views/components/footer.php"?>