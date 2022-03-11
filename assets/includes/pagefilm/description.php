<div class="description">
    <div class="avis">
        <h3>Avis :</h3>
        <div class="note">
            <p>Note :</p>
            <p><?php echo $resultat["avis_pagefilm"] ?> / 5</p>
        </div>
        <div class="addfav">
            <p>Ajouter aux favoris :</p>
            <?php 

                $sqlfav = "SELECT * FROM avoir WHERE id_pagefilm= ? AND id_users= ?";
                $requetefav=$dbh->prepare($sqlfav);
                $requetefav->execute(array($_GET['id'], $_SESSION['id_users']));
                $nombrefav = $requetefav->fetch();
                if($nombrefav >= 1) { 
            ?>
                    <a href="assets/db/film/fav.php?id=<?php echo $_GET['id'] ?>"><i class="fa-solid fa-heart red" id="favoa"></i></a>
            <?php } else { ?> 
                    <a href="assets/db/film/fav.php?id=<?php echo $_GET['id'] ?>"><i class="fa-solid fa-heart grey" id="favod"></i></a>
            <?php } ?>
        </div>
    </div>

    <div class="infos">
        <h3>Informations :</h3>
        <p><?php echo $resultat["infos_film"] ?></p>
    </div>

    <div class="acteurs">
        <h3>Acteurs :</h3>
        <div class="act">
            <div class="nom_act">
                <p><?php echo $resultat["acteur_film"] ?></p>
            </div>
        </div>
    </div>
</div>