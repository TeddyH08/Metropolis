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

            <p class="error"></p>

            <div class="separator"></div>

            <form action="assets/db/connexion/cousers.php" method="post" class="animate__animated animate__fadeIn" id="formajax">
                <label for="">Nom d'utilisateur :</label>
                <input type="text" name="utilisateur" id="utilisateur" required>

                <label for="">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp" required>

                <div class="envoi">
                    <input type="submit" value="Connexion" >
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/ajax.js"></script>