
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>
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
        <li><a class="aij" href="show?id=<?= $post["id"] ?>"> <p><?= $post["content"] ?></p></a> </li>
      <?php } ?>
    </ul>
  </div>
<?php require "views/components/footer.php" ?>
