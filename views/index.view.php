
<?php require "components/header.php";?>
<?php require "components/navbar.php"?>
  <h1>Logs</h1>
  <form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
    <button>🕵️‍♂️</button>
  </form>


  <?php if(count($posts) == 0){ ?>
    <p><?= $_GET["search_query"] ?> Nav atrasts</p>
  <?php } ?>

  <div>
    <ul>
      <?php foreach($posts as $post) { ?>
        <li> <?= $post["content"] ?> </li>
      <?php } ?>
    </ul>
  </div>
<?php require "components/footer.php" ?>
