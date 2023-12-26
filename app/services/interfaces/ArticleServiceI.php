<?php


interface ArticleServiceI{


    public function getAllArticle() ;


    public function getArticletById($idArticle);

    public function addArticle(Article $article);

    public function removeArticle($removeArticle);

    public function updateArticle(Article $article);
}

?>