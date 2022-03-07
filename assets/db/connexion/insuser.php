<?php
    require("connectdb.php");
    if(isset($_POST)){
        if(isset($_POST["nom"])){
            $name = $_POST["nom"];            
        }
        if(isset($_POST["prenom"])){
            $firstname = $_POST["prenom"];
        }
        if(isset($_POST["utilisateur"])){
            $utilisateur = $_POST["utilisateur"];
        }
        if(isset($_POST["mdp"])){
            $password = $_POST["mdp"];
        }
        if(isset($_POST["mail"])){
            $email = $_POST["mail"];
        }
        if(isset($_POST["abonnement"])){
            $abonnement = $_POST["abonnement"];
        }
    }else{
        
    }
    
    $sqlRequest = "INSERT INTO `users` (`nom_users`, `prenom_users`, `utilisateur_users`, `mdp_users`, `mail_users`, `abonnement_users`, `id_role`) 
                    VALUES (?,?,?,?,?,?,'1');";
    $pdoStat = $dbh -> prepare($sqlRequest);
    $pdoStat->execute(array($name,$firstname,$utilisateur,$password,$email,$abonnement));
  
    header('Location: ../../../connexion.php');