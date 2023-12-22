<?php

require_once ('config.php');

try {

    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "connected successfully";
}catch(PDOException $e){
    echo "error: ".$e->getMessage ;
}


$assureur = "CREATE TABLE IF NOT EXISTS assureur(
    id_assureur INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    adress VARCHAR(255) NOT NULL
)";




$client = "CREATE TABLE IF NOT EXISTS client(
    id_client INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    adress VARCHAR(255) NOT NULL
)";

// $pdo->exec($client);


$assureur_client = "CREATE TABLE IF NOT EXISTS assureur_client(
    id_assureur INT NOT NULL,
    FOREIGN KEY (id_assureur) REFERENCES assureur(id_assureur) ON DELETE CASCADE,
    id_client INT NOT NULL,
    FOREIGN KEY (id_client) REFERENCES client(id_client) ON DELETE CASCADE
    )";

    // $pdo->exec($assureur_client);


$article = "CREATE TABLE IF NOT EXISTS article(
    id_article INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    id_assureur INT NOT NULL,
    id_client INT NOT NULL,
    FOREIGN KEY (id_assureur) REFERENCES assureur(id_assureur) ON DELETE CASCADE,
    FOREIGN KEY (id_client) REFERENCES client(id_client) ON DELETE CASCADE    
)";

// $pdo->exec($article);

$claim = "CREATE TABLE IF NOT EXISTS claim(
    id_claim INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    objet VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    id_article INT NOT NULL,
    FOREIGN KEY (id_article) REFERENCES article(id_article) ON DELETE CASCADE
)";

// $pdo->exec($claim);



$prime = "CREATE TABLE IF NOT EXISTS prime(
    id_prime INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    montant VARCHAR(255) NOT NULL,
    id_claim INT NOT NULL,
    FOREIGN KEY (id_claim) REFERENCES claim(id_claim) ON DELETE CASCADE
)";

// $pdo->exec($prime);
 

