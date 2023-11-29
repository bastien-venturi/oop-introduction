<?php

function connectDb()
{

    //Chemin vers le fichier .env
    $envFile = __DIR__ . '/../.idea/.env';

    // Charger les variables d'environnement depuis le fichier .env
    $envVariables = parse_ini_file($envFile);

    // Récupérer les valeurs
    $dbServer = $envVariables['DB_SERVER'];
    $dbUsername = $envVariables['DB_USERNAME'];
    $dbPassword = $envVariables['DB_PASSWORD'];

    try {
        $conn = new PDO("mysql:host=$dbServer;dbname=articles", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
}

