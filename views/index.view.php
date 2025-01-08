<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
</body>
</html>
