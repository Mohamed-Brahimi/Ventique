<?php $this->$titre = "Ventique - " . $antique['nom']; ?>

<antique>
    <header>
        <h1 class="nomAntique"><?= $antique['nom'] ?></h1>
        <h3 class=""><?= $antique['description'] ?></h3>
        <h3>offert par <?= $utils[$antique['utilisateur_id']]['nom'] ?></h3>
    </header>
    <p>Avec comme minimum : <?= $antique['prix'] ?> $</p>

</antique>
<hr>
<header>
    <h1 id="SectionOffre"> Offres : </h1>
</header>
<?php foreach ($offres as $offre): ?>
    <?php if ($offre['efface'] == 1): ?>
        <p><a href="Offres/confirmer/" <?= $this->nettoyer($offre['id']) ?>>[supprimer]</a>
            <?= $offre['dateOffre'] ?>         <?= $offre['nomUtil'] ?> : <?= $offre['prix_propose'] ?> $</p>
    <?php else: ?>
        <p><a href="Offres/retablir/" <?= $this->nettoyer($offre['id']) ?>>[restaurer]</a>
            Offre retiré le <?= $offre['dateOffre'] ?> par <?= $offre['nomUtil'] ?>. </p>
    <?php endif; ?>
<?php endforeach; ?>
<form action="Offres/offre" method="post">
    <h2>Ajouter une offre</h2>
    <p>
        <select name="utilisateur_id" id="utilisateur_id">
            <?php foreach ($utils as $utilisateur): ?>
                <option value="<?= $utilisateur['id'] ?>"><?= $utilisateur['nom'] ?></option>
            <?php endforeach; ?>
        </select>
        <br> <br>
        <label for="prix_propose">Prix Proposé</label> : <input type="number" name="prix_propose" id="prix_propose"
            required /><br />
        <input type="hidden" name="antique_id" value="<?= $antique['id'] ?>" /><br />
        <input type="submit" value="Proposer" />
    </p>
</form>