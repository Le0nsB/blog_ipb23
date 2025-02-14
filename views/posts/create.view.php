<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveidot bloga ierakstu</h1>
<form method="POST">
    <label>
        <input class="create" name="content" value="<?= htmlspecialchars($_POST['content'] ?? '') ?>" /><button type="submit" class="create"><span>ಠ_ಠ</span></button>
        <select>
            <?php foreach ($categories as $category_name) {
                
              }
            ?>
        </select>
    </label>
    <?php if(isset($errors["content"])) { ?>
       <p><?= htmlspecialchars($errors["content"]) ?></p>
     <?php } ?>
</form>

<?php require "views/components/footer.php" ?>
