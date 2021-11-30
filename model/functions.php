<?php 

require 'connection.php';

function getArticles() {
    $db = dbconnect();
    $contacts = $db->query('SELECT * FROM articles');
    $results = $contacts->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}


function getArticlesById($id){
    $db = dbconnect();
    $resultat = $db->query("SELECT * FROM articles WHERE articles.id ='$id'");
    $article = $resultat->fetch(PDO::FETCH_ASSOC);
    return $article;
}

function addArticle($title, $content, $img, $auteur_id, $video){
    $db = dbconnect();
    $newArticle = $db->query("INSERT INTO articles() VALUES (null, '$title', '$content', '$img', '$auteur_id', '$video')");
}

?>