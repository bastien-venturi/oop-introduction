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
        $statement = $pdo->prepare("SELECT articles.*,auteurs.Author_Name FROM articles LEFT JOIN auteurs ON articles.Article_Author_id = auteurs.Author_id");
        $statement->execute();
    
        // Récupérez tous les articles sous forme de tableau associatif
        $rawArticles = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            $articles[] = new Article($rawArticle['id_article'], $rawArticle['title'], $rawArticle['description_article'], $rawArticle['publish_date'], $rawArticle['Author_Name']);
        }
    
        require 'View/home.php';
    }
}
