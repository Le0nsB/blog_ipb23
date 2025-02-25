<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveidot bloga ierakstu</h1>
<form method="POST">
    <label for="category_id">
        <!-- htmlspecialchars pasarga no uzbrukumiem piemeram ja ievada js vai html izvadis vnk tekstu -->
        <input class="create" name="content" value="<?= htmlspecialchars($_POST['content'] ?? '') ?>" />
        
        <select name="category_id" id="category_id">
          <option value="">Bez kategorijas</option>
          <?php foreach ($categories as $category): ?>
            <option value="<?= htmlspecialchars($category['id']) ?>"
              <?= (isset($_POST["category_id"]) && $_POST["category_id"] == $category["id"]) ? "selected" : ""?>>
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

<?php require "views/components/footer.php" ?>
