<?php

class Article
{

    private $id_article;
    private $nom;
    private $id_assureur;
    private $id_client;

    public function __construct()
    {
       
    }
    public function getIdArticle()
    {
        return $this->id_article;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getId_assureur()
    {
        return $this->id_assureur;
    }
    public function setId_assureur($id_assureur)
    {
        $this->id_assureur = $id_assureur;
    }

    public function getId_client()
    {
        return $this->id_client;
    }

    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
    }

}

?>