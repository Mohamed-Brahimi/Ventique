<form action="AdminAntiques/ajouter" method="post">
    <h2>Ajouter une antique</h2>
    <p>
        <label for="nom">Nom de l'article</label> : <input type="text" name="nom" id="nom" required><br />
        <label for="description">Description de l'article</label> : <input type="text" name="description"
            id="description" required><br />
        <label for="prix">Prix minimal </label> : <input type="number" name="prix" id="prix" required> <br />
    </p>

    <div class="button-list">

        <input type="submit" value="Proposer" class="button" />
        <a href="/Ventique" class="button">Annuler</a>
</form>


</div>