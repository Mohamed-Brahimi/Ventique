<?php $titre = "Ventique - " . $antique['nom'];?>
<?php ob_start();?>
<antique>  
<header>
    <h1 class="nomAntique"><?= $antique['nom']?></h1>
    <h3 class=""><?= $antique['description']?></h3>
</header>    
    <p><?= $antique['prix']?></p>

</antique>
<hr>
<header>
    <h1  id="SectionOffre"> Offres : </h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['dateOffre']?>,<?= $commentaire['utilisateur_id']?> : offre <?= $commentaire['prix_propose']?></p>
    <?php endforeach; ?>