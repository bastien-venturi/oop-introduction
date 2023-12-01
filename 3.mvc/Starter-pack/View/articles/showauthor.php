<?php require 'View/includes/header.php'?>

<section>
    <ul>
        <?php foreach ($articles as $authorDetails): ?>            
            <li>
                <h2><?= $authorDetails->getId();?>. <?= $authorDetails->getTitle(); ?></h2>
                <p>By: <?= $authorDetails->getAuthor();?></p>
                <p><?= $authorDetails->getDescription(); ?></p>
                <p>Published on: <?= $authorDetails->getPublishDate(); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="index.php?page=articles-show&authors=<?= $authorDetails->getId()-1;?>">Previous article</a>
    <a href="index.php?page=articles-show&authors=<?= $authorDetails->getId()+1;?>">Next article</a>

</section>

<?php require 'View/includes/footer.php'?>


