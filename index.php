<?php 
require 'partials/header.php';
require 'model/functions.php';

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
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <div class="form-group my-4">
            <button type="submit"  id="submit" class="btn btn-dark col-12"> <a href="newsmembers.php" class="text-decoration-none"> <span class="text-white">Nouvel article</span></a></button>
        </div>
    </div>    
 

    <?php require 'partials/footer.php';
    ?>
