<?php
 
require 'assets/db/connexion/auth.php';
forcer_utilisateur_connecte();
 
require 'assets/db/connexion/connectdb.php';

if ($_SESSION['role'] == 2) {
    $stmt = $dbh->prepare('SELECT * FROM users WHERE id_users = ?');
    $stmt->execute(array($_GET['id']));
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $utilisateur = isset($_POST['utilisateur']) ? $_POST['utilisateur'] : '';
            $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
            $abonnement = isset($_POST['abonnement']) ? $_POST['abonnement'] : '';
            $role = isset($_POST['role']) ? $_POST['role'] : '';

            $stmt = $dbh->prepare('UPDATE users SET nom_users = ?, prenom_users = ?, utilisateur_users = ?, mail_users = ?, abonnement_users = ?, id_role = ? WHERE id_users = ?');
            $stmt->execute(array($nom, $prenom, $utilisateur, $mail, $abonnement, $role, $_GET['id']));

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
        <h3>Modifications d'un projet :</h3>
    </div>

    <form action="updateusers.php?id=<?php echo $contact['id_users']; ?>" method="post">
        <label for="">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $contact['nom_users']; ?>" required></input>

        <label for="">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $contact['prenom_users']; ?>" required></input>

        <label for="">Nom d'utilisateur :</label>
        <input type="text" name="utilisateur" id="utilisateur" value="<?php echo $contact['utilisateur_users']; ?>" required></input>

        <label for="">Email :</label>
        <input type="text" name="mail" id="mail" value="<?php echo $contact['mail_users']; ?>" required></input>

        <label for="pet-select">Choisir un abonnement:</label>
        <select name="abonnement" id="abonnement" value="Abonnement" >
            <option><?php echo $contact['abonnement_users']; ?></option>
            <option>Standard</option>
            <option>VIP</option>
            <option>VIP++</option>
        </select>

        <label for="pet-select">Choisir un rôle :</label>
        <select name="role" id="role" value="Rôle" >
            <option><?php echo $contact['id_role']; ?></option>
            <option>1</option>
            <option>2</option>
        </select>

        <div class="envoi">
            <a href="admin.php" class="user_plus">
                Retour
            </a>
            <input type="submit" name="submit" id="submit" value="Modifications de l'utilisateur">
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