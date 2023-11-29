<?php require 'View/includes/header.php'?>

<?var_dump($articleDetails);
        var_dump($articleId);?>



<section>
    <h1><?= $articleDetails->getTitle() ?></h1>
    <p><?= $articleDetails->getPublishDate() ?></p>
    <p><?= $articleDetails->getDescription() ?></p>

    <a href="index.php?page=articles-show&id=<?= $articleDetails->getId()-1;?>">Previous article</a>
    <a href="index.php?page=articles-show&id=<?= $articleDetails->getId()+1;?>">Next article</a>
</section>


<?php require 'View/includes/footer.php'?>
