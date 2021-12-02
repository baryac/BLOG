<?php 
require 'model/functions.php';
require 'partials/header.php';

if(isset($_POST) && !empty($_POST)){
    var_dump($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = connectAuteurs($email, $password);
    if($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $user['pseudo'];
        header('location:index.php');
    }
}
?>

<div class="container text-white">
    <form action="" method="post">
        <div>
            <label for="email">email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Envoyer"> 
    </form>
</div>

<div class="container form-group my-3">
            <button type="submit"  id="submit" class="btn btn-warning col-12"> <a href="index.php" class="text-decoration-none"> <span class="text-white"> Revenez à la page d'accueil</span></a></button>
</div>

<?php
require 'partials/footer.php';
?>