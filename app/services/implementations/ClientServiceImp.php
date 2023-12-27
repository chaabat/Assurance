<?php

class ClientServiceImp implements ClientServiceI
{

    private $db;


    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function getAllClients()
    {
        try {
            $fetchUsers = "SELECT * FROM client ";
            $this->db->query($fetchUsers);
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function getClientById($idClient)
    {
        $clientData = "select * from client where id_client = :id_client";
        $this->db->query($clientData);
        $this->db->bind(":id_client", $idClient);
        try {
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }


    }

    public function addClient(Client $client)
    {
        // $clId = $client->getIdClient();
        $addAdressQuery = "INSERT INTO `client`(`nom`, `prenom`, `adress`) VALUES(:nom,:prenom,:adress)";
        $this->db->query($addAdressQuery);

        // $this->db->bind(":id_client", $clId);
        $this->db->bind(":nom", $client->getNom());
        $this->db->bind(":prenom", $client->getPrenom());
        $this->db->bind(":adress", $client->getAdress());



        try {
            $this->db->execute();
            echo "added";
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function removeClient($removeClient)
    {
        $remove = "DELETE FROM client WHERE id_client = :id_client";
        $this->db->query($remove);
        $this->db->bind(":id_client", $removeClient);

        try {
            $this->db->execute();
            echo "updated";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function updateClient(Client $client)
    {
        $updateClient = "UPDATE `client` SET `nom`=:nom,`prenom`= :prenom,`adress`= :adress WHERE id_client = :id_client";
        $this->db->query($updateClient);
        $this->db->bind(":nom", $client->getNom());
        $this->db->bind(":prenom", $client->getPrenom());
        $this->db->bind(":adress", $client->getAdress());
        $this->db->bind(":id_client", $client->getIdClient());
        try {
            $this->db->execute();
            echo "updated";
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

}

?>