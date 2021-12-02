<?php 

require 'model/functions.php';
require 'partials/header.php'; 

if(isset($_POST)){

    if(isset($_FILES)&& !empty($_FILES)){
        var_dump($_FILES); 
        $uploaddir = 'img'; //le répertoire qui récupèrera les fichiers envoyés
        foreach($_FILES as $element){ //on boucle sur le tableau $_FILES et POUR CHAQUE ELEMENT
            $name = $element['name'];// on récupère son nom pour aller chercher l'extension
            $ext = substr($name, strrpos($name, "."));// on va chercher l'extension à partir du nom et de la position du dernier "."
            $tmp = $element['tmp_name'];// le nom temporaire de l'image (dossier temporaire + nom aléatoire)
            $uniqname = uniqid();// pour éviter qu'un fichier écrase un homonyme on le renomme avec une chaine de caractère aléatoire
            move_uploaded_file($tmp, "$uploaddir/$uniqname"."$ext");// on le déplace de son emplacement temporaire à sa destination finale
        }
    }

    $title = $_POST['title'];
    $date_de_publication = $_POST['date_de_publication'];
    $content = $_POST['content'];
    $image = "$uploaddir/$uniqname"."$ext";
    $auteur_id = $_POST['auteur_id'];
    $video = $_POST['video'];
    $categorie = $_POST['categorie'];
}

$auteursss = getAuteurs();
$categories = getcategories();
$last = addArticle($image, $title, $content, $date_de_publication, $auteur_id, $video);

foreach ($categorie as $element){
    addarticlecategorie($element, $last);
}

?>

<div class="container bg-light p-2">
    <form action="" method="post" enctype='multipart/form-data'>
                    <p class="text-center fs-1">Nouvel Article</p>
                        <label for="name">Titre</label>
                        <input type="text" name="title" class="form-control" id="title">
                        <label for="date de publication">Date de publication</label>
                        <input type="datetime-local" name="date de publication" class="form-control" id="date_de_publication">
                        <label for="image">Photo</label>
                        <input type="file" name="image" id="FILES" class="form-control"> 
                        <label for="name">Content</label>
                        <input type="textarea" name="content" class="form-control" id="content">
                        <div class="my-2">
                            <select name="auteur_id" id="auteur_id" class="form-select mt-">
                                    <option selected>L'auteur de l'article</option>
                                    <?php foreach($auteursss as $auteur){ ?>
                                        <option value="<?php echo $auteur['id']; ?>"><?php echo $auteur['pseudo']?></option>
                                    <?php } ?>
                            </select>  
                        </div>
                        <label for="name">Video</label>
                        <input type="text" name="video" class="form-control" id="video">
                        <div>
                            <label for="inputState">Catégories</label>
                        </div>
                        <?php foreach($categories as $categorie){ ?>
                            <input class="form-check-input" type="checkbox" name="categorie[]" id="<?php echo $categorie['id'];?>" value="<?php echo $categorie['id'];?>">
                            <label class="form-check-label" for="categories"><?php echo $categorie['nom_category'];?></label>
                        <?php } ?>
                    <div>

        <div class="mt-4">
            <button type="submit" id="submit" class="btn btn-primary col-12">Envoyer</button>
        </div>
        <div class="form-group my-3">
            <button type="submit"  id="submit" class="btn btn-warning col-12"> <a href="index.php" class="text-decoration-none"> <span class="text-white"> Revenez à la page d'accueil</span></a></button>
        </div>
    </form>
</div>
<!-- 
        <div class="row mt-2">
                    <div class="col-12">
                        <label for="video">Video</label>
                        <input type="textarea" name="video" class="form-control" id="video">
                    </div>
        </div>
        <div class="row mt-2">
                    <div class="col-12">
                        <label for="auteur_id">Auteur</label>
                        <input type="textarea" name="auteur_id" class="form-control" id="auteur_id">
                    </div>
        </div>






<?php 
    require 'partials/footer.php'; 
?>