<?php

    require("connectdb.php");
    
    $utilisateur = $_POST['utilisateur'];
    $mdp = $_POST['mdp'];

    $pdoStat = $dbh->prepare('SELECT * FROM users WHERE utilisateur_users = ? AND mdp_users = ?');

    $pdoStat->execute(array($utilisateur, $mdp));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($pdoStat->rowCount() > 0) {
        session_start();
        $_SESSION['connecte'] = 1;
        $_SESSION['nom'] = $row['nom_users'];
        $_SESSION['prenom'] = $row['prenom_users'];
        $_SESSION['utilisateur'] = $row['utilisateur_users'];
        $_SESSION['mail'] = $row['mail_users'];
        $_SESSION['abo'] = $row['abonnement_users'];
        header('Location: ../../../accueil.php');
    } else{
        echo "Votre pseudo ou mot de passe est incorrect";
    }

?>