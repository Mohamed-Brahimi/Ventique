<form action="AdminAntiques/modifier" method="post">
    <h2>Modifier une offre</h2>
    <p>
        <input type="hidden" name="id" value="<?= $antique['id'] ?>">
        <label for="nom">Nom de l'article</label> :
        <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($antique['nom']) ?>" required /><br />

        <label for="description">Description de l'article</label> :
        <input type="text" name="description" id="description" value="<?= htmlspecialchars($antique['description']) ?>"
            required /><br />

        <label for="prix">Prix minimal </label> :
        <input type="number" name="prix" id="prix" value="<?= htmlspecialchars($antique['prix']) ?>" required /> <br />
    </p>

    <div class="button-list">
        <input type="submit" value="Modifier" class="button" />
        <a href="AdminAntiques/antiques<?= $antique['id'] ?>" class="button">Annuler</a>
    </div>
</form>