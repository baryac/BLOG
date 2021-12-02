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
$commentaires = afficherCommentaires($id);
<<<<<<< HEAD


=======
//var_dump($commentaires);


/*while($c = $commentaires->fetch()){
 $c=['pseudo'] ; $c=['contenu'];
}*/
>>>>>>> c32f5dbb28a350c7535195ab6965282d15956f54

if(isset($_POST['submit_contenu'])){
    if(isset($_POST['pseudo'],$_POST['contenu']) AND !empty($_POST['pseudo']) AND !empty($_POST['contenu'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $contenu = htmlspecialchars($_POST['contenu']);
        if(strlen($pseudo)<15){
            $db = dbconnect();
            $ins = $db->prepare("INSERT INTO commentaires(pseudo,contenu,article_id) VALUES(?, ?, ?)");
            $ins->execute(array("$pseudo","$contenu","$id"));
            $c_msg= "<span style='colore:green'>votre commentaire a bien été envoyer</span>";
            header("location:single.php?id=$id");
        }elseif(strlen($pseudo > 15)){
            $c_msg = "erreur: pseudo doit pas depasser 15 caracteres";
        }else{
            $c_msg = "erreur: tous les champs doit etre completes";
        }
    }
}   

if(isset($c_msg)){
    echo $c_msg;
}
<<<<<<< HEAD
?>
=======
?> 

>>>>>>> c32f5dbb28a350c7535195ab6965282d15956f54



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
                <span class="fs-5">Date de publication:</span>  <?php echo $articledate['date_de_publication'];?>
            </p>
            <p> 
                <span class="fs-5"> Article: </span><?php foreach($articlecategories as $article0){echo $article0['nom_category'];} ?>
            </p>
                    <p>
                        <span class="fs-5"> Titre:</span> <?php echo $articletitle['title'];?>
                    </p>
                    <p> 
                        <span class="fs-5">Date de publication:</span>  <?php echo $articledate['date_de_publication'];?>
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
<<<<<<< HEAD

    <div>
        <?php foreach($commentaires as $ligne){ ?>
            <div>
                <p class="badge bg-primary text-wrap fw-bold fs-4" style="width: 6rem;"><?php echo $ligne['pseudo']?></p>
                <p><?php echo $ligne['date_comment']?></p>
                <p class="text-break fst-italic"><?php echo $ligne['contenu']?></p> 
            </div>
            
        <?php } ?>
    </div> 
        <div>
            <form id="fromz" method="post" action="">
                <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo..." maclength="20" /><br />
                <!-- <label for="titre">Date : </label><input type="date" name="date_comment" id="date_comment" placeholder="..." maxlength="50" /><br />-->
                <label for="contenu">Commentaire : </label><br /><textarea name="contenu" id="contenu" placeholder="laissez vos commentaires ici..."></textarea><br />
                <input type="submit" class="btn btn-primary" value="Envoyer" name="submit_contenu" />
            </form>
        </div>
    </div>
    </div>

=======
    <div>
    <?php foreach($commentaires as $ligne){ ?>
        <div>
            <p class="badge bg-primary text-wrap fw-bold fs-4" style="width: 6rem;"><?php echo $ligne['pseudo']?></p>
            <p><?php echo $ligne['date_comment']?></p>
            <p class="text-break fst-italic"><?php echo $ligne['contenu']?></p> 
        </div>
        
    <?php } ?>
</div> 
    <div>
        <form id="fromz" method="post" action="">
            <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo..." maclength="20" /><br />
            <!-- <label for="titre">Date : </label><input type="date" name="date_comment" id="date_comment" placeholder="..." maxlength="50" /><br />-->
            <label for="contenu">Commentaire : </label><br /><textarea name="contenu" id="contenu" placeholder="laissez vos commentaires ici..."></textarea><br />
            <input type="submit" class="btn btn-primary" value="Envoyer" name="submit_contenu" />
        </form>
    </div>
</div>
>>>>>>> c32f5dbb28a350c7535195ab6965282d15956f54

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

