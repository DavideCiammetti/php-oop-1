<?php
    require_once __DIR__. '/movies.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>film 1</h3>
    <ul>
        <li>
            <p><?php echo $movieOne->nome ?></p>
        </li>
        <li>
           <p> <?php echo $movieOne->setDurata(180); ?></p>
        </li>
        <li>
            <p><?php var_dump($movieOne->genere); ?></p>
        </li>
        <li>
            <p><?php echo $movieOne->setAnnoUscita(2000); ?></p>
        </li>
    </ul>
    <h3>film 2</h3>
    <ul>
        <li>
            <?php echo $movieTwo->nome ?>
        </li>
        <li>
            <?php echo $movieTwo->setDurata(120); ?>
        </li>
        <li>
            <?php var_dump($movieTwo->genere); ?>
        </li>
        <li>
            <?php echo $movieTwo->setAnnoUscita(1985); ?>
        </li>
    </ul>
</body>
</html>