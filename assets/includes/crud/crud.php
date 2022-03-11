<?php

    $sqlRequestusers = ("SELECT * FROM users");
    $pdoStatusers = $dbh -> prepare($sqlRequestusers);
    $pdoStatusers->execute();
    
    $resultusers = $pdoStatusers->fetchAll(PDO::FETCH_ASSOC);

    $sqlRequestfilm = ("SELECT * FROM pagefilm");
    $pdoStatfilm = $dbh -> prepare($sqlRequestfilm);
    $pdoStatfilm->execute();
    
    $resultfilm = $pdoStatfilm->fetchAll(PDO::FETCH_ASSOC);

    $sqlRequestrole = ("SELECT * FROM role");
    $pdoStatrole = $dbh -> prepare($sqlRequestrole);
    $pdoStatrole->execute();
    
    $resultrole = $pdoStatrole->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <div class="row">
        <h2>Bienvenue dans le CRUD</h2>
    </div>
    <div class="row">
        <h3>Partie Utilisateurs :</h3>
        <br>
        <a href="adduser.php" class="btn btn-success">Ajouter un utilisateur</a>         
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover table-bordered users"> 
                <thead>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Mot de passe</th>
                    <th>Email</th>
                    <th>Abonnement</th>
                    <th>Role</th>
                </thead>

                <tbody>
                    <?php foreach ($resultusers as $value) {
                        echo '<td>' . $value['nom_users'] . '</td>';
                        echo '<td>' . $value['prenom_users'] . '</td>';
                        echo '<td>' . $value['utilisateur_users'] . '</td>';
                        echo '<td>' . $value['mdp_users'] . '</td>';
                        echo '<td>' . $value['mail_users'] . '</td>';
                        echo '<td>' . $value['abonnement_users'] . '</td>';
                        echo '<td>' . $value['id_role'] . '</td>';
                        echo '<td>';
                        echo '<a class="btn" href="edituser.php?id=' . $value['id_users'] . '">Lire</a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a class="btn btn-success" href="updateusers.php?id=' . $value['id_users'] . '">Modifier</a>';// un autre td pour le bouton d'update
                        echo '</td>';
                        echo'<td>';
                        echo '<a class="btn btn-danger" href="deleteuser.php?id=' . $value['id_users'] . ' ">Supprimer</a>';// un autre td pour le bouton de suppression
                        echo '</td>';
                        echo '</tr>';
                        ?>
                        <br>
                        <br>
                        <br>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <h3>Partie Rôles :</h3>
        <br>
        <a href="addrole.php" class="btn btn-success">Ajouter un rôle</a>         
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover table-bordered role"> 
                <thead>
                    <th>Id du rôle</th>
                    <th>Rôle</th>
                </thead>

                <tbody>
                    <?php foreach ($resultrole as $value) {
                        echo '<td>' . $value['id_role'] . '</td>';
                        echo '<td>' . $value['nom_role'] . '</td>';   
                        echo '<td>';
                        echo '<a class="btn" href="editrole.php?id=' . $value['id_role'] . '">Lire</a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a class="btn btn-success" href="updaterole.php?id=' . $value['id_role'] . '">Modifier</a>';// un autre td pour le bouton d'update
                        echo '</td>';
                        echo'<td>';
                        echo '<a class="btn btn-danger" href="deleterole.php?id=' . $value['id_role'] . ' ">Supprimer</a>';// un autre td pour le bouton de suppression
                        echo '</td>';
                        echo '</tr>';
                        ?>
                        <br>
                        <br>
                        <br>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <h3>Partie Films :</h3>
        <br>
        <a href="addfilm.php" class="btn btn-success">Ajouter un film</a>         
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover table-bordered films"> 
                <thead>
                    <th>Nom du film</th>
                    <th>Top</th>
                    <th>Affiche</th>
                    <th>Genre</th>
                    <th>Photo</th>
                    <th>Synopsis</th>
                    <th>Avis</th>
                    <th>Infos</th>
                    <th>Acteurs</th>
                </thead>

                <tbody>
                    <?php foreach ($resultfilm as $value) {
                        echo '<td>' . $value['nom_pagefilm'] . '</td>';
                        echo '<td>' . $value['top_film'] . '</td>';
                        echo '<td>' . $value['affiche_film'] . '</td>';
                        echo '<td>' . $value['genre_film'] . '</td>';
                        echo '<td>' . $value['photo_pagefilm'] . '</td>';
                        echo '<td>' . $value['synopsis_pagefilm'] . '</td>';
                        echo '<td>' . $value['trailer_pagefilm'] . '</td>';
                        echo '<td>' . $value['avis_pagefilm'] . '</td>';
                        echo '<td>' . $value['infos_film'] . '</td>';
                        echo '<td>' . $value['acteur_film'] . '</td>';
                        echo '<td>';
                        echo '<a class="btn" href="editfilm.php?id=' . $value['id_pagefilm'] . '">Lire</a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a class="btn btn-success" href="updatefilm.php?id=' . $value['id_pagefilm'] . '">Modifier</a>';// un autre td pour le bouton d'update
                        echo '</td>';
                        echo'<td>';
                        echo '<a class="btn btn-danger" href="deletefilm.php?id=' . $value['id_pagefilm'] . ' ">Supprimer</a>';// un autre td pour le bouton de suppression
                        echo '</td>';
                        echo '</tr>';
                        ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>