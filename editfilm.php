<?php
 
require 'assets/db/connexion/auth.php';
forcer_utilisateur_connecte();
 
require 'assets/db/crud/film/edit.php';

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
        <h3>Lecture d'un film :</h3>
    </div>
    <div class="infos_user">
        <div div>
            <div class="f"><p>Nom du film :</p><p><?php echo $resultat["nom_pagefilm"] ?></p></div>
            <div class="f"><p>Top du film :</p><p><?php echo $resultat["top_film"] ?></p></div>
            <div class="f"><p>Affiche du film :</p><p><?php echo $resultat["affiche_film"] ?></p></div>
            <div class="f"><p>Genre du film :</p><p><?php echo $resultat["genre_film"] ?></p></div>
            <div class="f"><p>Photo du film :</p><p><?php echo $resultat["photo_pagefilm"] ?></p></div>
            <div class="f"><p>Synopsis du film :</p><p><?php echo $resultat["synopsis_pagefilm"] ?></p></div>
            <div class="f"><p>Trailer du film :</p><p>https://www.youtube.com/embed/<?php echo $resultat["trailer_pagefilm"] ?></p></div>
            <div class="f"><p>Avis du film :</p><p><?php echo $resultat["avis_pagefilm"] ?></p></div>
            <div class="f"><p>Infos du film :</p><p><?php echo $resultat["infos_film"] ?></p></div>
            <div class="f"><p>Acteurs du film :</p><p><?php echo $resultat["acteur_film"] ?></p></div>
        </div>
    </div>
    <div class="retour">
        <a href="admin.php" class="user_plus">
            Retour
        </a>
    </div>
    <?php include("assets/includes/footer.php") ?>
</body>