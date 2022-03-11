<h2 id="type">Films à regarder</h2>

<!-- Action -->

<div class="slide">
   <h3>Action :</h3>
   <div class="multiple-items slider">
      <?php foreach ($result as $value) { ?>
         <?php if ($value["genre_film"] == "Action") { ?>
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
      <?php }} ?>
   </div>
</div>

<!-- Science Fiction -->

<div class="slide">
   <h3>Science Fiction :</h3>
   <div class="multiple-items slider">
      <?php foreach ($result as $value) { ?>
         <?php if ($value["genre_film"] == "Science-Fiction") { ?>
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
      <?php }} ?>
   </div>
</div>

<!-- Comédie -->

<div class="slide">
   <h3>Comédie :</h3>
   <div class="multiple-items slider">
      <?php foreach ($result as $value) { ?>
         <?php if ($value["genre_film"] == "Comédie") { ?>
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
      <?php }} ?>
   </div>
</div>

<div class="marg"></div>