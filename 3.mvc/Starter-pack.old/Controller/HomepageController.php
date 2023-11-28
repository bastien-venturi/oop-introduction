<?php
declare(strict_types = 1);

class HomepageController
{
    public function index()
    {
        // Usually, any required data is prepared here
        // For the home, we don't need to load anything
        //Chemin vers le fichier .env
    $envFile = __DIR__ . '/../.idea/.env';

    // Charger les variables d'environnement depuis le fichier .env
    $envVariables = parse_ini_file($envFile);

    // Récupérer les valeurs
    $dbServer = $envVariables['DB_SERVER'];
    $dbUsername = $envVariables['DB_USERNAME'];
    $dbPassword = $envVariables['DB_PASSWORD'];

        try {
            $bdd = connectDb();
            $sql = 'SELECT articles (id_article, title, description_article, publish_date) VALUES (:idarticle, :title, :descriptionarticle, :publishdate)';
    
            $query = $bdd->prepare($sql);
            $query->execute(array(
                ':idarticle' => $idarticle,
                ':title' => $title,
                ':descriptionarticle' => $descriptionarticle,
                ':publishdate' => $publishdate
            ));
            header('Location: /');
            $bdd=null;        return $conn;
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
        // Load the view
        require 'View/home.php';
    }
}