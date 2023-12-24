<?php

class assureur_client
{
    private $id_assureur;
    private $id_client;

    public function __construct($id_assureur, $id_client)
    {
        $this->id_assureur = $id_assureur;
        $this->id_client = $id_client;
    }

    public function getId_assureur()
    {
        return $this->id_assureur;
    }
    public function getId_client()
    {
        return $this->id_client;
    }

}
?>