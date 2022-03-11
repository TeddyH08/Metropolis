<?php
 
require 'assets/db/connexion/auth.php';
forcer_utilisateur_connecte();
 
require 'assets/db/connexion/connectdb.php';

if ($_SESSION['role'] == 2) {
    $stmt = $dbh->prepare('SELECT * FROM pagefilm WHERE id_pagefilm = ?');
    $stmt->execute(array($_GET['id']));
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $top = isset($_POST['top']) ? $_POST['top'] : '';
            $affiche = isset($_POST['affiche']) ? $_POST['affiche'] : '';
            $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
            $photo = isset($_POST['photo']) ? $_POST['photo'] : '';
            $synopsis = isset($_POST['synopsis']) ? $_POST['synopsis'] : '';
            $trailer = isset($_POST['trailer']) ? $_POST['trailer'] : '';
            $avis = isset($_POST['avis']) ? $_POST['avis'] : '';
            $infos = isset($_POST['infos']) ? $_POST['infos'] : '';
            $acteurs = isset($_POST['acteurs']) ? $_POST['acteurs'] : '';


            $stmt = $dbh->prepare('UPDATE pagefilm SET nom_pagefilm = ?, top_film = ?, affiche_film = ?, genre_film = ?, photo_pagefilm = ?, synopsis_pagefilm = ?, trailer_pagefilm = ?, avis_pagefilm = ?, infos_film = ?, acteur_film = ? WHERE id_pagefilm = ?');
            $stmt->execute(array($nom, $top, $affiche, $genre, $photo, $synopsis, $trailer, $avis, $infos, $acteurs, $_GET['id']));

            header('Location: admin.php');
        }
    }
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
        <h3>Modifications du film :</h3>
    </div>
    <form action="updatefilm.php?id=<?php echo $contact['id_pagefilm']; ?>" method="post">
        <label for="">Nom du film :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $contact['nom_pagefilm']; ?>" required></input>

        <label for="">Top du film : (500px * 300px)</label>
        <input type="text" name="top" id="top" value="<?php echo $contact['top_film']; ?>" required></input>

        <label for="">Affiche du film : (800px * 500px)</label>
        <input type="text" name="affiche" id="affiche" value="<?php echo $contact['affiche_film']; ?>" required></input>

        <label for="">Genre du film :</label>
        <select name="genre" id="genre" value="genre" required>
            <option><?php echo $contact['genre_film']; ?></option>
            <option>Action</option>
            <option>Science-Fiction</option>
            <option>Comédie</option>
        </select>

        <label for="">Photo du film : (1920px * 1080px)</label>
        <input type="text" name="photo" id="photo" value="<?php echo $contact['photo_pagefilm']; ?>" required></input>

        <label for="">Synopsis du film : (600 caractères max.)</label>
        <textarea type="text" name="synopsis" id="synopsis" required><?php echo $contact['synopsis_pagefilm']; ?></textarea>

        <label for="">Trailer du film : (URL)</label>
        <input type="text" name="trailer" id="trailer" value="<?php echo $contact['trailer_pagefilm']; ?>" required></input>

        <label for="">Avis du film : </label>
        <input type="text" name="avis" id="avis" value="<?php echo $contact['avis_pagefilm']; ?>" required></input>

        <label for="">Infos du film : (600 caractères max.)</label>
        <textarea type="text" name="infos" id="infos" required><?php echo $contact['infos_film']; ?></textarea>

        <label for="">Acteurs du film : (8 max.)</label>
        <input type="text" name="acteurs" id="acteurs" value="<?php echo $contact['acteur_film']; ?>" required></input>
            
        <div class="envoi">
            <a href="admin.php" class="user_plus">
                Retour
            </a>
            <input type="submit" name="submit" id="submit" value="Modification du film">
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