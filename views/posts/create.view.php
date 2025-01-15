<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveidot bloga ierakstu</h1>
<form method="POST">
    <label>
        <input name="content" value="<?= htmlspecialchars($_POST['content'] ?? '') ?>" />
    </label>
    <?php if(isset($errors["content"])) { ?>
       <p><?= htmlspecialchars($errors["content"]) ?></p>
     <?php } ?>
</form>

<?php require "views/components/footer.php" ?>
