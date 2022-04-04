<?php

    require("connectdb.php");
    
    $utilisateur = htmlspecialchars($_POST['utilisateur']);
    $mdp = md5(htmlspecialchars($_POST['mdp']));

    $pdoStat = $dbh->prepare('SELECT * FROM users WHERE utilisateur_users = ? AND mdp_users = ?');

    $pdoStat->execute(array($utilisateur, $mdp));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($pdoStat->rowCount() > 0) {
        session_start();
        $_SESSION['connecte'] = 1;
        $_SESSION['id_users'] = $row['id_users'];
        $_SESSION['nom'] = $row['nom_users'];
        $_SESSION['prenom'] = $row['prenom_users'];
        $_SESSION['utilisateur'] = $row['utilisateur_users'];
        $_SESSION['mail'] = $row['mail_users'];
        $_SESSION['abo'] = $row['abonnement_users'];
        $_SESSION['role'] = $row['id_role'];
        if ($_SESSION['role'] == 2) {
            header('Location: ../../../accueil.php?admin');
        } else {
            header('Location: ../../../accueil.php');
        }
    } else{
        echo "Votre pseudo ou mot de passe est incorrect";
    }

?>