<?php 
require 'partials/header.php';
require 'model/functions.php';

$results = getArticles();
$pseudos = getpseudoauteur();
?>

<div class="row bg-primary mb-2 text-white fs-1 fw-bold ">
      <p class="text-center">Mon blog de foot</p>  
</div>

        <!-- 
        <div class="col-6 text-white">
                   <div> 
                        <?php foreach($pseudos as $pseudo){ ?>
                            <div class="">
                                auteur : <?php echo $pseudo['pseudo']?>
                            </div>
                        <?php } ?>
                    </div>
        </div>
        -->

<div class="container">

    <div class="row" id="=cardindex">
        <?php foreach($results as $result){ ?>
            <div class="col-3 mt-2">
                <div class="card text-center">
                    <img src="<?php echo $result['image']?>" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $result['title']?></h2>
                        <spam class="card-text">Date de publication: <?php echo $result['date_de_publication']?></spam>
                        <a href="single.php?id=<?php echo $result['id'] ?>" class="btn btn-dark mt-2">Lire l'article</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
        <div class="form-group my-4">
            <button type="submit"  id="submit" class="btn btn-dark col-12"> <a href="newarticles.php" class="text-decoration-none"> <span class="text-white">Nouvel article</span></a></button>
        </div>
    </div>    

</div>    
 

<?php require 'partials/footer.php';
?>
