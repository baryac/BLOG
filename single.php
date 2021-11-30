<?php 

$id = $_GET['id'];

require 'model/functions.php';
require 'partials/header.php'; 

$articleimage = getArticlesImageById5($id);
$articletitle = getArticlesTitleById7($id);
$articledate = getArticlesDateById4($id);
$articlecontent = getArticlestContentById($id);
$articleauteurs = getArticlesAuteursById2($id);
$articlecategories = getArticlesCategoriesarticlesById3($id);

?>  

<div class="container bg-light">
    <div class="row p-2">
        <div class="col-8 text-center">
                <img src="<?php echo $articleimage['image'];?>">
        </div>
        <div class="col-4">
                    <p>
                        <span class="fs-5"> Titre:</span> <?php echo $articletitle['title'];?>
                    </p>
                    <p> 
                        <span class="fs-5">Date de publication:</span>  <?php echo $articledate['date de publication'];?>
                    </p>
                    <p> 
                    <span class="fs-5"> Article: </span><?php foreach($articlecategories as $article0){echo $article0['nom_category'];} ?>
                    </p>
        </p>
        </div>
    </div>
    <div class="row m-2 p-2">
        <p>
            <span class="fs-5"> Votre article: </span>  <?php echo $articlecontent['content'];?>
        </p>
        <p> 
            <span class="fs-5"> Auteur: </span> <?php echo $articleauteurs['pseudo'];?>
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="form-group my-4">
                    <button type="submit"  id="submit" class="btn btn-danger col-12"> <a href="index.php" class="text-decoration-none"> <span class="text-white"> Supprimez l'article</span></a></button>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group my-4">
                    <button type="submit"  id="submit" class="btn btn-warning col-12"> <a href="index.php" class="text-decoration-none"> <span class="text-white"> Revenez à la page d'accueil</span></a></button>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group my-4">
                    <button type="submit"  id="submit" class="btn btn-primary col-12"> <a href="newarticles.php" class="text-decoration-none"> <span class="text-white"> Cliquez pour entrez un nouvel article</span></a></button>
            </div>
        </div>
    </div>

</div>

<?php
require 'partials/footer.php';
?>

