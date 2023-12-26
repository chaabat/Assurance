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
        $this->db->bind(":agencyId", $idArticle);
        try {
            return $this->db->single();
        } catch (PDOException $e) {
            die($e->getMessage());
        }


    }

    public function addArticle(Assurence $article){

    }

    public function removeArticle($removeArticle){


    }

    public function updateArticle(Assurence $article){

    }
    

}


?>