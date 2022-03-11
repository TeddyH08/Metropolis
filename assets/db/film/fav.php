<?php

require '../connexion/auth.php';
forcer_utilisateur_connecte();

require '../connexion/connectdb.php';

$sqlfav = "SELECT * FROM avoir WHERE id_pagefilm= ? AND id_users= ?";
$requetefav=$dbh->prepare($sqlfav);
$requetefav->execute(array($_GET['id'], $_SESSION['id_users']));
$nombrefav = $requetefav->fetch();

if ($nombrefav >= 1) {
    $users = $_SESSION['id_users'];
    $film = $_GET['id'];
    $sqladd = "DELETE FROM `avoir` WHERE `avoir`.`id_pagefilm` = ? AND `avoir`.`id_users` = ?";
    $requeteadd = $dbh->prepare($sqladd);
    $requeteadd->execute(array($film, $users));
    header('Location: ../../../pagefilm.php?id='. $_GET['id'] .'#favod');
} else {
    $users = $_SESSION['id_users'];
    $film = $_GET['id'];
    $sqladd = "INSERT INTO avoir(id_pagefilm, id_users) VALUES (?, ?)";
    $requeteadd = $dbh->prepare($sqladd);
    $requeteadd->execute(array($film, $users));
    header('Location: ../../../pagefilm.php?id='. $_GET['id'] .'#favoa');
}

?>