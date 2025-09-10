<?php
require_once "Model/Modele.php";

class Antique extends Modele
{
    // Retourne une antique selon l'id spécifié
    function getAntique($idAntique)
    {
        $sql = "SELECT * FROM antiques WHERE id LIKE ?";
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
        $antiques = $this->executerRequete($sql, array($antique));
        return $antiques;
    }
}