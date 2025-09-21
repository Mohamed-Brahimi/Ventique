<form action="AdminAntiques/ajouter" method="post">
    <h2>Ajouter une offre</h2>
    <p>
        <label for="nom">Nom de l'article</label> : <input type="text" name="nom" id="nom" required><br />
        <label for="description">Description de l'article</label> : <input type="text" name="description"
            id="description" required><br />
        <label for="prix">Prix minimal </label> : <input type="number" name="prix" id="prix" required> <br />
        <input type="submit" value="Proposer" />
    </p>
</form>``