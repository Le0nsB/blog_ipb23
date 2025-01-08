<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </html><h1>Logs</h1>
    <form>
        <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
        <button>🕵️‍♂️</button>
    </form>

    <?php if(count($categories) == 0){ ?>
        <p><?= $_GET["search_query"] ?> nav atrasts</p>
    <?php }; ?>

    <div>
        <ul>
            <?php foreach($categories as $category) { ?> 
            <li> <?= $category["category_name"] ?> </li>
            <?php } ?>
        </ul>
    </div>
</body>
