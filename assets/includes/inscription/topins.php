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

            <form action="" method="post" class="animate__animated animate__fadeIn">
                <label for="">Nom :</label>
                <input type="text" required></input>

                <label for="">Prénom :</label>
                <input type="text" required></input>

                <label for="">Nom d'utilisateur :</label>
                <input type="text" required></input>

                <label for="">Mot de passe :</label>
                <input type="password" required></input>

                <label for="">Email</label>
                <input type="email" required></input>

                <label for="">Téléphone :</label>
                <input type="text" required></input>

                <label for="">Adresse :</label>
                <input type="text" required></input>

                <label for="">Abonnement <span>(changement possible dans votre espaces personnel)</span></label>
                <select required>
                    <option valeur="standard">Standard</option>
                    <option valeur="vip">VIP</option>
                    <option valeur="vip_plus">VIP ++</option>
                </select>

                <div class="envoi">
                    <a href="abonnement.php" class="user_plus">
                        Voir les abonnements
                    </a>
                    <input type="submit" value="Inscription">
                </div>
            </form>
        </div>
    </div>
</div>