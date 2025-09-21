<?php $titre = 'À propos de Ventique'; ?>

<h3>Ventique</h3>
<h4> Le but de l'application : </h4>
<p>Cette application sert de site d'enchère pour des antiquités. Elle permet à l'utilisateur d'observer les différentes
    Antiques. Si l'utilisateur est connecté, il peut créer des annonces et mettre de l'argent sur des annonces tant que
    l'argent offert dépasse le minimum de l'article. Un utilisateur peut aussi supprimer ses offres, les rétablir et
    modifier ses annonces. Pour se connecter, il suffit d'appuyer sur le bouton connecter et d'entrer un email
    password qui existe
</p>
<h4>Les associations:</h4>
<p>La tables offres possède est liée à la table antique par une foreign key nommée antique_id. Ça permet
    d'appeler les offres liées aux antiques. La relation est de type 1-N, où une antique peut avoir plusieurs offres,
    mais chaque offre n'appartient qu'à une seule antique.
</p>
<h4> Test : </h4>
<p>Voici un lien vers les tests : <a href="test.php"> Cliquer Ici</a></p>
<h4>Voici le schéma</h4>
<img src="pictures/schema.png" alt="" width="600" height="600">