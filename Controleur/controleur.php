<?php
require 'Model/Modele.php';

// Afficher la liste des antiques
function acceuil()
{
    try {
        $antiques = getAntiques();
        require 'Vue/vueAccueil.php';
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require 'vueErreur.php';
    }
}
function antiques($id)
{
    $antique = getAntique($id);
    $offres = getOffres($id);
    $utilisateurs = getUtilisateurs();
    $utils = array();
    foreach ($utilisateurs as $utilisateur):
        $utils[$utilisateur['id']] = $utilisateur;
    endforeach;

    require 'Vue/vueAntique.php';
}
function offre($id)
{
    $uid = intval($_POST['utilisateur_id']);
    $id = intval($_POST['antique_id']);
    $antique = getAntique($id);
    $offre = $_POST;

    setOffre($offre);
    header('Location: index.php?action=antique&id=' . $id);

}
function erreur($msgErreur)
{
    require 'vueErreur.php';
}
