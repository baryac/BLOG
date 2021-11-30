<?php 

require 'connection.php';

function getArticles() {
    $db = dbconnect();
    $contacts = $db->query('SELECT * FROM articles');
    $results = $contacts->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getArticlesImageById5($id){
    $db = dbconnect();
    $article = $db->query('SELECT `image` FROM `articles` WHERE articles.id='.$id);
    $results = $article->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function getArticlesTitleById7($id){
    $db = dbconnect();
    $article = $db->query('SELECT `title` FROM `articles` WHERE articles.id='.$id);
    $results = $article->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function getArticlesDateById4($id){
    $db = dbconnect();
    $article = $db->query('SELECT `date de publication` FROM `articles` WHERE articles.id='.$id);
    $results = $article->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function getArticlestContentById($id){
    $db = dbconnect();
    $article = $db->query('SELECT `content` FROM `articles` WHERE articles.id='.$id);
    $results = $article->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function getArticlesAuteursById2($id){
    $db = dbconnect();
    $article = $db->query('SELECT `pseudo` FROM articles INNER JOIN `auteurs` ON articles.auteur_id = auteurs.id WHERE articles.id='.$id);
    $results = $article->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function getArticlesCategoriesarticlesById3($id){
    $db = dbconnect();
    $article = $db->query('SELECT `nom_category` FROM categories INNER JOIN categories_articles ON categories_articles.id_categorie = categories.id INNER JOIN articles ON categories_articles.id_article = articles.id WHERE articles.id='.$id);
    $results = $article->fetchAll(PDO::FETCH_ASSOC);
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