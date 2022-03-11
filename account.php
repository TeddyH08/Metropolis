<?php

require 'assets/db/connexion/auth.php';
forcer_utilisateur_connecte();

require 'assets/db/film/accfilm.php';

require 'assets/db/film/accfilm.php';

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/icon.png">

    <title>Metropolis</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 4
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />

</head>

<body>
    <?php include("assets/includes/navbar.php") ?>
    <?php include("assets/includes/account/compte.php") ?>
    <?php include("assets/includes/footer.php") ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <script src="assets/js/slider.js"></script>
</body>
</html>