<?php

class Client
{

    private $id_client;
    private $nom;
    private $prenom;
    private $adress;

    public function __construct()
    {
       

    }

    public function getIdClient()
    {
        return $this->id_client;
    }
    public function setIdClient($value)
    {
        return $this->id_client = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
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