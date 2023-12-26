<?php



class Assurence
{


    private $id_assureur;
    private $nom;
    private $adress;

    public function __construct()
    {
        

    }


    public function getIdAssureur()
    {
        return $this->id_assureur;
    }
    public function setIdAssureur($id_assureur)
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