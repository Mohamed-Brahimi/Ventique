<?php
require_once "Framework/Modele.php";

class Offre extends Modele
{
    function getAllOffres()
    {
        $sql = "select offres.id,offres.antique_id, offres.utilisateur_id, offres.dateOffre, offres.prix_propose, offres.efface, utilisateurs.nom as nomUtil, antiques.nom as nom_antique
     from offres INNER JOIN utilisateurs on offres.utilisateur_id = utilisateurs.id INNER JOIN antiques on offres.antique_id = antiques.id ORDER BY dateOffre DESC";
        $offres = $this->executerRequete($sql);
        return $offres->fetchAll();
    }
    // Retourne une offre selon l'id antique spécifié
    function getOffres($id)
    {
        $sql = "select offres.id,offres.antique_id, offres.utilisateur_id, offres.dateOffre, offres.prix_propose, offres.efface, utilisateurs.nom as nomUtil
     from offres INNER JOIN utilisateurs on offres.utilisateur_id = utilisateurs.id where antique_id LIKE ? ORDER BY dateOffre DESC";
        $offres = $this->executerRequete($sql, array($id));
        $resultat = $offres->fetchAll();
        return $resultat;
    }
    function getOffre($id)
    {
        $sql = "select * from offres where id LIKE ? ";
        $offres = $this->executerRequete($sql, array($id));
        $resultat = $offres->fetch();

        return $resultat;
    }



    function setOffre($offre)
    {
        $sql = 'INSERT INTO offres (antique_id,utilisateur_id,prix_propose,dateOffre) VALUES (?, ?, ?, NOW())';
        $offres = $this->executerRequete($sql, [$offre['antique_id'], $offre['user_id'], $offre['prix_propose']]);
        return $offres;
    }
    function supprimerOffre($id_offre)
    {
        $sql = 'UPDATE offres SET efface = 1 WHERE id = ?';
        $result = $this->executerRequete($sql, array($id_offre));
        return $result;
    }
    function retablirOffre($id_offre)
    {
        $sql = 'UPDATE offres SET efface = 0 WHERE id = ?';
        $result = $this->executerRequete($sql, array($id_offre));
        return $result;
    }
}
