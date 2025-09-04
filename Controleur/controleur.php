<?php
require 'Model/Modele.php';

// Afficher la liste des antiques
function acceuil()
{

    $antiques = getAntiques();
    require 'Vue/vueAccueil.php';

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
function offre()
{
    $id = intval($_POST['antique_id']);
    $offre = $_POST;

    setOffre($offre);
    header('Location: index.php?action=antique&id=' . $id);

}
function suppressionOffre()
{
    $oid = intval($_GET['id']);
    $aid = intval($_GET['aid']);
    supprimerOffre($oid);
    header('Location: index.php?action=antique&id=' . $aid);

}
function confirmer($oid, $aid)
{
    $offre = getOffre($oid);
    $antique = getAntique($aid);
    require 'Vue/vueConfirmer.php';
}
function erreur($msgErreur)
{
    require 'Vue/vueErreur.php';
}
