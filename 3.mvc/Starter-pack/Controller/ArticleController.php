<?php

declare(strict_types = 1);

class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
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
    
        return $articles;
    }
    
    // public function show()
    // {
    //     // TODO: Préparez la connexion à la base de données (vous pouvez utiliser PDO, par exemple)
    //     require './queries/connectDb.php';
    //     $pdo = connectDb();
        
    //     // TODO: Remplacez la requête suivante par une requête SQL réelle pour récupérer les articles depuis la base de données
    //     $statement = $pdo->prepare("SELECT id_article, title, description_article, publish_date FROM articles");
    //     $statement->execute();

    //     // Récupérez tous les articles sous forme de tableau associatif
    //     $rawArticles = $statement->fetchAll(PDO::FETCH_ASSOC);

    //     $articles = [];
    //     foreach ($rawArticles as $rawArticle) {
    //         $articles[] = new Article($rawArticle['id_article'], $rawArticle['title'], $rawArticle['description_article'], $rawArticle['publish_date']);
    //     }

    // return $articles;
    // }
}