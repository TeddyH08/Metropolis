<?php
 
require 'assets/db/connexion/auth.php';
forcer_utilisateur_connecte();
 
require 'assets/db/connexion/connectdb.php';

if ($_SESSION['role'] == 2) {

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/icon.png">

    <title>Metropolis</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/crud.css">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 4
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include("assets/includes/navbar.php") ?>
    <div class="titr">
        <h3>Ajout d'un rôle :</h3>
    </div>
    <form action="assets/db/crud/role/add.php" method="post">
                <label for="">Nom du rôle :</label>
                <input type="text" name="role" id="role" required></input>
                <div class="envoi">
                    <a href="admin.php" class="user_plus">
                        Retour
                    </a>
                    <input type="submit" name="submit" id="submit" value="Ajout d'un rôle">
                </div>
            </form>
    <?php include("assets/includes/footer.php") ?>
</body>
</html>

<?php 

} else {
    header('Location: accueil.php');
}

?>