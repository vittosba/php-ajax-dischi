<?php
    require_once __DIR__ . '/script/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="./img/logo.png" alt="">
        </div>
    </header>

    <main>
        <div class="container">
            <ul>
                <?php foreach($database as $card) : ?>
                    <li>
                        <img src="<?php echo $card['poster'] ?>" alt="">
                        <h2><?php echo $card['title'] ?></h2>
                        <h4><?php echo $card['author'] ?></h4>
                        <h3><?php echo $card['year'] ?></h3>
                        <h4><?php echo $card['genre'] ?></h4>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>
</html>