<?php require 'View/includes/header.php'?>

<?php var_dump($articles) ?>
<section>
    <h1><?= $article->getTitle() ?></h1>
    <p><?= $article->getpublishDate() ?></p>
    <p><?= $article->getDescription() ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="#">Previous article</a>
    <a href="#">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>
