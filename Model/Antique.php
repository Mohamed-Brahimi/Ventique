<?php
require_once "Framework/Modele.php";

class Antique extends Modele
{
    // Retourne une antique selon l'id spécifié
    function getAntique($idAntique)
    {
        $sql = "SELECT antiques.id, antiques.utilisateur_id, antiques.nom, antiques.description, antiques.prix, antiques.image, utilisateurs.nom as nomUtil
         FROM antiques INNER JOIN utilisateurs ON  antiques.utilisateur_id = utilisateurs.id  WHERE antiques.id  LIKE ?";
        $antique = $this->executerRequete($sql, array($idAntique));
        if ($antique->rowCount() == 1)
            return $antique->fetch();
        else
            throw new Exception("Aucun antique correspond à l'identifiant `$idAntique`");
    }
    function getAntiques()
    {
        $sql = "SELECT * FROM antiques  ORDER by id desc";
        $antiques = $this->executerRequete($sql);
        return $antiques;
    }
    function setAntique($antique)
    {
        $sql = 'INSERT INTO antiques (utilisateur_id,nom,description,prix,image) VALUES (?, ?, ?, ?, "image.png") ';
        $antiques = $this->executerRequete($sql, [$antique['utilisateur_id'], $antique['nom'], $antique['description'], $antique['prix']]);
        return $antiques;
    }
    function updateAntiques($antique)
    {
        $sql = "UPDATE antiques SET nom = ?, description = ?, prix = ? WHERE id = ?";
        $antiques = $this->executerRequete($sql, [$antique['nom'], $antique['description'], $antique['prix'], $antique['id']]);
        return $antiques;
    }
}