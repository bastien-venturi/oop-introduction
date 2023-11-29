<?php require 'View/includes/header.php'?>

<?php var_dump($articles)?>

<section>
    <h1><?= $articleDetails->getTitle() ?></h1>
    <p><?= $articleDetails->getpublishDate() ?></p>
    <p><?= $articleDetails->getDescription() ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="index.php?page=articles-show<?= $articleDetails->getId()-1;?>">Previous article</a>
    <a href="index.php?page=articles-show<?= $articleDetails->getId()+1;?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>
