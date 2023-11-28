<?php require 'View/includes/header.php'?>

<?php var_dump($articles) ?>
<section>
    <h1><?= $article->getTitle() ?></h1>
    <p><?= $article->getpublishDate() ?></p>
    <p><?= $article->getDescription() ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="index.php?page=articles-show<?= $article->getId()-1;?>">Previous article</a>
    <a href="index.php?page=articles-show<?= $article->getId()+1;?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>
