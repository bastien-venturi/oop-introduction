<?php require 'View/includes/header.php'?>

<section>
    <p><a href="index.php?page=articles-index">To articles page</a></p>

<ul>
    <?php foreach ($articles as $article): ?>            
        <ul>
            <h2><?= $article->getId();?>. <?= $article->getTitle(); ?></h2>        </ul>
            <?php endforeach; ?>
        </ul>

</section>

<?php require 'View/includes/footer.php'?>
