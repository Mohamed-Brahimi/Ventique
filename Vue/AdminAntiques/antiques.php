<antique>
    <header>
        <h1 class="nomAntique"><?= $antique['nom'] ?></h1>
        <h3 class=""><?= $antique['description'] ?></h3>
        <h3>offert par <?= $antique['nomUtil'] ?></h3>
    </header>
    <p>Avec comme minimum : <?= $antique['prix'] ?> $</p>

</antique>

<header>
    <?php if ($antique['utilisateur_id'] == $_SESSION["utilisateur"]['id']): ?>

        <h2><a href='AdminAntiques/modifierAntique/<?= $this->nettoyer($antique['id']) ?>'>Modifier</a></h2>
    <?php endif; ?>
    <hr>
    <h1 id="SectionOffre"> Offres : </h1>
</header>

<?php foreach ($offres as $offre): ?>
    <div class="container-offres-enchere">
        <?php if ($offre['utilisateur_id'] == $_SESSION["utilisateur"]['id']): ?>
            <?php if ($offre['efface'] == 0): ?>
                <p>
                    <a href='AdminOffres/confirmer/<?= $this->nettoyer($offre['id']) ?>'>[supprimer]</a>
                    <?= $offre['dateOffre'] ?>             <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
                </p>
            <?php else: ?>
                <p>
                    <a href='AdminOffres/retablir/<?= $this->nettoyer($offre['id']) ?>'>[restaurer]</a>
                    Offre retiré le <?= $offre['dateOffre'] ?> par <?= $offre['nomUtil'] ?>.
                </p>
            <?php endif; ?>
        <?php else: ?>
            <?php if ($offre['efface'] == 0): ?>
                <p>

                    <?= $offre['dateOffre'] ?>             <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
                </p>

            <?php endif; ?>
        <?php endif; ?>
    </div><?php endforeach; ?>
<form action="AdminOffres/ajouter" method="post">
    <h2>Ajouter une offre</h2>
    <p>
        <label for="prix">Prix Proposé</label> : <input type="number" name="prix" id="prix"
            min="<?= $antique['prix'] ?>" required /><br />
        <input type="hidden" name="antique_id" value="<?= $antique['id'] ?>" /><br />
        <input type="submit" value="Proposer" class="button" />
    </p>
</form>