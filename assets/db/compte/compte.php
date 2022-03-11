<?php

require 'assets/db/connexion/connectdb.php';

$query = "SELECT * FROM users WHERE id_users = ?";
$retour = $dbh -> prepare($query);
$retour->execute(array($_GET['id']));

$resultat = $retour->fetch(PDO::FETCH_ASSOC);

?>