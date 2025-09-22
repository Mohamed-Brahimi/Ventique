<h2>Liste des offres :</h2>

<?php foreach ($offres as $offre): ?>
    <?php if ($offre['utilisateur_id'] == $_SESSION["utilisateur"]['id']): ?>
        <?php if ($offre['efface'] == 0): ?>
            <p>
                <a href='AdminOffres/confirmer/<?= $this->nettoyer($offre['id']) ?>'>[supprimer]</a>
                <?= $offre['dateOffre'] ?>             <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $

            <?php else: ?>
            <p>
                <a href='AdminOffres/retablir/<?= $this->nettoyer($offre['id']) ?>'>[restaurer]</a>
                Offre retiré le <?= $offre['dateOffre'] ?> par <?= $offre['nomUtil'] ?>.

            <?php endif; ?>
            <a href="<?= "AdminAntiques/antiques" . $offre['antique_id'] ?>">
                Pour : <?= $offre['nom_antique'] ?>
            </a>
        </p>
        <hr>
    <?php else: ?>
        <?php if ($offre['efface'] == 0): ?>
            <p>

                <?= $offre['dateOffre'] ?>             <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
                <a href="<?= "AdminAntiques/antiques" . $offre['antique_id'] ?>">
                    Pour : <?= $offre['nom_antique'] ?>
                </a>
            </p>
            <hr>
        <?php endif; ?>
    <?php endif; ?>

<?php endforeach; ?>