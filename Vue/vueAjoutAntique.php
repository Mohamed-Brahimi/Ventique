<?php $titre = "Ajouter une antique"; ?>
<?php ob_start(); ?>

<html>
<form action="index.php?action=creerAntique" method="post">
    <h2>Ajouter une offre</h2>
    <p>
        <select name="utilisateur_id" id="utilisateur_id">
            <?php foreach ($utils as $utilisateur): ?>
                <option value="<?= $utilisateur['id'] ?>"><?= $utilisateur['nom'] ?></option>
            <?php endforeach; ?>
        </select>
        <br> <br>
        <label for="nom">Nom de l'article</label> : <input type="text" name="nom" id="nom" required><br />
        <label for="description">Description de l'article</label> : <input type="text" name="description"
            id="description" required><br />
        <label for="prix">Prix minimal : </label> <input type="number" name="prix" id="prix" required> <br />
        <input type="submit" value="Proposer" />
        <a href="index.php?"><input type="button" value="Annuler"></a>
    </p>
</form>

</html>
<?php $contenu = ob_get_clean() ?>
<?php require 'gabarit.php' ?>