<div class="top">
    <img src="assets/img/bgmetro.jpg" class="bg_img">

    <a href="index.php" class="user_return">
        Retour
    </a>

    <a href="connexion.php" class="user_connexion">
        Connexion
    </a>

    <div class="inscription">
        <div class="container_ins">
            <h3>Inscription :</h3>

            <div class="separator"></div>

            <form action="assets/db/connexion/insuser.php" method="post" class="animate__animated animate__fadeIn">
                <?php if (isset($_GET['error'])){ ?>
                    <p class="error">Votre Nom d'utilisateur ou votre mail est déjà existant</p>
                <?php } ?>
                <?php if (isset($_GET['mdperror'])){ ?>
                    <p class="error">Vos mot de passe ne correspondent pas !</p>
                <?php } ?>
                <label for="">Nom :</label>
                <input type="text" name="nom" id="nom" required></input>

                <label for="">Prénom :</label>
                <input type="text" name="prenom" id="prenom" required></input>

                <label for="">Nom d'utilisateur :</label>
                <input type="text" name="utilisateur" id="utilisateur" required></input>

                <label for="">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp" required></input>

                <label for="">Confirmer Mot de passe :</label>
                <input type="password" name="mdps" id="mdps" required></input>

                <label for="">Email</label>
                <input type="email" name="mail" id="mail" required></input>

                <label for="pet-select">Choisir un abonnement:</label>

                <select name="abonnement" id="abonnement" value="Abonnement" required>
                    <option>Standard</option>
                    <option>VIP</option>
                    <option>VIP++</option>
                </select>

                <div class="envoi">
                    <a href="abonnement.php" class="user_plus">
                        Voir les abonnements
                    </a>
                    <input type="submit" name="submit" id="submit" value="Inscription">
                </div>
            </form>
        </div>
    </div>
</div>