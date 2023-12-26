<?php

class AssureServiceImp implements AssureServiceI
{
  private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function getAllAssurence(){
        try {
            $fetchass = "SELECT * FROM assureur ";
            $this->db->query($fetchass);
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function getAssurencetById($idAssurence)
    {
        $assurData = "select * from assureur where id_assureur = :id_assureur";
        $this->db->query($assurData);
        $this->db->bind(":id_assureur", $idAssurence);
        try {
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
      


    }

    public function addAssurence(Assurence $assurence)
    {
        $asId = $assurence->id_assureur;
        $addAdressQuery = "INSERT INTO `assureur`(`id_assureur`, `nom`,`adress`) VALUES(:id_assureur,:nom,:adress)";
        $this->db->query($addAdressQuery);

        $this->db->bind(":id_assureur", $asId);
        $this->db->bind(":nom", $assurence->nom);
        $this->db->bind("adress", $assurence->adress);



        try {
            $this->db->execute();
            echo "added";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
      
    }

    public function removeAssurence($removeAssurence)
    {
        $remove = "DELETE FROM assureur WHERE id_assureur = :id_assureur";
        $this->db->query($remove);
        $this->db->bind(":id_assureur", $removeAssurence);

        try {
            $this->db->execute();
            echo "Deleted";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
    }

    public function updateAssurence(Assurence $assurence)
    {
        $UpdateAssur = "UPDATE `assureur` SET `nom`= :nom,`adress`=:adress, WHERE id_assureur = :id_assureur";
        $this->db->query($UpdateAssur);
        $this->db->bind(":nom", $assurence->getNom());
        $this->db->bind(":adress", $assurence->getAdress());
        $this->db->bind(":id_assureur", $assurence->getIdAssureur());
        try {
            $this->db->execute();
            echo "updated";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
       

    }

}


?>