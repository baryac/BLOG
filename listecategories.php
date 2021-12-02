<?php 

$id = $_GET['id'];

require 'model/functions.php';
require 'partials/header.php'; 

$articleall = getArticlesAllById($id);

?>