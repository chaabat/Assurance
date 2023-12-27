<?php

class ArticleServiceImp implements ArticleServiceI
{
  private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function getAllArticle(){
        try {
            $fetcharticle = "SELECT * FROM article ";
            $this->db->query($fetcharticle);
            return $this->db->resultSet();
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
    public function getArticletById($idArticle){
        $assurData = "select * from article where id_article = :id_article ";
        $this->db->query($assurData);
        $this->db->bind(":id_article", $idArticle);
        try {
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }


    }

    public function addArticle(Article $article){
        // $asId = $article->id_assureur;
        $addAdressQuery = "INSERT INTO `article`( `nom`,`id_assureur`,`id_client`) VALUES(:nom,:id_assureur,:id_client)";
        $this->db->query($addAdressQuery);

        // $this->db->bind(":id_assurence", $asId);
        $this->db->bind(":nom", $article->getNom());
        // $this->db->bind(":id_assurence", $article->id_assureur);
        // $this->db->bind(":id_client", $article->id_client);




        try {
            $this->db->execute();
            echo "added";
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function removeArticle($removeArticle){
        $remove = "DELETE FROM article WHERE id_article = :id_article";
        $this->db->query($remove);
        $this->db->bind(":id_article", $removeArticle);

        try {
            $this->db->execute();
            echo "Deleted";
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function updateArticle(Article $article){
        $UpdateArticle = "UPDATE `article` SET `nom`= :nom, WHERE id_article = :id_article";
        
        $this->db->query($UpdateArticle);
        $this->db->bind(":id_article", $article->getIdArticle());
        $this->db->bind(":nom", $article->getNom());
        $this->db->bind(":id_assureur", $article->getId_assureur());
        $this->db->bind(":id_client", $article->getId_client());

        
        try {
            $this->db->execute();
            echo "updated";
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
    

}


?>