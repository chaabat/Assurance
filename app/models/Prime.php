<?php

class Prime
{
    private $id_prime;
    private $montant;
    private $id_claim;

    public function __construct($id_prime, $montant, $d_claim)
    {
        $this->id_prime = $id_prime;
        $this->montant = $montant;
        $this->d_claim = $d_claim;
    }

    public function getIdPrime()
    {
        return $this->id_prime;
    }

    public function getMontant()
    {
        return $this->montant;
    }
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    public function getIdClaim()
    {
        return $this->id_claim;
    }
    public function setIdClaim($id_claim)
    {
        $this->id_claim = $id_claim;
    }

}
?>