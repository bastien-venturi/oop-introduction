<?php
declare(strict_types = 1);

class AuthorController extends Controller
{
    public function index()
    {
        // TODO: Préparez la connexion à la base de données (vous pouvez utiliser PDO, par exemple)
        require './queries/connectDb.php';
        $pdo = connectDb();
        
        // TODO: Remplacez la requête suivante par une requête SQL réelle pour récupérer les articles depuis la base de données
        $statement = $pdo->prepare("SELECT DISTINCT auteurs.Author_Name, articles.* FROM articles LEFT JOIN auteurs ON articles.Article_Author_id = auteurs.Author_id GROUP BY auteurs.Author_Name ORDER BY auteurs.Author_Name ASC");
        $statement->execute();
    
        // Récupérez tous les articles sous forme de tableau associatif
        $rawArticles = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            $articles[] = new Article($rawArticle['id_article'], $rawArticle['title'], $rawArticle['description_article'], $rawArticle['publish_date'], $rawArticle['Author_Name']);
        }
    
        // require 'View/articles/author.php';
        $this->render('articles/author', ['articles' => $articles]);
        
    }

    public function showByAuthor($authorName)
    {
        // Load all required data
        $articles = $this->getArticles();
        $authorDetails = $this->getArticleByAuthor($authorName, $articles);

        if ($authorDetails === null) 
        {
            header("Location: index.php");
            exit;

        }    
            // require 'View/articles/author.php';
            $this->render('articles/author', ['articleDetails' => $authorDetails, 'authorName' => $authorName]);
    }

}
