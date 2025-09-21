<h2>Liste des offres :</h2>

<?php foreach ($offres as $offre): ?>
    <?php if ($offre['utilisateur_id'] == $_SESSION["utilisateur"]['id']): ?>
        <?php if ($offre['efface'] == 0): ?>
            <p><a href='AdminOffres/confirmer/<?= $this->nettoyer($offre['id']) ?>'>[supprimer]</a>
                <?= $offre['dateOffre'] ?>             <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
            <?php else: ?>
            <p><a href='AdminOffres/retablir/<?= $this->nettoyer($offre['id']) ?>'>[restaurer]</a>
                Offre retiré le <?= $offre['dateOffre'] ?> par <?= $offre['nomUtil'] ?>.
            <?php endif; ?>
        <?php else: ?>
        <p>
            <?php if ($offre['efface'] == 0): ?>

                <?= $offre['dateOffre'] ?>             <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
            <?php endif; ?>
        <?php endif; ?>
        Pour : <?= $offre['nom_antique'] ?>
    </p>
    <hr><?php endforeach; ?>