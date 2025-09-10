<?php
require_once "Framework/Modele.php";

class Utilisateur extends Modele
{
    // Retourne une antique selon l'id spécifié
    function getUtilisateur($idUtilisateur)
    {
        $sql = 'SELECT * FROM utilisateurs WHERE id LIKE ?';
        $utilisateur = $this->executerRequete($sql, array($idUtilisateur));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch();
        else
            throw new Exception("Aucun utilisateur ne correspond à l'identifiant `$idUtilisateur`");
    }
    function getUtilisateurs()
    {
        $sql = 'SELECT * FROM utilisateurs';
        $utilisateurs = $this->executerRequete($sql);
        return $utilisateurs;
    }

    function setUtilisateur($util)
    {
        $sql = 'INSERT INTO utilisateur (nom,email,password) VALUES (?, ?, ?) ';
        $utils = $this->executerRequete($sql, array($util));
        return $utils;
    }
}
