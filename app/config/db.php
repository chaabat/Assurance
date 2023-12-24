<?php

require_once ('config.php');

class Database
{
    private $host = DB_HOST;
    private $dbname= DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $pdo;

    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connected successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
    }

    public function getPdo()
    {
        return $this->pdo;
    }
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
 

