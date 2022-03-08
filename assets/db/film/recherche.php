<?php

require '../connexion/connectdb.php';

$sqlRequest = ("SELECT * FROM pagefilm");
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute();

$result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $value) {
    $film = strtolower($value['nom_pagefilm']);
    $film_recherche = strtolower($_POST['recherche']);
    if ($film_recherche == $film) {
        header('Location: ../../../pagefilm.php?id='. $value["id_pagefilm"]);
    }
}

?>

<?php

require '../connexion/auth.php';
forcer_utilisateur_connecte();

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../../img/icon.png">

    <title>Metropolis</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 4
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />
</head>

<body>
    <p class="erreur">Ta recherche n'existe pas, désolé :c</p>
    <div class="retour_accueil">
        <a class="r_acc" href="../../../accueil">Retour à l'accueil</a>
    </div>
</body>
</html>