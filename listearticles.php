<?php 

$id = $_GET['id'];

require 'model/functions.php';
require 'partials/header.php'; 

$articleall = getArticlesAllById($id);

?>  

<div class="container bg-light">
    <div class="row p-2">
        <?php foreach($articleall as $articleal){ ?>
                    <div class="col-4 mt-2">
                            <img src="<?php echo $articleal['image']?>" class="card-img-top">
                        <h2 class="card-title"><?php echo $articleal['title']?></h2>
                        <spam class="card-text">
                            Date de publication: <?php echo $articleal['date_de_publication']?>
                        </spam>
                        <a href="single.php?id=<?php echo $articleal['id'] ?>" class="btn btn-dark col-12 mt-2">Lire l'article</a>

                    </div>
        <?php } ?>
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

