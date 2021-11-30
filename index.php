<?php 
require 'partials/header.php';
require 'model/functions.php';

<<<<<<< HEAD
$results = getArticles();?>





    <p class="namesite">MON BLOG</p>



    <div class="container">
        <div class="row text-white fs-1 fw-bold text-center mb-2">
            <span  class="text-center" >blog foot</span> 
        </div>
        <div class="row" id="=cardindex">
            <?php foreach($results as $result){ ?>
                <div class="col-3 mt-2">
                    <div class="card text-center">
                        <img src="<?php echo $result['image']?>" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $result['title']?></h2>
                            <spam class="card-text">Date de publication: <?php echo $result['date de publication']?></spam>
                            <a href="single.php?id=<?php echo $result['id'] ?>" class="btn btn-dark">Lire l'article</a>
                        </div>
=======
$results = getArticles();
?>



<div class="container">
    <div class="row text-white fs-1 fw-bold text-center mb-2">
        <span  class="text-center" >Mon blog de foot</span> 
    </div>
    <div class="row" id="=cardindex">
        <?php foreach($results as $result){ ?>
            <div class="col-3 mt-2">
                <div class="card text-center">
                    <img src="<?php echo $result['image']?>" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $result['title']?></h2>
                        <spam class="card-text">Date de publication: <?php echo $result['date de publication']?></spam>
                        <a href="single.php?id=<?php echo $result['id'] ?>" class="btn btn-dark mt-2">Lire l'article</a>
>>>>>>> b14d66b7564a3ae5ef4015dd6d2efca5e9c9bf0e
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <div class="form-group my-4">
        <button type="submit"  id="submit" class="btn btn-dark col-12"> <a href="newarticles.php" class="text-decoration-none"> <span class="text-white">Nouvel article</span></a></button>
    </div>
</div>    
 

<?php require 'partials/footer.php';
?>
