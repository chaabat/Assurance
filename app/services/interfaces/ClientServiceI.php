<?php


interface ClientServiceI{


    public function getAllClients() ;


    public function getClientById($idClient);

    public function addClient(Client $client);

    public function removeClient($removeClient);

    public function updateClient(Client $client);
}

?>