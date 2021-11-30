<?php require 'partials/header.php' ?>

<?php require 'model/functions.php';

var_dump($_POST);
if(isset($_POST)){
    $img = $_POST['image'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date de publication'];
    $auteur_id = $_POST['numero'];
    $video = $_POST['video'];
    addArticle($title, $content, $img, $auteur_id, $video);
}
?>

<div class="container">
    <h1 class="text-center fs1">ajoute un nouveaux article</h1>
    <form action="" method="post">
        <div>
            <label for="title">title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div>
            <label for="content">content</label>
            <input type="text" name="content" id="content" class="form-control">
        </div>
        <div>
            <label for="numero">id</label>
            <input type="text" name="numero" id="numero" class="form-control">
        </div>
        <div>
            <label for="image">Photo</label>
            <input type="text" name="image" id="image" class="form-control">
        </div>
        <div>
            <label for="date">date de publication</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>
        <div>
            <label for="image">video</label>
            <input type="text" name="video" id="video" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" value="envoyer">
    </form>    
</div>
    

<?php require 'partials/footer.php'; ?>