<?php 

require 'connection.php';

function getpseudoauteur() {
    $db = dbconnect();
    $contacts = $db->query('SELECT * FROM `auteurs`');
    $results = $contacts->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

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
    $article = $db->query('SELECT `date_de_publication` FROM `articles` WHERE articles.id='.$id);
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

function addArticle($image, $title, $content, $date_de_publication, $auteur_id, $video){
    $db = dbconnect();
    $newContact = $db->query("INSERT INTO `articles`(`id`, `image`, `title`, `content`, `date_de_publication`, `auteur_id`, `video`) VALUES (null, '$image', '$title', '$content', '$date_de_publication', '$auteur_id', '$video')");
    $last = $db->lastInsertId();
    return $last;
}

function getcategories(){
    $db = dbconnect();
    $categorie = $db->query('SELECT * FROM categories');
    $results = $categorie->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function addarticlecategorie($categorie, $last){
    $db = dbconnect(); 
    $newarticlecatrgorie = $db->query("INSERT INTO categories_articles (`id`, `id_article`, `id_categorie`) VALUES (NULL, '$last', '$categorie')");
}

?>