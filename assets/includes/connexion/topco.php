<div class="top">
    <img src="assets/img/bgmetro.jpg" class="bg_img">

    <a href="index.php" class="user_return">
        Retour
    </a>

    <a href="inscription.php" class="user_incription">
        Inscription
    </a>

    <div class="connexion">
        <div class="container_co">
            <h3>Connexion :</h3>

            <?php if (isset($_GET['sucess'])){ ?>
                <p class="sucess">Vous êtes bien inscrit, vous pouvez maintenant vous connecter !</p>
            <?php } ?>

            <?php if (isset($_GET['error'])){ ?>
                <p class="error">Votre pseudo ou mot de passe est incorrect</p>
            <?php } ?>

            <div class="separator"></div>

            <form action="assets/db/connexion/cousers.php" method="post" class="animate__animated animate__fadeIn">
                <label for="">Nom d'utilisateur :</label>
                <input type="text" name="utilisateur" id="utilisateur" required>

                <label for="">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp" required>

                <div class="envoi">
                    <input type="submit" value="Connexion">
                </div>
            </form>
        </div>
    </div>
</div>