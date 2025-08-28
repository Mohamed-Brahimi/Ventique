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
 <?php foreach ($offres as $offre): ?>
    <p><?= $offre['dateOffre']?>,<?= $offre['utilisateur_id']?> : offre <?= $offre['prix_propose']?></p>
    <?php endforeach; ?> 
    <form action="offres.php" method="post">
        <h2>Ajouter une offre</h2>
        <p>
            <label for="utilisateur_id">Utilisateur Id</label> : <input type="number" name="utilisateur_id" id="utilisateur_id">
            <br> <br>
            <label for="prix_propose">Prix Proposé</label> :  <input type="number" name="prix_propose" id="prix_propose" /><br />
            <input type="hidden" name="antique_id" value="<?= $antique['id'] ?>" /><br />
            <input type="submit" value="Proposer" />
        </p>
    </form>

    <?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php';?>
