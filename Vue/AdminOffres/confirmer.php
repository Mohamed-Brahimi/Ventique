<?php $this->$titre = "Supprimer l'offre"; ?>
<article>
    <header>
        <p>
        <h2>Supprimer ?</h2>
        <?= $offre['nomUtil'] ?>, offre : <?= $offre['prix_propose'] ?> </p>
        <strong><?= $offre['dateOffre'] ?></strong>
    </header>

</article>
<form action="Adminoffres/supprimer/<?= $offre['id'] ?>" method="post">
    <input type="submit" value="Confirmer">
    <a href="Adminantiques/antiques/<?= $offre['id'] ?>"><input type="button" value="Annuler"></a>
</form>