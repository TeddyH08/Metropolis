<?php
 
require '../../connexion/auth.php';
forcer_utilisateur_connecte();

require '../../connexion/connectdb.php';


    if(isset($_POST)){
        if(isset($_POST["nom"]) && (!empty($_POST["nom"]))){
            $name = htmlspecialchars($_POST["nom"]);            
        }
        if(isset($_POST["top"]) && (!empty($_POST["top"]))){
            $top = htmlspecialchars($_POST["top"]);
        }
        if(isset($_POST["affiche"]) && (!empty($_POST["affiche"]))){
            $affiche = htmlspecialchars($_POST["affiche"]);
        }
        if(isset($_POST["genre"]) && (!empty($_POST["genre"]))){
            $genre = htmlspecialchars($_POST["genre"]);
        }
        if(isset($_POST["photo"]) && (!empty($_POST["photo"]))){
            $photo = htmlspecialchars($_POST["photo"]);
        }
        if(isset($_POST["synopsis"]) && (!empty($_POST["synopsis"]))){
            $synopsis = htmlspecialchars($_POST["synopsis"]);
        }
        if(isset($_POST["trailer"]) && (!empty($_POST["trailer"]))){
            $trailer = htmlspecialchars($_POST["trailer"]);
        }
        if(isset($_POST["avis"]) && (!empty($_POST["avis"]))){
            $avis = htmlspecialchars($_POST["avis"]);
        }
        if(isset($_POST["infos"]) && (!empty($_POST["infos"]))){
            $infos = htmlspecialchars($_POST["infos"]);
        }
        if(isset($_POST["acteurs"]) && (!empty($_POST["acteurs"]))){
            $acteurs = htmlspecialchars($_POST["acteurs"]);
        }
    }else{
        
    }

    $pdoStat = $dbh->prepare('SELECT * FROM pagefilm WHERE nom_pagefilm = ?');

    $pdoStat->execute(array($name));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($name == $row['nom_pagefilm']) {
        echo "Film déjà existant !!";
    } else {
        $sqlRequest = "INSERT INTO `pagefilm` (`nom_pagefilm`, `top_film`, `affiche_film`, `genre_film`, `photo_pagefilm`, `synopsis_pagefilm`, `trailer_pagefilm`, `avis_pagefilm`, `infos_film`, `acteur_film`) 
                        VALUES (?,?,?,?,?,?,?,?,?,?);";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute(array($name,$top,$affiche,$genre,$photo,$synopsis,$trailer,$avis,$infos,$acteurs));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../../../../addfilm.php');
    }

    ?>