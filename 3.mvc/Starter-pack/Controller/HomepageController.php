<?php
declare(strict_types = 1);

class HomepageController
{
    public function index()
    {
        // TODO: Préparez la connexion à la base de données (vous pouvez utiliser PDO, par exemple)
        require './queries/connectDb.php';
        $pdo = connectDb();
        
        // TODO: Remplacez la requête suivante par une requête SQL réelle pour récupérer les articles depuis la base de données
        $statement = $pdo->prepare("SELECT id_article, title, description_article, publish_date FROM articles");
        $statement->execute();
    
        // Récupérez tous les articles sous forme de tableau associatif
        $rawArticles = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            $articles[] = new Article($rawArticle['id_article'], $rawArticle['title'], $rawArticle['description_article'], $rawArticle['publish_date']);
        }
    
        require 'View/home.php';
    }
}
