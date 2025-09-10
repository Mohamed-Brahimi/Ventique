<?php
require_once "Model/Modele.php";

class Offre extends Modele
{
    // Retourne une antique selon l'id spécifié
    function getOffre($id)
    {
        $sql = "select offres.id, offres.dateOffre, offres.prix_propose, utilisateurs.nom as nomUtil
        from offres INNER JOIN utilisateurs on offres.utilisateur_id = utilisateurs.id where offres.id LIKE ? ORDER BY dateOffre
        DESC";
        $offres = $this->executerRequete($sql, array($id));
        return $offres->fetch();
    }


    function setOffre($offre)
    {
        $sql = 'INSERT INTO offres (antique_id,utilisateur_id,prix_propose,dateOffre) VALUES (?, ?, ?, NOW())';
        $offres = $this->executerRequete($sql, array($offre));
        return $offres;
    }
    function supprimerOffre($id_offre)
    {
        $sql = 'DELETE FROM offres WHERE id = ?';
        $this->executerRequete($sql, array($id_offre));
    }
}
