<?php


interface ArticleServiceI{


    public function getAllArticle() ;


    public function getArticletById($idArticle);

    public function addArticle(Assurence $article);

    public function removeArticle($removeArticle);

    public function updateArticle(Assurence $article);
}

?>