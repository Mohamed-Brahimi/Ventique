<a href="AdminAntiques/ajoutAntique" id="linkAjouterAntique">Ajouter une antique</a>

<?php var_dump($_SESSION["utilisateur"]); ?>
<?php
foreach ($antiques as $antique)
: ?>


    <antique>
        <header>
            <a href="<?= "AdminAntiques/antiques/" . $antique['id'] ?>">
                <h1 class="nomAntique"><?= $antique['nom'] ?></h1>
            </a>
            <h3 class="descAntique"><?= $antique['description'] ?></h3>

        </header>
        <p><?= $antique['prix'] ?>$</p>
    </antique>
<?php endforeach; ?>