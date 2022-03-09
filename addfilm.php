<?php
 
require 'assets/db/connexion/auth.php';
forcer_utilisateur_connecte();
 
require 'assets/db/connexion/connectdb.php';

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
    <form action="assets/db/crud/film/add.php" method="post">
                <label for="">Nom du film :</label>
                <input type="text" name="nom" id="nom" required></input>

                <label for="">Top du film : (500px * 300px)</label>
                <input type="text" name="top" id="top" required></input>

                <label for="">Affiche du film : (800px * 500px)</label>
                <input type="text" name="affiche" id="affiche" required></input>

                <label for="">Genre du film :</label>
                <select name="genre" id="genre" value="genre" required>
                    <option>Action</option>
                    <option>Science-Fiction</option>
                    <option>Comédie</option>
                </select>

                <label for="">Photo du film : (1920px * 1080px)</label>
                <input type="text" name="photo" id="photo" required></input>

                <label for="">Synopsis du film : (600 caractères max.)</label>
                <textarea type="text" name="synopsis" id="synopsis" required></textarea>

                <label for="">Trailer du film : (URL)</label>
                <input type="text" name="trailer" id="trailer" required></input>

                <label for="">Avis du film : </label>
                <input type="text" name="avis" id="avis" required></input>

                <label for="">Infos du film : (600 caractères max.)</label>
                <textarea type="text" name="infos" id="infos" required></textarea>

                <label for="">Acteurs du film : (8 max.)</label>
                <input type="text" name="acteurs" id="acteurs" required></input>
            
                <div class="envoi">
                    <a href="admin.php" class="user_plus">
                        Retour
                    </a>
                    <input type="submit" name="submit" id="submit" value="Ajout d'un film">
                </div>
            </form>
    <?php include("assets/includes/footer.php") ?>
</body>
</html>