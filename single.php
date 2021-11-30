<<<<<<< HEAD
<?php require_once('model/functions.php'); 
$id = $_GET['id'];
$article = getArticlesById($id);
//var_dump($article);
?>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4 ratio ratio-16x9">
            <video src="<?php echo $article['video']; ?>" type="video/mp4" style="--bs-aspect-ratio: 50%;"></video>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $article['title'] . " " . $joueur['date de publication'] ?></h5>
                <p class="card-text"><?php echo $article['content'] ?></p>
                <p class="card-text"><small class="text-muted">Yacin.b</small></p>
            </div>
        </div>
    </div>
</div>
<form action="" method="post">
    <div class="input-group">
    <span class="input-group-text">Pseudo</span>
    <input type="text" aria-label="First name" class="form-control">
    </div>
    <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
    <label for="floatingTextarea">Comments</label>
    </div>
    <div>
        <label for="date">date de commentaire</label>
        <input type="date" name="date" id="date" class="form-control">
    </div>
</form>
=======
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

>>>>>>> b14d66b7564a3ae5ef4015dd6d2efca5e9c9bf0e
