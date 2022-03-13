<div class="titre_compte">
    <h2>Mon compte</h2>
</div>

<div class="compte">
    <div class="profil">
        <h3>Mon profil :</h3>

        <div class="separator"></div>

        <div class="base">
            <div class="base_profil">
                <p>Nom :</p>
                <p>Prénom :</p>
                <p>Nom d'utilisateur :</p>
                <p>Email :</p>
                <p>Abonnement :</p>
            </div>

            <div class="session">
                <p><?php echo $_SESSION['nom']; ?></p>
                <p><?php echo $_SESSION['prenom']; ?></p>
                <p><?php echo $_SESSION['utilisateur']; ?></p>
                <p><?php echo $_SESSION['mail']; ?></p>
                <p><?php echo $_SESSION['abo']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="slide favoris">
    <h3>Mes favoris :</h3>

    <div class="separator"></div>
    
    <div class="multiple-items slider">
        <?php foreach ($resultfav as $valuefav) { 
                foreach ($result as $value) {
                    if ($_SESSION['id_users'] == $valuefav['id_users']) {
                        if ($value["id_pagefilm"] == $valuefav['id_pagefilm']) { 
        ?>
                <div class="slider_items">
                    <div class="hov">
                        <a href="pagefilm.php?id=<?php echo $value["id_pagefilm"] ?>" id="<?php echo $value["id_pagefilm"] ?>" class="ti" width=100%>
                            <?php echo $value["nom_pagefilm"] ?>
                            <br>
                            <br>
                            <?php echo $value["synopsis_pagefilm"] ?>
                        </a>
                        <a href="pagefilm.php?id=<?php echo $value["id_pagefilm"] ?>" id="<?php echo $value["id_pagefilm"] ?>"><img src="<?php echo "assets/img/affiche/" . $value['affiche_film']?>" width=100%></a>
                    </div>
                </div>
        <?php }}}} ?>
    </div>
</div>

<div class="deco">
    <a href="assets/db/connexion/deco.php" class="user_deco">
        Déconnexion
    </a>
</div>