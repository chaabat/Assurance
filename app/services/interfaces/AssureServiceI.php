<?php


interface AssureServiceI{


    public function getAllAssurence() ;


    public function getAssurencetById($idAssurence);

    public function addAssurence(Assurence $assurence);

    public function removeAssurence($removeAssurence);

    public function updateAssurence(Assurence $assurence);
}

?>