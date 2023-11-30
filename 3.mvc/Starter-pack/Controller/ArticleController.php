<?php

declare(strict_types = 1);
require 'Controller.php';

class ArticleController extends Controller
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
        $statement = $pdo->prepare("SELECT articles.*,auteurs.name FROM articles LEFT JOIN auteurs ON articles.Author_id = auteurs.id");
        $statement->execute();
    
        // Récupérez tous les articles sous forme de tableau associatif
        $rawArticles = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            $articles[] = new Article($rawArticle['id_article'], $rawArticle['title'], $rawArticle['description_article'], $rawArticle['publish_date'], $rawArticle['name']);
        }
    
        return $articles;
    }

    private function getArticleByID($articleId , $articles)
    {
        foreach ($articles as $article) {
            if ($article->getId() === $articleId) {
                return $article;
            }
        }
    
        return null;
    }
    
    public function show($articleId)
    {
        // Load all required data
        $articles = $this->getArticles();
        $articleDetails = $this->getArticleByID($articleId, $articles);

        
        if ($articleDetails === null) 
        {
            header("Location: index.php");
            exit;

        }    
            // require 'View/articles/show.php';
            $this->render('articles/show', ['articleDetails' => $articleDetails, 'articleId' => $articleId]);
    }
}
 