<antique>
    <div class="antique-enchere">
        <header>
            <header>
                <h1 class="nomAntique"><?= $this->nettoyer($antique['nom']) ?></h1>
                <h3 class=""><?= $this->nettoyer($antique['description']) ?></h3>
                <h3>offert par <?= $this->nettoyer($antique['nomUtil']) ?></h3>
            </header>
            <p>Avec comme minimum : <?= $antique['prix'] ?> $</p>
    </div>
</antique>

<header>
    <h1 id="SectionOffre"> Offres : </h1>
</header>
<?php

foreach ($offres as $offre): ?>
    <?php if ($offre['efface'] == 0): ?>

        <div class="container-offres-enchere">
            <p>
                <?= $offre['dateOffre'] ?>
                <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
            </p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>