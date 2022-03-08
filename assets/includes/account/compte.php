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

<div class="deco">
    <a href="assets/db/connexion/deco.php" class="user_deco">
        Déconnexion
    </a>
</div>