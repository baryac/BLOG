<?php 

require 'connection.php';

function getArticles() {
    $db = dbconnect();
    $contacts = $db->query('SELECT * FROM articles');
    $results = $contacts->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}


?>