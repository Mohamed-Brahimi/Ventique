<?php $titre = 'Ventique'; ?>
<?php ob_start(); ?>
<a href="index.php?action=ajouter">Ajouter une antique</a>

<?php foreach ($antiques as $antique)
: ?>


    <antique>
        <header>
            <a href="<?= "index.php?action=antique&id=" . $antique['id'] ?>">
                <h1 class="nomAntique"><?= $antique['nom'] ?></h1>
            </a>
            <h3 class="descAntique"><?= $antique['description'] ?></h3>

        </header>
        <p><?= $antique['prix'] ?>$</p>
    </antique>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>