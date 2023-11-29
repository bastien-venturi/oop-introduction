<?php require 'View/includes/header.php'?>

<section>
    <p><a href="index.php?page=articles-index">To articles page</a></p>

<ul>
    <?php foreach ($articles as $article): ?>            
        <li>
            <h2><a href="index.php?page=articles-show&id=<?= $article->getId();?>"><?= $article->getId();?>. <?= $article->getTitle(); ?></a></h2>        
        </li>
            <?php endforeach; ?>
</ul>

</section>

<?php require 'View/includes/footer.php'?>
