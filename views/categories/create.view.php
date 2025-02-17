<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveidot kategoriju</h1>
<form method="POST">
    <label>
        <input class="create" name="category_name" value="<?= htmlspecialchars($_POST['category_name'] ?? '') ?>" /><button type="submit" class="create"><span>ಠ_ಠ</span></button>
    </label>
    <?php if(isset($errors["category_name"])) { ?>
       <p><?= htmlspecialchars($errors["category_name"]) ?></p>
     <?php } ?>
</form>

<?php require "views/components/footer.php" ?>