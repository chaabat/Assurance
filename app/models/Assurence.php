<?php



class Assurence
{


    private $id_assureur;
    private $nom;
    private $adress;

    public function __construct($id_assureur, $nom, $adress)
    {
        $this->$id_assureur = $id_assureur;
        $this->Name = $nom;
        $this->adress = $adress;


    }


    public function getId_assureur()
    {
        return $this->id_assureur;
    }
    public function setId_assureur($id_assureur)
    {
        return $this->id_assureur = $id_assureur;
    }

    public function getnom()
    {
        return $this->nom;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }

    public function getadress()
    {
        return $this->adress;
    }
    public function setadress($adress)
    {
        $this->adress = $adress;
    }
    

}


?>