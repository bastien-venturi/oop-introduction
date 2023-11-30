<?php require 'View/includes/header.php'?>

<ul>
    <?php foreach ($articles as $article): ?>            
        <li>
            <h2><a href="index.php?page=articles-authors&authors=<?= $article->getAuthor();?>"><?= $article->getAuthor();?></a></h2>        
        </li>
            <?php endforeach; ?>
</ul>

</section>

<?php require 'View/includes/footer.php'?>