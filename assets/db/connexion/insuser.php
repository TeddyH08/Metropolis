<?php
    require("connectdb.php");
    if(isset($_POST)){
        if(isset($_POST["nom"]) && (!empty($_POST["nom"]))){
            $name = htmlspecialchars($_POST["nom"]);            
        }
        if(isset($_POST["prenom"]) && (!empty($_POST["prenom"]))){
            $firstname = htmlspecialchars($_POST["prenom"]);
        }
        if(isset($_POST["utilisateur"]) && (!empty($_POST["utilisateur"]))){
            $utilisateur = htmlspecialchars($_POST["utilisateur"]);
        }
        if(isset($_POST["mdp"]) && (!empty($_POST["mdp"]))){
            $password = md5(htmlspecialchars($_POST["mdp"]));
        }
        if(isset($_POST["mdp"]) && (!empty($_POST["mdp"]))){
            $passwords = md5(htmlspecialchars($_POST["mdps"]));
        }
        if(isset($_POST["mail"]) && (!empty($_POST["mail"]))){
            $email = htmlspecialchars($_POST["mail"]);
        }
        if(isset($_POST["abonnement"]) && (!empty($_POST["abonnement"]))){
            $abonnement = htmlspecialchars($_POST["abonnement"]);
        }
    }else{
        
    }

    
    $pdoStat = $dbh->prepare('SELECT * FROM users WHERE utilisateur_users = ? AND mail_users = ?');

    $pdoStat->execute(array($utilisateur, $email));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur == $row['utilisateur_users'] || $email == $row['mail_users']) {
        header('Location: ../../../inscription.php?error');
    } else if ($password != $passwords) {
        header('Location: ../../../inscription.php?mdperror');
    } else {
        $sqlRequest = "INSERT INTO `users` (`nom_users`, `prenom_users`, `utilisateur_users`, `mdp_users`, `mail_users`, `abonnement_users`, `id_role`) 
                        VALUES (?,?,?,?,?,?,'1');";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute(array($name,$firstname,$utilisateur,$password,$email,$abonnement));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../../../connexion.php?sucess');
    }

?>