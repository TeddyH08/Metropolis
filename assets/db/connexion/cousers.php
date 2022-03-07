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
        header('Location: ../../../accueil.php');
    } else{
        echo "Votre pseudo ou mot de passe est incorrect";
    }

?>