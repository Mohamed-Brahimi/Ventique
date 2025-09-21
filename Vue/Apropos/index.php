<?php $titre = 'À propos de Ventique'; ?>

<h3>Ventique</h3>
<h4> Le but de l'application : </h4>
<p>Cette application sert de site d'enchère pour des antiques. Elle permet à l'utilisateur d'observer les différentes
    antiques. Si l'utilisateur est connecter, il peut créer des annonces et mettre de l'argent sur des annonces tant que
    l'argent offerts dépasse le minimum de l'article. Un utilisateur peut aussi supprimer ses offres, les rétablir et
    modifier ses annonces. Pour se connecter il suffit d'appuyer sur le boutton connecter et d'entrer un email et
    password qui existe
</p>
<h4>Les associations:</h4>
<p>La tables offres possède est lié à la table antique par une foreign key nommé antique_id. Ça permet
    d'appeler les offres lié au antiques. CLa table 1 de la relation est la table antique, la table N est la table offre
</p>
<h4> Test : </h4>
<p>Voici un lien vers les test : <a href="test.php"> Clicker Ici</a></p>
<h4>Voici le schéma</h4>
<img src="pictures/schema.png" alt="" width="600" height="600">