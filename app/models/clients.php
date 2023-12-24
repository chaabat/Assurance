<?php

class Clients
{

    private $id_client;
    private $nom;
    private $prenom;
    private $adress;

    public function __construct($id_client, $nom, $prenom, $adress)
    {
        $this->id_client = $id_client;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adress = $adress;

    }

    public function getIdClient()
    {
        return $this->id_client;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nome = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getAdress()
    {
        return $this->adress;
    }
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }



}
?>