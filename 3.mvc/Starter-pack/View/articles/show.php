<?php require 'View/includes/header.php'?>

<section>
    <h1><?= $articleDetails->getTitle() ?> - By : <?= $articleDetails->getAuthor() ?></h1>
    <h4>Published on: <?= $articleDetails->getPublishDate() ?></h4>
    <p><?= $articleDetails->getDescription() ?></p>

    <a href="index.php?page=articles-show&id=<?= $articleDetails->getId()-1;?>">Previous article</a>
    <a href="index.php?page=articles-show&id=<?= $articleDetails->getId()+1;?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>
