<?php $titre = "Supprimer l'offre"; ?>
<?php ob_start(); ?>
<article>
    <header>
        <?= var_dump($offre) ?>
        <p>
        <h2>Supprimer ?</h2>
        <?= $offre['nomUtil'] ?>, offre : <?= $offre['prix_propose'] ?> </p>
        <strong><?= $offre['dateOffre'] ?></strong>
    </header>

</article>
<form action="index.php?action=supprimerOffre&id=<?= $offre['id'] ?>&aid=<?= $antique['id'] ?>" method="post">
    <input type="submit" value="Confirmer">
    <a href="index.php?action=antique&id=<?= $antique['id'] ?>"><input type="button" value="Annuler"></a>
</form>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>