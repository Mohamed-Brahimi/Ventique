<antique>
    <div class="antique-enchere">
        <header>
            <h1 class="antique-enchere-nom"><?= $antique['nom'] ?></h1>
            <h3 class="antique-enchere-desc"><?= $antique['description'] ?></h3>
            <h3 class="antique-enchere-util">offert par <?= $antique['nomUtil'] ?></h3>
        </header>
        <p class="antique-enchere-prix">Avec comme minimum : <?= $antique['prix'] ?> $</p>
    </div>
</antique>

<header>
    <h1 id="SectionOffre"> Offres : </h1>
</header>
<?php

foreach ($offres as $offre): ?>
    <div class="container-offres-enchere">
            <p>
                <?= $offre['dateOffre'] ?>         
                <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $
            </p>
    </div>
    
<?php endforeach; ?>
