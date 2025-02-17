<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

<h1>EDIT <?=$post["content"]?></h1>
<form method="POST">
    <label>
        <input name="id" value = "<?= $post["id"] ?>" type="hidden"/>
    </label>

    <label>
        <input class="create" name="content" value="<?= $post["content"] ?? '' ?>" />

        <select name="category_id" id="category_id">
          <option value="Izvelies">Izvelies
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>"
                <?= ($post["category_id"] == $category["id"]) ? "selected" : ""?>>
                <?= htmlspecialchars($category['category_name'])?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <button type="submit" class="create"><span>ಠ_ಠ</span></button>
    </label>
    
    <?php if(isset($errors["content"])) { ?>
       <p><?= htmlspecialchars($errors["content"]) ?></p>
     <?php } ?>
</form>

<?php require "views/components/footer.php"?>