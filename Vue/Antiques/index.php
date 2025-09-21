<div class="container-antiques">
<?php foreach ($antiques as $antique)
: ?>


    <antique >
        <div class="antique">
            <header class="antique-header">
                <a href="<?= "Antiques/antiques" . $antique['id'] ?>">
                    <h1 class="antique-nom"><?= $antique['nom'] ?></h1>
                </a>
                <h3 class="antique-desc"><?= $antique['description'] ?></h3>

            </header>
            <p class="antique-prix"><?= $antique['prix'] ?>$</p>
        </div>
    </antique>
<?php endforeach; ?>
</div>