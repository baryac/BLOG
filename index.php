<?php 
require 'partials/header.php';
require 'model/functions.php';

$results = getArticles();
$pseudos = getpseudoauteur();
$ccategories = getccategories()
?>

<div class="row bg-primary mb-2">
    <div class="col-2 mt-4 mx-1">
          <span class="text-white">  Bonjour <?php echo $_SESSION['pseudo'] ?></span>
     </div>
    <div class="col-5 text-white fs-1 fw-bold ">
        <p class="text-center">Mon blog de foot</p>  
    </div>
    <div class="col-4 mt-3">
            <button type="submit"  id="submit" class="btn btn-dark  mb-2"> <a href="login.php" class="text-decoration-none"> <span class="text-white">Connection </span></a></button>
            <button type="submit"  id="submit" class="btn btn-dark  mb-2"> <a href="logout.php" class="text-decoration-none"> <span class="text-white">Déconnection </span></a></button>
            <button type="submit"  id="submit" class="btn btn-dark  mb-2"> <a href="register.php" class="text-decoration-none"> <span class="text-white">Inscription </span></a></button>
       </div>
</div>




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

<div class="container">
    <div class="row bg-light" id="=cardindex">
            <p class="text-center fs-3">
                Nos auteurs
            </p> 
            <?php foreach($pseudos as $pseudo){ ?>
                <div class="col-3 mt-2">
                    <div class="text-center"><?php echo $pseudo['pseudo']?></div>
                    <a href="listearticles.php?id=<?php echo $pseudo['id'] ?>" class="btn btn-dark col-12 mt-2">Lire les articles</a>
                </div> 
            <?php } ?>
    </div>   
</div> 

<div class="container">
    <div class="row bg-light mt-4" id="=cardindex">
            <p class="text-center fs-3">
                Nos catégories
            </p> 
            <?php foreach($ccategories as $ccategorie){ ?>
                <div class="col-3 mt-2">
                    <div class="text-center"><?php echo $ccategorie['nom_category']?></div>
                    <a href="listecategories.php?id=<?php echo $ccategorie['id'] ?>" class="btn btn-dark col-12 mt-2">Lire les articles</a>
                </div> 
            <?php } ?>
    </div>   
</div> 

 

<?php require 'partials/footer.php';
?>
