<?php $this->titre = "Ventique - Offres" ?>

<?php foreach ($offres as $offre): ?>
    <?php if ($offre['efface'] == 1): ?>
        <p><a href="<?= "index.php?action=confirmer&id=" . $offre['id'] . "&aid=" . $antique['id'] ?>">[supprimer]</a>
            <?= $offre['dateOffre'] ?>         <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $</p>
    <?php else: ?>
        <p><a href="<?= "index.php?action=retablirOffre&id=" . $offre["id"] . "" . $antique['id'] ?>">[restaurer]</a>
            Offre retiré le <?= $offre['dateOffre'] ?> par <?= $offre['nomUtil'] ?>. </p>
    <?php endif; ?>
<?php endforeach; ?>