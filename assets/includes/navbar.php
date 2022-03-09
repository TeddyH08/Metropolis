<header>
    <nav>
        <div class="tout">
            <div class="titre">
                <img src="assets/img/logo2.jpg" class="logo">
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 2){ ?>
                    <a href="admin.php?admin" class="user_admin">
                        CRUD
                    </a>
                <?php } ?>
            </div>
            <ul id="navbar" class="ul">
                <form action="assets/db/film/recherche.php" method="post" class="rechercher">
                    <input type="search" id="recherche" name="recherche">
                    <input type="submit" name="cherche" id="cherche" value="&#xf002" class="fa-solid fa-magnifying-glass">
                </form>
                <div><li class="naav"><a href="accueil.php"><i class="fa-solid fa-house"></i> Accueil</a></li></div>
                <div><li class="naav"><a href="#type"><i class="fa-solid fa-film"></i> Types de films</a></li></div>
                <div><li class="naav"><a href="account.php"><i class="fa-solid fa-user"></i> Mon compte</a></li></div>
            </ul>
            <div class="menu" id="toggle-button">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
</header>

<script src="assets/js/navbar.js"></script>