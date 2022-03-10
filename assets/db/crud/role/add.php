<?php
 
require '../../connexion/auth.php';
forcer_utilisateur_connecte();

require '../../connexion/connectdb.php';


    if(isset($_POST)){
        if(isset($_POST["role"]) && (!empty($_POST["role"]))){
            $name = htmlspecialchars($_POST["role"]);            
        }
    }else{
        
    }

    $pdoStat = $dbh->prepare('SELECT * FROM role WHERE nom_role = ?');

    $pdoStat->execute(array($name));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($name == $row['nom_role']) {
        echo "Rôle déjà existant";
    } else {
        $sqlRequest = "INSERT INTO `role` (`nom_role`) 
                        VALUES (?);";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute(array($name));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../../../../addrole.php');
    }

    ?>