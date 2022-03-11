<div class="fond">
    <img src="assets/img/4k/<?php echo $resultat["photo_pagefilm"] ?>" class="fond_img">

    <div class="trailer">
        <h3>Bande annonce :</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $resultat["trailer_pagefilm"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="sinopsis">
        <h3>Synopsis :</h3>
        <p><?php echo $resultat["synopsis_pagefilm"] ?></p>
    </div>
</div>