<?php

class Claim
{
    private $id_claim;
    private $objet;
    private $description;
    private $id_article;

    public function __construct()
    {
        
    }

    public function getIdClaim()
    {
        return $this->id_claim;
    }

    public function getObjet()
    {
        return $this->objet;
    }
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getIdArticle()
    {
        return $this->id_article;
    }
    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;
    }

}
?>