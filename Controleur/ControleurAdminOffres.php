<?php

require_once 'Model/Offre.php';

class ControleurAdminOffres extends Controleur
{
    private $offre;

    public function __construct()
    {
        $this->offre = new Offre();
    }
    public function index()
    {
        $offres = $this->offre->getAllOffres();
        $this->genererVue(['list_offres' => $offres]);
    }

    public function getOffresByAntiqueId($idAntique)
    {
        $offres = $this->offre->getOffre($idAntique);
        $this->genererVue(['offres' => $offres]);
    }

    public function offre()
    {
        $idOffre = $this->requete->getParametreId("id");
        $offre = $this->offre->getOffre($idOffre);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['offre' => $offre, 'erreur' => $erreur]);
    }
    public function ajouter()
    {

        $offres['antique_id'] = $this->requete->getParametreId('antique_id');
        $offres['user_id'] = $_SESSION["utilisateur"]['id'];
        $offres['prix_propose'] = $this->requete->getParametreId('prix');

        $this->rediriger(controleur: 'AdminAntiques', action: 'antiques/' . $offres['antique_id']);

    }
    public function confirmer()
    {
        $id = $this->requete->getParametreId("id");
        // Lire le commentaire afin d'obtenir le id de l'article associé
        $offre = $this->offre->getOffre($id);
        // Supprimer le commentaire à l'aide du modèle
        $this->offre->supprimerOffre($id);
        $this->rediriger(controleur: 'AdminAntiques', action: 'antiques/' . $offre['antique_id']);

    }

    // Rétablir un commentaire
    public function retablir()
    {
        $id = $this->requete->getParametreId("id");
        // Lire le commentaire afin d'obtenir le id de l'article associé
        $offre = $this->offre->getOffre($id);
        // Supprimer le commentaire à l'aide du modèle
        $this->offre->retablirOffre($id);
            $this->rediriger(controleur: 'AdminAntiques', action: 'antiques/' . $offre['antique_id']);


    }
}