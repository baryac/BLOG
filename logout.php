<?php 

require 'model/functions.php';
require 'partials/header.php';

session_destroy(); ?>;

<button type="submit"  id="submit" class="btn btn-dark mb-2"> <a href="login.php" class="text-decoration-none"> <span class="text-white">Connectez-vous</span></a></button>
<button type="submit"  id="submit" class="btn btn-dark  mb-2"> <a href="register.php" class="text-decoration-none"> <span class="text-white">Inscription </span></a></button>

<div class="container form-group my-3">
            <button type="submit"  id="submit" class="btn btn-warning col-12"> <a href="index.php" class="text-decoration-none"> <span class="text-white"> Revenez à la page d'accueil</span></a></button>
</div>
