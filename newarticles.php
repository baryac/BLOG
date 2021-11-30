<?php 

require 'model/functions.php';
require 'partials/header.php'; 

if(isset($_POST)){
    $title = $_POST['title'];
    $date_de_publication = $_POST['date_de_publication'];
    $content = $_POST['content'];


}


?>

<div class="container bg-light p-2">
    <form action="" method="post">
        <div class="row mt-2">
                    <p class="text-center fs-1">Nouvel Article</p>
                    <div class="col-6">
                        <label for="name">Titre</label>
                        <input type="text" name="name" class="form-control" id="title">
                    </div>
                    <div class="col-6">
                        <label for="date de publication">Date de publication</label>
                        <input type="date" name="date de publication" class="form-control" id="date_de_publication">
                    </div>
        </div>
        <div class="row mt-2">
                    <div class="col-12">
                        <label for="name">Content</label>
                        <input type="textarea" name="content" class="form-control" id="content">
                    </div>
        </div>
        <div class="row mt-2">
                    <div class="col-12">
                        <label for="name">Content</label>
                        <input type="textarea" name="content" class="form-control" id="content">
                    </div>
        </div>
        
    </form>
</div>


<?php 
    require 'partials/footer.php'; 
?>