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