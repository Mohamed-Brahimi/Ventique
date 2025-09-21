<?php $this->titre = "Ventique - Offres" ?>
<h2>Liste des offres pour des antiques : <?= $this->nettoyer($antique['nom']) ?></h2>
<?php foreach ($offres as $offre): ?>
    <?php if ($offre['efface'] == 0): ?>
        <p><a href="AdminOffres/confirmer/" <?= $this->nettoyer($offre['id']) ?>>[supprimer]</a>
            <?= $offre['dateOffre'] ?>         <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $</p>
    <?php else: ?>
        <p><a href="AdminOffres/retablir/" <?= $this->nettoyer($offre['id']) ?>>[restaurer]</a>
            Offre retiré le <?= $offre['dateOffre'] ?> par <?= $offre['nomUtil'] ?>. </p>
    <?php endif; ?>
<?php endforeach; ?>