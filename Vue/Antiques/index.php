<a href="Antiques/ajouter">Ajouter une antique</a>

<?php foreach ($antiques as $antique)
: ?>


    <antique>
        <header>
            <a href="<?= "Antiques/antiques" . $antique['id'] ?>">
                <h1 class="nomAntique"><?= $antique['nom'] ?></h1>
            </a>
            <h3 class="descAntique"><?= $antique['description'] ?></h3>

        </header>
        <p><?= $antique['prix'] ?>$</p>
    </antique>
<?php endforeach; ?>