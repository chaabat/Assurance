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
        // $asId = $assurence->getIdAssureurence(); 
        $addAdressQuery = "INSERT INTO `assureur`( `nom`,`adress`,`logo`) VALUES(:nom,:adress,:logo)";
        $this->db->query($addAdressQuery);

        // $this->db->bind(":id_assureur", getIdAssureurence());
        $this->db->bind(":nom", $assurence->getnom());
        $this->db->bind("adress", $assurence->getadress());
        $this->db->bind("logo", $assurence->getLogo());




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
        $updateAssur = "UPDATE `assureur` SET `nom`=:nom,`adress`= :adress WHERE id_assureur = :id_assureur";
        $this->db->query($updateAssur);
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