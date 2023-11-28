<!-- View/articles/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>
<?php require 'View/includes/header.php'?>
<body>
    <h1>Article List</h1>
    <!-- <?php var_dump($articles);?> -->
    <ul>
        <?php foreach ($articles as $article): ?>            
            <li>
                <h2><?= $article->getId();?>. <?= $article->getTitle(); ?></h2>
                <p><?= $article->getDescription(); ?></p>
                <p>Published on: <?= $article->getPublishDate(); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
<?php require 'View/includes/footer.php'?>
</html>
